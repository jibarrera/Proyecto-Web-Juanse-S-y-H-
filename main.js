const $btnUp = document.getElementById("up");

document.addEventListener("click", (e)=>{
    if (e.target === $btnUp || e.target.matches(".fa-arrow-up")){
        window.scrollTo({
            behavior: "smooth", 
            top: 0
        });
    }
});
