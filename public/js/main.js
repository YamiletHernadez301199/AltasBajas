$(document).ready(function () {
  $("#Mytabla").dataTable({
    language: {
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "Ningún dato disponible en esta tabla - lo siento",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros disponibles",
      "infoFiltered": "(filtrado de _MAX_ total de registros)",
      "search": "Buscar:",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      paginate: {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      },
    }
  });

  $("#add-btn").click(() => {
    let tipo = $("#tipo").val();
    let categoria = $("#categoria").val();
    let cantidad = $("#cantidad").val();
    let descripcion = $("#descripcion").val();

    if (cantidad === "" || descripcion === '') {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Los campos son obligatorios!',
      })
      return false;
    } else {
      Swal.fire({
        icon: 'success',
        title: 'Datos guardados!!!',
        timer: 4000,
        timerProgressBar: true,
        showConfirmButton: false,
      })
    }

  })

  
  $('.formulario').submit(function(e){
    e.preventDefault();

    swal.fire({
      title: "¿Está seguro?",
        text: "Esta acción no se puede deshacer.",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar"
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          {
            icon: 'success',
            title: 'Eliminado!!',
            showConfirmButton: false,
            timer: 4500
          }
        )
        this.submit();
      }
    });
  
  })
  $("#edit-btn").click(() => {
    let tipo = $("#tipo").val();
    let categoria = $("#categoria").val();
    let cantidad = $("#cantidad").val();
    let descripcion = $("#descripcion").val();

    if (cantidad === "" || descripcion === '') {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Los campos son obligatorios!',
      })
      return false;
    } else {
      Swal.fire({
        icon: 'success',
        title: 'Datos Actualizados!!!',
        timer: 4000,
        timerProgressBar: true,
        showConfirmButton: false,
      })
    }

  })

})
