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

Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })