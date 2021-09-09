@extends('plantilla')

@section('seccion')

<div class="mt-1">
<h1>Editar</h1>

      <!--- Mensaje de alerta al actualizar el objeto --->
        @if(session('mensaje'))
            <div class="alert alert-primary" style="width:550px;" role="alert">
                {{session('mensaje')}}
              </div>
        @endif
<br>
<!--- Tabla de los datos guardados --->
<table class="table table-dark table-striped"  >
  <thead>
    <tr >
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">PRECIO</th>
      <th scope="col">URLFOTO</th>
      <th scope="col">ACCIONES</th>

    </tr>
  </thead>
  <tbody>
    @foreach($items as $item)
    <!--- Datos traidos de la BD hacia la vista de la tabla --->
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->descripcion}}</td>
      <td>${{$item->precio}} CLP</td>
      <td>{{$item->urlfoto}}</td>
      <td>

        <!--- RUTA EDITAR --->
        <a href="{{route('editar', $item)}}" style="width:63px;" class="btn btn-warning btn-sm ">Editar</a> <!--- Boton de editar --->

        
        <!--- RUTA ELIMINAR --->
        
         <form action="{{route('eleminar',$item)}}" class="d-inline" method="POST" >
            @method('DELETE')

            <!--- TOKENS DE PROTECCION --->
              @csrf
              
              <button class="btn btn-danger btn-sm"  type="sumbit">Eliminar</button> <!--- Boton de eliminar --->
        </form>

      </td>
    </tr>
   @endforeach()
  </tbody>
</table>

<!--Paginaciones-->
    <div>
        {{$items->links()}}
      </div>

</div>




@endsection