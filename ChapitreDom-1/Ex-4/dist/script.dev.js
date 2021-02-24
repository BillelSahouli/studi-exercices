"use strict";

// Ajout du titre h3.
var contenu = document.getElementById('contenu');
var h3 = document.createElement('h3');
h3.append('Titre de la section');
document.body.prepend(h3); // Suppression des items de la liste.

var items = document.getElementsByTagName('li');
var _iteratorNormalCompletion = true;
var _didIteratorError = false;
var _iteratorError = undefined;

try {
  for (var _iterator = items[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
    item = _step.value;
    item.remove();
  } // Inversion des paragraphes.

} catch (err) {
  _didIteratorError = true;
  _iteratorError = err;
} finally {
  try {
    if (!_iteratorNormalCompletion && _iterator["return"] != null) {
      _iterator["return"]();
    }
  } finally {
    if (_didIteratorError) {
      throw _iteratorError;
    }
  }
}

var premierParagraphe = contenu.firstElementChild;
premierParagraphe.remove();
contenu.append(premierParagraphe);