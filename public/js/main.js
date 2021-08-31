$('document').ready(function(){
    $("#checkTodos").change(function () {
       $("input:checkbox").prop('checked', $(this).prop("checked"));
   });
 });


 function dele_all(){
     
    var categorias = new Array();
 
    $("input[name='product[]']:checked").each(function() {
        categorias.push($(this).val());
    });

    if(categorias != ''){


        Swal.fire({
            title: '¿Desea eliminar este registro?',
            text: "El registro se encontraba en la papelera de reciclaje",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
                 $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
                      });
                           $.ajax({
                           type:"POST",
                           url:"/delete-full",
                           data:{categorias:categorias},
                           success: function(datos){
                             $("#demo").html(datos);
                             }
                           });
            }
          })

    }else{
        Swal.fire({
            icon: 'error',
            title: 'Error al eliminar',
            text: 'Debe seleccionar una opción '
          })
    }

   
 }




       
   