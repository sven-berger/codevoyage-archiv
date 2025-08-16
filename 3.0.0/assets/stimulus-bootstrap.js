import { Application } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

// Importiere die Controller
import StimulusLernenController from "../controllers/StimulusLernenController.js"
import TestFormularController from "../controllers/TestFormularController.js"

import ZahlenRatenController from "../controllers/ZahlenRatenController.js"
import InhaltAusgabeController from "../controllers/InhaltAusgabeController.js"
import MiniTaschenrechnerController from "../controllers/MiniTaschenrechnerController.js"
import AdventskalenderController from "../controllers/AdventskalenderController.js"
import TaschenrechnerController from "../controllers/TaschenrechnerController.js"
import GalleryController from "../controllers/GalleryController.js"
import QuizController from "../controllers/QuizController.js"
import GPTController from "../controllers/GPTController.js"


// Starte Anwendungen, indem die Controller registriert werden
const application = Application.start()

application.register("TestFormular", TestFormularController)
application.register("StimulusLernen", StimulusLernenController)

application.register("ZahlenRaten", ZahlenRatenController)
application.register("InhaltAusgabe", InhaltAusgabeController)
application.register("MiniTaschenrechner", MiniTaschenrechnerController)
application.register("Adventskalender", AdventskalenderController)
application.register("Taschenrechner", TaschenrechnerController)
application.register("Gallery", GalleryController)
application.register("Quiz", QuizController)
application.register("GPT", GPTController)