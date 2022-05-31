window.addEventListener("load", function () {
  carouselOfTestimonies();
});

function carouselOfTestimonies() {
  let $slidersFace = document.querySelector(".carousels__face");
  console.log("carousels face");
  new Glider($slidersFace, {
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    dots: ".carousels__indicadores",
    arrows: {
      prev: ".carousels__anterior",
      next: ".carousels__siguiente",
    },
  });
}
