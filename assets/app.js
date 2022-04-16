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
jQuery(document).ready(function($) {
    $(".slider-wrapper .row").slick({
      rows: 0,
      slidesToShow: 4,
      slidesToScroll: 1,
      focusOnSelect: true,
      easing: "ease-in-out",
      speed: 800,
      autoplay: true,
      autoplaySpeed: 3500,
      prevArrow:
        '<div class="slick-prev"><span class="fa fa-angle-left"></span></div>',
      nextArrow:
        '<div class="slick-next"><span class="fa fa-angle-right"></span></div>'
  });

  $(".slider-wrapper .row").on("setPosition", function() {
    $(this)
      .find(".slick-slide")
      .height("auto");
    var slickTrack = $(this).find(".slick-track");
    var slickTrackHeight = $(slickTrack).height();
    $(this)
      .find(".slick-slide")
      .css("height", slickTrackHeight + "px");
  });

  // imageScale
  $('.blog-image img').imageScale();
});

  // canvas
  function onloadDo(elementId) {
  // Canvas settings
  let end, j;
  let i, path;
  const canvas = document.getElementById(elementId);
  
  paper.setup(canvas);
  
  // Getting the view
  const { view } = paper.project;

  // The fun part
  const paths = new paper.Group;
  
  // Adding points to path
  const addPoints = function(path, quantity) {
    // Opening point
    path.add(view.bounds.bottomLeft);
    
    // Middle points
    for (let i = -1, end = quantity+1; i <= end; i++) {
      const x = (view.viewSize.width/quantity) * i;
      const y = view.viewSize.height / 4;
      path.add(new paper.Point(x, y));
    }
      
    // Closing point
    return path.add(view.bounds.bottomRight);
  };
    
  // Adding paths
  const addPath = function(quantity, color, opacity) {
    const path = new paper.Path();
    path.fillColor = color;
    path.opacity = opacity;
    
    addPoints(path, quantity);
    path.smooth();
    
    return path;
  };
    
  // Animating the paths
  const animatePath = (path, event, index) =>
    (() => {
      const result = [];
      for (let i = 0; i < path.segments.length; i++) {
        const segment = path.segments[i];
        if ((i > 0) && (i < (path.segments.length - 1))) {
          const sin = Math.sin(((event.time * .4) + i) - .5);
          result.push(segment.point.y = (sin * (i * 5)) + (view.viewSize.height / 4) + (index * 45));
        } else {
          result.push(undefined);
        }
      }
      return result;
    })()
  ;
    
  // Creating the paths
  const n = 2;
  const opacity = 1 / (n*2);
  for (j = 1, i = j, end = n; j <= end; j++, i = j) {
    path = addPath(6-i, '#fff', (i * i) * opacity);
    path.position.y += 15 * i;
    paths.addChild(path);
  }
    
  // View events
  view.onFrame = event =>
    (() => {
      const result = [];
      for (i = 0; i < paths.children.length; i++) {
        path = paths.children[i];
        result.push(animatePath(path, event, i));
      }
      return result;
    })()
  ;
  
  // Draw the results
  view.draw();
    
  return null;
};

window.onload = function() {
  onloadDo('canvas-top');
  onloadDo('canvas-bottom');
};

var canvas1 = document.getElementsByTagName('canvas')[0];
var canvas2 = document.getElementsByTagName('canvas')[1];
fitToContainer(canvas1);
fitToContainer(canvas2);

function fitToContainer(canvas){
  // Make it visually fill the positioned parent
  canvas.style.width ='100%';
  canvas.style.height='100%';
  // ...then set the internal size to match
  canvas.width  = canvas.offsetWidth;
  canvas.height = canvas.offsetHeight;
}