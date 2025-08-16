import sys
import flask
import mysql.connector
import random
import string

from flask import Flask, redirect, render_template, request
from mysql.connector import Error
from config import Config

app = Flask(__name__)
app.config.from_object(Config)

@app.context_processor
def inject_versions():
    return dict(
        python_version=get_python_version(),
        flask_version=get_flask_version()
    )

def get_python_version():
    version_info = sys.version_info
    return f"{version_info.major}.{version_info.minor}.{version_info.micro}"

def get_flask_version():
    return flask.__version__

def get_db_connection():
    try:
        connection = mysql.connector.connect(
            host=app.config['MYSQL_HOST'],
            user=app.config['MYSQL_USER'],
            password=app.config['MYSQL_PASSWORD'],
            database=app.config['MYSQL_DB']
        )
        if connection.is_connected():
            return connection
    except Error as e:
        print(f"Fehler bei der Verbindung zur Datenbank: {e}")
        return None

@app.route('/')
def hallo():
    return render_template('index.html', bereich='Python-Bereich', pageTitle='Startseite der Python-Instanz')#

@app.route('/zahlen-vergleichen/', methods=['GET', 'POST'])
def zahlen_vergleichen():
    ergebnis = None  # Standardwert für das Ergebnis
    if request.method == 'POST':
        # Hole die eingegebenen Zahlen aus dem Formular
        try:
            zufaellige_zahl = int(request.form['zufaellige_zahl'])
            vergleichszahl = int(request.form['vergleichszahl'])
            # Vergleiche die Zahlen
            ergebnis = zahlen_vergleichen(zufaellige_zahl, vergleichszahl)
        except ValueError:
            ergebnis = "Bitte gib gültige Zahlen ein!"
    
    return render_template('zahlenvergleichen.html', ergebnis=ergebnis)

@app.route('/database-test/')
def test():
    connection = get_db_connection()
    if connection:
        cursor = connection.cursor()
        cursor.execute("SELECT 1")
        result = cursor.fetchone()
        cursor.close()
        connection.close()
        return render_template('database-test.html', bereich='Python-Bereich', pageTitle='Datenbanktest mit Python')
    else:
        return "Es gibt ein Problem bei der Datenbankverbindung. Die Seite wird aus Sicherheitsgründen nicht geladen.", 500

def generiere_passwort(laenge):
    if laenge < 1 or laenge > 81:
        return None
    zeichen = string.ascii_letters + string.digits + string.punctuation
    return ''.join(random.choice(zeichen) for _ in range(laenge))

@app.route('/passwortgenerator/', methods=['GET', 'POST'])
def passwortgenerator():
    passwort = None
    error = None
    if request.method == 'POST':
        eingabe = request.form.get('laenge', type=int)
        if eingabe is not None:
            passwort = generiere_passwort(eingabe)
            if not passwort:
                error = "Die Zahl muss zwischen 1 und 81 liegen."
    return render_template('passwortgenerator.html', bereich='Python-Bereich', pageTitle='Passwortgenerator', passwort=passwort, error=error)

@app.route('/umsatzrechner/')
def umsatzrechner_2023():
    monate_zuweisung = {
        1: 'Januar',
        2: 'Februar',
        3: 'März',
        4: 'April',
        5: 'Mai',
        6: 'Juni',
        7: 'Juli',
        8: 'August',
        9: 'September',
        10: 'Oktober',
        11: 'November',
        12: 'Dezember'
    }
    connection = get_db_connection()
    if connection:
        cursor = connection.cursor()
        cursor.execute("SELECT monat, umsatz FROM umsatz_2023")
        umsatz_2023 = cursor.fetchall()
        cursor.close()
        connection.close()
        umsatz_2023 = [(monate_zuweisung[monat], umsatz) for monat, umsatz in umsatz_2023]
        return render_template('umsatzrechner.html', bereich='Python-Bereich', pageTitle='Umsatzrechner 2023', umsatz_2023=umsatz_2023)
    else:
        return "Es gibt ein Problem bei der Datenbankverbindung. Die Seite wird aus Sicherheitsgründen nicht geladen.", 500


if __name__ == '__main__':
    app.run(debug=True)