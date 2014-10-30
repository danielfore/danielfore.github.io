var textArray = [
    'War & Pizzas',
    'Mega Epic Pizza Battle',
    'Pizza-Palooza',
    "A Slice o' The City",
    'Not a Pizza Tour',
    "Gotta Slice 'em All",
    'Pizza For a Purpose',
    'Eatsa Pizza',
    "Sacramento's Best Pies"
];
var randomNumber = Math.floor(Math.random()*textArray.length);

openElement=document.getElementById("tagline");
openElement.innerHTML=textArray[randomNumber];