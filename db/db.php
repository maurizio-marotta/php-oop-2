<?php

$categorie = [
  'cane' => new Category('Cane', 'fa-solid fa-dog'),
  'gatto' => new Category('Gatto', 'fa-solid fa-cat'),
  'pesce' => new Category('Pesce', 'fa-solid fa-fish'),
  'uccelli' => new Category('Uccelli', 'fa-solid fa-bird')
];

var_dump($categorie['cane']);



$prodotti = [
  new Food('pedigree Adult', 35.76, 'https://m.media-amazon.com/images/I/81u0jcx-7uL._AC_UL400_.jpg', $categorie['cane'], "400g", ['pollo', 'carote']),

  new Food('cesar', 25.47, 'https://m.media-amazon.com/images/I/81HXfY12a0S._AC_UL400_.jpg', $categorie['cane'], '150g', ['manzo', 'pomodori']),

  new Food('cibo gourmet', 17.49, 'https://m.media-amazon.com/images/I/71gabeunxzL._AC_UL400_.jpg', $categorie['gatto'], "85g", ['pollo']),

  new Food('Mangime per Pesci tetra min', 7.49, 'https://m.media-amazon.com/images/I/81CdIElbDBL._AC_UL400_.jpg', $categorie['pesce'], '30g', ['Lieviti', 'Alghe']),

  new accessori('Voliera per pappagalli', 89.99, 'https://m.media-amazon.com/images/I/81bBo1NBBfL._AC_UL400_.jpg', $categorie['uccelli'], 'ferro', '79 x 51,8 x 132 cm'),

  new accessori('Acquario per pesci rossi', 137.50, 'https://m.media-amazon.com/images/I/81ZSq-sMksL._AC_UL400_.jpg', $categorie['pesce'], 'vetro  e plastica' ,'nd'),

  new toys('Kong ', 19.49, 'https://m.media-amazon.com/images/I/415gNHXs2jL._AC_UL400_.jpg', $categorie['cane'], 'Indistuttibile', 'plastica'),

  new accessori('Tiragraffi', 34.99, 'https://m.media-amazon.com/images/I/710wXOnm2yL._AC_UL400_.jpg', $categorie['gatto'], 'Morbido con pallina in lana', '80cm di altezza')
];
