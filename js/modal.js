// scripts.js

const openModalBtn = document.getElementById("openModalBtn");
const modal = document.getElementById("myModal");
const closeModal = document.getElementsByClassName("close")[0];
const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");

openModalBtn.addEventListener("click", () => {
  modal.style.display = "block";
});

closeModal.addEventListener("click", () => {
  modal.style.display = "none";
});

window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

loginForm.addEventListener("submit", (event) => {
  event.preventDefault(); // Prevent default form submission

  const username = document.getElementById("loginUsername").value;
  const password = document.getElementById("loginPassword").value;

  // You can perform client-side validation here if needed

  // Submit the form synchronously
  loginForm.submit();
});

registerForm.addEventListener("submit", (event) => {
  event.preventDefault(); // Prevent default form submission

  const username = document.getElementById("registerUsername").value;
  const password = document.getElementById("registerPassword").value;

  // You can perform client-side validation here if needed

  // Submit the form synchronously
  registerForm.submit();
});
