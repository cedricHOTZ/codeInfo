/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

import { Tooltip, Toast, Popover } from 'bootstrap';

// start the Stimulus application
import './bootstrap';

 const $ = require('jquery');
 
import 'slick-carousel';
  global.$ = global.jQuery = $;
  (function( $ ) {
    // Use $ as usual here, e.g.:
    $(".slider-wrapper").slick();
})( jQuery );
// var myModal = document.getElementById('myModal')
// var myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', function () {
//   myInput.focus()
// })
// Basic initialization is like this:
// $('.your-class').slick();

// I added some other properties to customize my slider
// Play around with the numbers and stuff to see
// how it works.
// $('.slick-carousel').slick({
//   infinite: true,
//   slidesToShow: 3, // Shows a three slides at a time
//   slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
//   arrows: true, // Adds arrows to sides of slider
//   dots: true // Adds the dots on the bottom
// });

// $('.slick-carousel').slick({
//   lazyLoad: 'ondemand',
//   slidesToShow: 3,
//   slidesToScroll: 3
// });
	
// $('.slickcarousel').slick({
//   dots: true,
//   infinite: true,
//   speed: 300,
//   slidesToShow: 1,
//   adaptiveHeight: true
// });
$('.slickcarousel').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});

// $('.slickcarousel').slick({
//   centerMode: true,
//   centerPadding: '60px',
//   slidesToShow: 3,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 3
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 1
//       }
//     }
//   ]
// });

// console.log('dfgkldgflkgf');

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})