let imgVideo = document.getElementById("video-rapimoney");
let modal = document.getElementById("page-modal");
let cerrar = document.getElementsByClassName("modal-close")[0];
let videoModal = document.getElementsByClassName("video-modal")[0];

imgVideo.addEventListener("click", () => {
  modal.style.display = "block";
  videoModal.setAttribute("src", "https://www.youtube.com/embed/SnLhrZD_X4k");
  // console.log("clik modal");
  // console.log(videoModal);
});

cerrar.addEventListener("click", () => {
  modal.style.display = "none";
  videoModal.removeAttribute("src");
  // console.log("modal close");
  // console.log(videoModal);
});

window.addEventListener("click", (e) => {
  if (e.target.className == "modal-background") {
    videoModal.removeAttribute("src");
    modal.style.display = "none";
    // console.log(videoModal);
  }
});
