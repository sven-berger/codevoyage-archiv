import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
  static targets = [
    "thumbnail",
    "bigPicture"
  ]

  connect() {
    this.bilderGenerieren();
    this.videoGenerieren();
  }

  bilderGenerieren() {
    const thumbnailContainer = this.thumbnailTarget;

    for (let i = 1; i <= 9; i++) {
        const div = document.createElement("div");
        div.className = "border rounded col-md-auto";

        const img = document.createElement("img");
        img.src = `../images/instagram/${i}.jpg`;
        img.alt = `Bild ${i}`;
        img.className = "thumbnail img-fluid";
        img.setAttribute("data-action", "click->Gallery#bildAnzeigen");
        
        div.appendChild(img);
        thumbnailContainer.appendChild(div);
    }
  }

  videoGenerieren() {
    const thumbnailContainer = this.thumbnailTarget;

    for (let i = 1; i <= 1; i++) {
        const div = document.createElement("div");
        div.className = "border rounded col-md-auto";

        const video = document.createElement("video");
        video.src = `../images/instagram/${i}.mp4`;
        video.alt = `Video ${i}`;
        video.className = "thumbnail img-fluid";
        video.setAttribute("data-action", "click->Gallery#bildAnzeigen");
        
        div.appendChild(video);
        thumbnailContainer.appendChild(div);
    }
  }

  bildAnzeigen(event) {
    event.preventDefault();

    this.bigPictureTarget.innerHTML = "";

    const target = event.currentTarget;
    const tag = target.tagName.toLowerCase();
    const src = target.getAttribute("src");
    const alt = target.getAttribute("alt");

    if (tag === "video") {
      const video = document.createElement("video");
      video.src = src;
      video.alt = alt;
      video.controls = true;
      video.autoplay = false;
      video.className = "img-fluid rounded";
      video.style = "width: 100%; height: 700px;";
      this.bigPictureTarget.appendChild(video);
    } else {
      const img = document.createElement("img");
      img.src = src;
      img.alt = alt;
      img.className = "img-fluid rounded";
      img.style = "width: 100%; height: 700px;";
      this.bigPictureTarget.appendChild(img);
    }
  }

}