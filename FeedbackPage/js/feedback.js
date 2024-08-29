const btn = document.querySelector(".button");
const feedback = document.querySelector(".feedback-container");
btn.addEventListener("click", () => {
    feedback.innerHTML += "<p>Thank you for your feedback</p>";
});
