
const popupButton = document.getElementById('popupButton');
const popupContainer = document.getElementById('popupContainer');
// const popupButtons = document.querySelectorAll("#edit_popup");
// const popupContainer1 = document.getElementById('popupContainer1');

// popupButtons.forEach((popupButton) => {
//   popupButton.addEventListener('click', (event) => {
//     event.preventDefault();
//     popupContainer1.classList.toggle('hidden');
//   });
// });


popupButton.addEventListener('click', function () {
  popupContainer.classList.toggle('hidden');
});







