@extends('plantilla')

@section('seccion')

<div class="mt-1">
    <h1>Agregar objeto hacia la base de datos</h1>
        <br>
        <!--- Mensaje de confirmacion al guardar el objeto --->
        @if(session('mensaje') )
        <div class="alert alert-success" style="width:550px;" role="alert">
                {{session('mensaje')}}
            </div>
        @endif
        <!--- Formulario para agregar objeto --->
      <form action="{{ route ('crear')}}" method="POST">
          @csrf

          <!-- Mensaje de error al no completar el input -->
          @error('nombre')
            <div class="alert alert-danger" style="width:550px;" role="alert">
                    ¡El nombre es obligatorio!
                </div>
            @enderror
            <div class="input-group flex-nowrap" style="width:550px; margin-left: center; " >   
                <span class="input-group-text" id="addon-wrapping">Nombre del objeto</span>
                <input type="text" class="form-control" value="{{old('nombre')}}" placeholder="Nombre" name="nombre" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <br>
            @error('descripcion')
            <div class="alert alert-danger" style="width:550px;" role="alert">
                    ¡La descripcion es obligatorio!
                </div>
            @enderror
            <div class="input-group flex-nowrap" style="width:550px; margin-left: center; ">
                <span class="input-group-text" id="addon-wrapping">Descripcion del objeto</span>
                <input type="text" class="form-control" placeholder="Descripcion" value="{{old('descripcion')}}" name="descripcion" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <br>            
            @error('precio')
            <div class="alert alert-danger" style="width:550px;" role="alert">
                    ¡El precio es obligatorio!
                </div>
            @enderror
                    <div class="input-group flex-nowrap" style="width:250px; margin-left: center; ">
                        <span class="input-group-text" id="addon-wrapping">Precio</span>
                        <input type="number" class="form-control" placeholder="$" value="{{old('precio')}}" name="precio" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                <br>
                @error('urlfoto')
                        <div class="alert alert-danger" style="width:550px;" role="alert">
                                ¡La url de la foto es obligatorio!
                            </div>
                 @enderror
                <div class="input-group flex-nowrap" style="width:550px; margin-left: center; ">
                        <span class="input-group-text" id="addon-wrapping">Urlfoto</span>
                        <input type="text" class="form-control" placeholder="urlfoto" value="{{old('urlfoto')}}" name="urlfoto" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
               <br>
               
        
            <!-- Boton para guardar lado derecho-->

                <div style="text-align: right;">
                        <button type="sumbit"  class="btn btn-success">Guardar</button>
                    </div>

      </form>   <!--Termino del formulario-->
    </div>

@endsection