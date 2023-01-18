
fullScreen();
function fullScreen(){
    let fullscreen = false;
    let header = document.getElementById('header-id');
    let overview = document.getElementById('dashbord-overview-id');
    let dhashbordBody = document.getElementById('dashbord-body-id');
    // let footer = document.getElementById('footer-id');
    let icon = document.getElementById("fullscreen-icon");
    icon.addEventListener("click", function(){
        if(!fullscreen){
            document.querySelector("table").classList.add("table-fullscreen");
            icon.innerHTML = "<i class='fas fa-compress'></i>";
            icon.setAttribute("title", "Exit Full Screen");
            fullscreen = true;
            header.style.display = "none";
            // footer.style.display = "none";
            overview.style.display = "none";
            dhashbordBody.className = "col-md-12";
        }
        else{
            document.querySelector("table").classList.remove("table-fullscreen");
            icon.innerHTML = "<i class='fas fa-expand'></i>";
            icon.setAttribute("title", "View Full Screen");
            fullscreen = false;
            header.style.display = "block";
            // footer.style.display = "block";
            overview.style.display = "block";
            dhashbordBody.className = "col-md-9";
        }
    });
}


function displayTabel(index){
    developersTabel = document.getElementById('table-developers-id');
    postesTabel = document.getElementById('table-posts-id');
    categoriesTabel = document.getElementById('table-categories-id');

    if(index == 1){
        developersTabel.classList.remove("d-block");
        developersTabel.classList.add("d-none");
        postesTabel.classList.remove("d-none");
        postesTabel.classList.add("d-block");
        categoriesTabel.classList.remove("d-block");
        categoriesTabel.classList.add("d-none");
    }
    else  if(index == 2){
        developersTabel.classList.remove("d-none");
        developersTabel.classList.add("d-block");
        postesTabel.classList.remove("d-block");
        postesTabel.classList.add("d-none");
        categoriesTabel.classList.remove("d-block");
        categoriesTabel.classList.add("d-none");
    }
    else  if(index == 3){
        developersTabel.classList.remove("d-block");
        developersTabel.classList.add("d-none");
        postesTabel.classList.remove("d-block");
        postesTabel.classList.add("d-none");
        categoriesTabel.classList.remove("d-none");
        categoriesTabel.classList.add("d-block");
    }
}

