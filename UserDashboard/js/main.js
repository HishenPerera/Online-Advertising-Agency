//add hovered class to selected list item
// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};



//getting <a> elemnt by its id
var linkElement = document.getElementById("manage");
var linkElement = document.getElementById("payment");


//add event listner
linkElement.addEventListener("click",function(event){
  event.preventDefault();

  //getting the value of href
  var href = linkElement.getAttribute("href");

  //redirect ttolinked location
  window.location.href = href;
});
