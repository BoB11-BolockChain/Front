const modal = document.getElementById("info");
const btnsModal = document.getElementsByClassName("btn-info-sj");


for (var i = 0; i < btnsModal.length; i++){
    const eachblock = btnsModal[i];
    eachblock.addEventListener("click", e => {
        modal.style.display="flex"
    })
}

// for(var i = 0; i< title.length; i++){
//     const eachtitle = title[i];
//     eachtitle = title[i].val();
// }

modal.addEventListener("click", e => {
    const evTarget = e.target
    if(evTarget.classList.contains("info-overlay")){
        modal.style.display = "none"
    }
})



window.addEventListener("keyup", e => {
        if(modal.style.display === "flex" && e.key === "Escape"){
            modal.style.display = "none"
        }
    })

