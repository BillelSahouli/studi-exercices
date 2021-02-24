"use strict";

var colorpicker = document.getElementById('colorpicker');

changeColor = function changeColor(ev) {
  var color = ev.target.value;
  console.log(color); // votre code ici
};

colorpicker.addEventListener('change', changeColor);