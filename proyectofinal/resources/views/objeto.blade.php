@extends('plantilla')

@section('seccion')
<div class="mt-1">
<h1>Objeto</h1>
<br>
    @foreach($items as $item)
    <div class="card text-dark bg-light mb-3" style="max-width: 19rem;">
  <div class="card-header"><h4>{{$item->nombre}}</h4></div>
  <img src="{{$item->urlfoto}}" style="width:300px; height:240px; padding: 1%" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Descripcion del objeto</h5>
    <p class="card-text">{{$item->descripcion}}</p>
  </div>
</div>      
                  
                  
               
           
 
    @endforeach
    
    <!--Paginaciones-->
    <div>
        {{$items->links()}}
      </div>
@endsection