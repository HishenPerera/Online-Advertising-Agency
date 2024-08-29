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




//creating delete button responsive

// Get the delete button element
const deleteButton = document.getElementById('delete');

// Add an event listener to the delete button
deleteButton.addEventListener('click', function () {
    // Get all the checked checkboxes
    const selectedAds = document.querySelectorAll('.ad-checkbox:checked');

    // Remove the ads associated with the checked checkboxes
    selectedAds.forEach(ad => {
        const adContainer = ad.closest('.ad-container');
        adContainer.parentNode.removeChild(adContainer);
    });
});