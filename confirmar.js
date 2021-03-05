function confrimacion(e) {
    if (confirm("¿Esta seguro que desea eliminar su cuenta?")){
        return true;
    }else {
        e.preventDefault();
    }
}

let linkdelete = document.querySelectorAll(".comoseria");

for(var i = 0; i < linkdelete.length; i++){
    linkdelete[i].addEventListener("click",confrimacion);
}