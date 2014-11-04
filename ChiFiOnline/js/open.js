$(function() {
    var now = new Date();
    var today = now.getDay();

// Sutter Hours

    if(today == 0 ){
        openElement=document.getElementById("sutter");
        openElement.innerHTML="12:00 - 9:00 pm";
    } else if(today <= 4){
        openElement=document.getElementById("sutter");
        openElement.innerHTML="4:00 – 9:00 pm";
    } else if(today == 5){
        openElement=document.getElementById("sutter");
        openElement.innerHTML="4:00 – 10:00 pm";
    } else {
        openElement=document.getElementById("sutter");
        openElement.innerHTML="12:00 - 10:00 pm";
    }

// Palladio Hours

    if(today <= 4){
        openElement=document.getElementById("palladio");
        openElement.innerHTML="11:30 – 10:00 pm";
    } else {
        openElement=document.getElementById("palladio");
        openElement.innerHTML="11:30 – 11:00 pm";
    }

// Midtown Hours

    if(today == 0 ){
        openElement=document.getElementById("midtown");
        openElement.innerHTML="11:30 - 10:00 pm";
    } else if(today <= 3){
        openElement=document.getElementById("midtown");
        openElement.innerHTML="4:00 – 10:00 pm";
    } else if(today == 4){
        openElement=document.getElementById("midtown");
        openElement.innerHTML="11:30 – 10:00 pm";
    } else {
        openElement=document.getElementById("midtown");
        openElement.innerHTML="11:30 - 11:00 pm";
    }

// Roseville Hours

    if(today <= 4 ){
        openElement=document.getElementById("roseville");
        openElement.innerHTML="11:30 - 9:00 pm";
    } else {
        openElement=document.getElementById("roseville");
        openElement.innerHTML="11:30 - 10:00 pm";
    }


});