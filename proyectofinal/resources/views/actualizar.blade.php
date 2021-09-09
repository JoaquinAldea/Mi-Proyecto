@extends('plantilla')

@section('seccion')
<div class="mt-1">
    <!--- Llamada al objeto por su distinguido ID --->
    <h1>ID DEL OBJETO {{ $items->id }} </h1>
    <br>

    <!--- Mensaje de confirmacion de alerta al guardar el objeto --->
    @if(session('mensaje'))
    <div class="alert alert-success" style="width:550px;" role="alert">
                {{session('mensaje')}}
            </div>
    @endif
    <form action="{{ route ('refresh', $items->id)}}" method="POST">
         
        @method('PUT')

        <!-- TOKEN PROTECCION -->
          @csrf

          <!-- Alerta de error al no completar el input -->
          @error('nombre')
            <div class="alert alert-danger" style="width:550px;" role="alert">
                    ¡El nombre es obligatorio!
                </div>
            @enderror
            <div class="input-group flex-nowrap" style="width:550px; margin-left: center; " >   
                <span class="input-group-text" id="addon-wrapping">Nombre del objeto</span>
                <input type="text" class="form-control" value="{{$items->nombre}}" placeholder="Nombre" name="nombre" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <br>
            @error('descripcion')
            <div class="alert alert-danger" style="width:550px;" role="alert">
                    ¡La descripcion es obligatorio!
                </div>
            @enderror
            <div class="input-group flex-nowrap" style="width:550px; margin-left: center; ">
                <span class="input-group-text" id="addon-wrapping">Descripcion del objeto</span>
                <input type="text" class="form-control" placeholder="Descripcion" value="{{$items->descripcion}}" name="descripcion" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <br>            
            @error('precio')
            <div class="alert alert-danger" style="width:550px;" role="alert">
                    ¡El precio es obligatorio!
                    
                </div>
            @enderror
                    <div class="input-group flex-nowrap" style="width:250px; margin-left: center; ">
                        <span class="input-group-text" id="addon-wrapping">Precio</span>
                        <input type="number" class="form-control" placeholder="$" value="{{$items->precio}}" name="precio" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                <br>
                @error('urlfoto')
                        <div class="alert alert-danger" style="width:550px;" role="alert">
                                ¡La url de la foto es obligatorio!
                            </div>
                 @enderror
                <div class="input-group flex-nowrap" style="width:550px; margin-left: center; ">
                        <span class="input-group-text" id="addon-wrapping">Urlfoto</span>
                        <input type="text" class="form-control" placeholder="urlfoto" value="{{$items->urlfoto}}" name="urlfoto" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
               <br>
               
        
            <!-- Boton para actualizar lado derecho-->
                <div style="text-align: right;">
                        <button type="sumbit"  class="btn btn-success">Actualizar</button>
                    </div>

      </form>   <!--Termino del formulario-->
</div>
@endsection