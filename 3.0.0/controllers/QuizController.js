import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
    static targets = [
        "quizQuiz"
    ]

    connect() {
        this.allQuiz();
    }



    quizNumber() {
        return [
            {
                id: 1,
                titel: "Das erste Quiz",
                beschreibung: "Some quick example text to build on the card title and make up the bulk of the card’s content.",
            },
            {
                id: 2,
                titel: "Das zweite Quiz",
                beschreibung: "Some quick example text to build on the card title and make up the bulk of the card’s content.",
            }
        ];
    }

    allQuiz() {
        const daten = this.quizNumber();

        daten.forEach((quiz) => {
            const col = document.createElement("div");
            col.className = "col-md-auto";

            const div = document.createElement("div");
            div.className = "card card-body mt-2 mb-2";

            const h5 = document.createElement("h5");
            h5.className = "card-title";
            h5.textContent = quiz.titel;

            const h6 = document.createElement("h6");
            h6.className = "card-subtitle mb-2 text-body-secondary";
            h6.textContent = `Quiz Nr. ${quiz.id}`;

            const p = document.createElement("p");
            p.className = "card-text";
            p.textContent = quiz.beschreibung;

            const a = document.createElement("a");
            a.className = "card-link text-decoration-none mt-auto";
            a.href = `quiz.php?id=${quiz.id}`;
            a.textContent = "Quiz starten";

            div.appendChild(h5);
            div.appendChild(h6);
            div.appendChild(p);
            div.appendChild(a);
            col.appendChild(div);
            this.quizQuizTarget.appendChild(col);
        });
    }
    
    quiz1() {
        return [
            {
                id: 1,
                frage: "Wie viel ist 1 + 1?",
                antwort: "2"
            }

        ]
    }
}