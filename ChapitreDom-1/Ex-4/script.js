// Ajout du titre h3.
let contenu = document.getElementById('contenu')

let h3 = document.createElement('h3')
h3.append('Titre de la section')
document.body.prepend(h3)

// Suppression des items de la liste.
let items = document.getElementsByTagName('li')

for(item of items) {
  item.remove()
}

// Inversion des paragraphes.
let premierParagraphe = contenu.firstElementChild
premierParagraphe.remove()

contenu.append(premierParagraphe)