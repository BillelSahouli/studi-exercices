const colorpicker = document.getElementById('colorpicker');

changeColor = (ev) => {
   const color = ev.target.value;
   console.log(color)
   // votre code ici
}

colorpicker.addEventListener('change', changeColor);