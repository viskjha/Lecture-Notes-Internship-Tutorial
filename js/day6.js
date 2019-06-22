// let paragraphs = document.getElementsByTagName("p");
// console.log(paragraphs[0].innerHTML);

// let paragraphs = document.getElementsByClassName("demo");
// console.log(paragraphs[1].innerHTML);

// let querySelector = document.querySelectorAll("p.demo");
// console.log(querySelector[2].innerHTML);

// console.log(querySelector[2].childNodes[0].nodeValue);


document.getElementById("btnclick").addEventListener("blur", clicked);

function clicked()
{
    alert("clicked");
}