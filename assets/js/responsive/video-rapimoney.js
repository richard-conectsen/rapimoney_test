document.addEventListener("DOMContentLoaded", () => {
  videoResponsive("video-rapimoney", "(min-width:769px)");
});

function videoResponsive(id, mq) {
  let bkp = window.matchMedia(mq);

  const responsive = (bkp) => {
    let $video = document.getElementById(id);
    // console.log($video);
    if (bkp.matches) {
      $video.classList.toggle("is-3by1");
      $video.classList.remove("is-16by9");
    } else {
      $video.classList.remove("is-3by1");
      $video.classList.toggle("is-16by9");
    }
  };
  //*cuando ocurre el cambio de pantalla!
  bkp.addEventListener("change", responsive);
  responsive(bkp);
}
