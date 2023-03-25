const { default: axios } = require("axios");
const { default: Swal } = require("sweetalert2");

$(document).ready(function () {
  $('#tabla').dataTable({
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
})

$(document).ready(function () {
  $('#myTable').DataTable();
});

$(document).ready(function () {
  $('#add-btn').click(function () {
    console.log('funciona');
    

    // var tipo = $('#tipo').val();
    // var categoria = $('#categoria').val();
    // var cantidad = $('#cantidad').val();
    // var descripcion = $('#descripcion').val();
    // $.ajax({
    //   type: "POST",
    //   url: "{{ route('store') }}",
    //   data: {
    //     _token: "{{ csrf_token() }}",
    //     tipo: tipo,
    //     categoria: categoria,
    //     cantidad: cantidad,
    //     descripcion: descripcion
    //   },
    //   success: function (response) {
    //     Swal.fire({
    //       position: 'top-center',
    //       icon: 'success',
    //       title: 'Your work has been saved',
    //       showConfirmButton: false,
    //       timer: 1500
    //     })
    //   }

    // })

    // axios.post('/store', {
    //   tipo,
    //   categoria,
    //   cantidad,
    //   descripcion
    // })
    // .then(function (response) {
    //   Swal.fire({
    //     title: 'Exito!!! xd',
    //     text: response.data.mensaje,
    //     icon: "success",
    //     confirmButtonText: 'Guardar'
    //   })
    // })
    // .catch(function(error){
    //   Swal.fire({
    //     title: 'Error!!! :c',
    //     text: error.response.data.mensaje,
    //     icon: "danger",
    //     confirmButtonText: 'Guardar'
    //   })
    // })


  });
})





