document.addEventListener("DOMContentLoaded", () => {
  navburger();
  // efectCloseNavBurger("(max-width:1023px)");
});

// function efectCloseNavBurger(menu) {
// let bkp = window.matchMedia(mq);
// let $menu = document.getElementById("navMenu");
// const responsive = (e) => {
//   let $menu = document.getElementById("navMenu");
//   if (e.matches && $menu.classList.contains("is-active")) {
//     // funcion al hacer click fuera del menu!
//     document.addEventListener("click", function (e) {
//       // const $menu = document.getElementById("navMenu");
//       //obtiendo informacion del DOM para
//       let $elementClick = e.target;
//       console.log($elementClick);
//       if ($elementClick.classList.contains("navbar-item")) {
//         console.log("dentro");
//       } else {
//         document.getElementById("navMenu").classList.toggle("is-active");
//         console.log("fuera");
//       }
//     });
//     console.log("menor a 1024");
//   }
// };
//*cuando ocurre el cambio de pantalla!
// bkp.addEventListener("change", responsive);
// responsive(bkp);
// }

function navburger() {
  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(
    document.querySelectorAll(".navbar-burger"),
    0
  );

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {
    // Add a click event on each of them
    $navbarBurgers.forEach((el) => {
      el.addEventListener("click", () => {
        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle("is-active");
        $target.classList.toggle("is-active");
        $target.classList.toggle("navbar-sombra");
      });
    });
  }
}
