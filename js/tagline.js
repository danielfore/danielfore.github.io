var textArray = [
    'War & Pizzas',
    'A Mega Epic Pizza Battle',
    'The Pizza Palooza',
    "A Slice o' The City",
    'Not a Pizza Tour',
    "Gotta Slice 'em All",
    'Pizza For a Purpose',
    "Sacramento's Best Pies",
    'There Can Only Be One!',
    'Slice, Judge, and Rock & Roll'
];
var randomNumber = Math.floor(Math.random()*textArray.length);

openElement=document.getElementById("tagline");
openElement.innerHTML=textArray[randomNumber];