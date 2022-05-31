window.addEventListener("load", function () {
  carouselOfFuntions();
});

function carouselOfFuntions() {
  let $sliders = document.querySelector(".carousel__lista");
  console.log("sliders operaciones");
  new Glider($sliders, {
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    dots: ".carousel__indicadores",
    arrows: {
      prev: ".carousel__anterior",
      next: ".carousel__siguiente",
    },
  });
}
