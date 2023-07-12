import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

import.meta.glob(["../assets/images/**", "../assets/fonts/**"]);

// custom js
// import "../assets/js/jquery.js";
import "../assets/js/appear.js";
import "../assets/js/owl.js";
// import "../assets/js/wow.js";
import "../assets/js/odometer.js";
import "../assets/js/mixitup.js";
/* import "../assets/js/knob.js"; */
// import "../assets/js/isotope.js";
/* import "../assets/js/popper.min.js"; */
import "../assets/js/parallax-scroll.js";
import "../assets/js/parallax.min.js";
// import "../assets/js/bootstrap.min.js";
// import "../assets/js/tilt.jquery.min.js";
// import "../assets/js/magnific-popup.min.js";

import "../assets/js/script.js";

