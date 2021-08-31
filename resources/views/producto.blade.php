@extends('layouts.cuerpo')

@section('titulo','Producto')
@section('complejs')
  <script src="{{ asset('js/main.js') }}"></script>
  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          
        });
      });
    });
    </script>
@endsection
    
@section('contenido')

@include('layouts.modales')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="text-center">producto</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop" type="button" ><i class="fas fa-plus-circle"></i> Nuevo Producto</button>
            <button class="btn btn-danger" type="button" onclick="dele_all();"><i class="fas fa-trash-alt"></i> Eliminar</button>
          </div>
          <br>
      <div class="row">
        <div class="col">
          <input class="form-control" id="myInput" type="text" placeholder="Search..">  
            <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-sm table-hover">
                      <thead style="color:#fff;background-color: #551c87;" class="estilo">
                        <tr>
                          <th><div class="custom-control custom-checkbox text-center">
                            <input type="checkbox" class="custom-control-input" id="checkTodos">
                            <label class="custom-control-label" for="checkTodos"></label>
                          </div></th>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Descripccion</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Cantidad</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody id="myTable">
                        <tr>
                          <td><div class="custom-control custom-checkbox text-center">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="product[]" value="1">
                            <label class="custom-control-label" for="customCheck1"></label>
                          </div></td>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>4</td>
                          <td class="text-center"><button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
                        <tr>
                          <td><div class="custom-control custom-checkbox text-center">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="product[]" value="2">
                            <label class="custom-control-label" for="customCheck3"></label>
                          </div></td>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>30</td>
                         <td class="text-center"><button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
                        <tr>
                          <td><div class="custom-control custom-checkbox text-center">
                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="product[]" value="3">
                            <label class="custom-control-label" for="customCheck4"></label>
                          </div></td>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>40</td>
                         <td class="text-center"><button type="button" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i></i></button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>



<div id="demo"></div>
@stop
