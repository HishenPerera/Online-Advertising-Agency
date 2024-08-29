const logoutBtn = document.querySelector(".logout-btn");

if(logoutBtn){
    logoutBtn.addEventListener("click", ()=> {
        window.location.replace("login.html");
    });
}