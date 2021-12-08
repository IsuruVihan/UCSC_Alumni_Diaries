const editbtn = document.getElementById("edit-btn");
const cancelbtn = document.getElementById("cancel-btn");

editbtn.onclick = function () {
    document.getElementById('container-1').style.display = "none";
    document.getElementById('container-2').style.display = "none";
    document.getElementById('container-5').style.display = "flex";
    document.getElementById('container-6').style.display = "flex";
}

cancelbtn.onclick = function () {
    document.getElementById('container-1').style.display = "flex";
    document.getElementById('container-2').style.display = "flex";
    document.getElementById('container-5').style.display = "none";
    document.getElementById('container-6').style.display = "none";
}

