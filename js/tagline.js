var textArray = [
    'War & Pizzas',
    'Mega Epic Pizza Battle'
    'Pizza-Palooza'
    "A Slice o' The City"
];
var randomNumber = Math.floor(Math.random()*textArray.length);

openElement=document.getElementById("tagline");
openElement.innerHTML=textArray[randomNumber];