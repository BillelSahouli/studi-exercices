//Affichez l'ensemble des attributs du champ texte
let inputText = document.getElementById('email')

for(let attribut of inputText.attributes) {
  console.log(attribut)
}
//Affichez la valeur de l'attribut id du champ texte
let inputTextId = inputText.getAttribute('id')
console.log(inputTextId)

//Vérifiez que la case à cocher possède l'attribut checked. 
//Décochez la case si elle est cochée.
let checkbox = document.getElementById('connexion')

if (checkbox.hasAttribute('checked')) {
  console.log(checkbox.getAttribute('checked'))
  checkbox.removeAttribute('checked')
}

let form = document.querySelector('form')

//Affichez le ou les éléments n'ayant aucun attribut.
for(element of form.elements) {
  if (!element.hasAttributes()) {
    console.log(`Cette élément n'a pas d'attributs : ${element}`);
  }
}