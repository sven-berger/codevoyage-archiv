package Javaübungen;

public class ArraysAnlegen {

	public static void main(String[] args) {
		
		String[] feld = new String[6];
		
		feld[0] = "Sven";
		feld[1] = "Oliver";
		feld[2] = "Berger";
		feld[3] = "21.01.1991";
		feld[4] = "Bad Soden";
		feld[5] = "Fachinformatiker für Anwendungsentwicklung";
		
        for (String ausgabe : feld) {
            System.out.println(ausgabe);
        }

	}

}