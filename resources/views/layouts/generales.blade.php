@extends('layouts.blank')
 @section('content')
  
<div class="container">
 <div role="application" class="panel panel-group container-fluid">
 	<div class="panel-default">
 		<div class="panel-heading" style="background-color: lightgray!important;" ><h3>
 			<i class="fa fa-paperclip"></i>
 		&nbsp;&nbsp;Materiales Generales</h3></div>
 		<div class="panel-body" >
 			<div class="row">
 				<div class="col-sm-12">
 					<div class="col-sm-3">
					<span class="badge badge-secondary"><i class="fa fa-angle-up" aria-hidden="true"></i>&nbsp;&nbsp;COLGADERAS</span>
					<input type="radio" class="option-input radio" name="atributo" value="COLGADERAS" id="atributo_1">
				</div>
				<div class="col-sm-3">
					<span class="badge badge-secondary"><i class="fa fa-tape" aria-hidden="true"></i>&nbsp;&nbsp;ADHESIVOS</span>
					<input type="radio" class="option-input radio" name="atributo" value="ADHESIVOS"  id="atributo_2">
				</div>
			 </div>
 			</div><br>
 			{{--  COLGADERAS --}}
 		<div class="container-fluid pull-center" id="descripcion_div" style="display: none;">
 				
 				 <h4 style="background-color: grey;height: 50px;padding: 10px;
 				 color: white;text-align: center;"><i class="fa fa-angle-up" aria-hidden="true"></i>
 				&nbsp;&nbsp;<strong>Colgaderas</strong></h4>

 				 <form role="form" id="form-cliente" method="POST" action="{{ route('des_generales.store') }}" name="form">
				{{ csrf_field() }}
					<input type="hidden" name="atributo_c" value="colgaderas" id="atributo_c">
					
	  			 <br>
	  			 <div class="row">
	  			 	<div class="col-sm-3">
	  			 		<label class="control-label">Nombre/Descripción:</label>
	  			 		<input type="text" class="form-control" name="colgadera" required id="colgadera">
	  			 	</div>
	  			 	<div class="col-sm-2">
 						<label class="control-label">Precio:</label>
	  			 		<input type="number" step="any" min="0" class="form-control" name="precio" placeholder="$--" required id="precio">
 					</div>
 					  <div class="col-sm-4">
          <label for="proveedor">Proveedor</label>
           <div class="input-group">
            <span class="input-group-addon" id="basic-addon3" onclick='getProveedor()'><i class="fa fa-refresh" aria-hidden="true"></i></span>
          <select class="form-control" id="proveedor" name="proveedor" required>
    <option value="">Seleccionar</option>
    @foreach($provedores as $provedor)
     @isset($provedor->razonsocial)
     <option value="{{$provedor->razonsocial}}">{{$provedor->razonsocial}}</option>
     @else
     <option value="{{$provedor->nombre}}&nbsp;&nbsp;{{$provedor->apellidopaterno}}">{{$provedor->nombre}}&nbsp;&nbsp;{{$provedor->apellidopaterno}}</option>
     @endisset
    @endforeach
  </select>
    </div>
        </div>
 				
 					<div class="col-sm-3">
 						<br>
 						<button class="btn btn-primary" onclick=" event.preventDefault(), save()"><strong>Agregar</strong></button>
 					</div>
 				</div><br><br>
 				</form>

	  			{{-- Materiales --}}

 		<div class="container " style="color: black;border-color: black;border:solid;" id="table_colgaderas">
	<table class="table" >
    <thead class="thead-dark" style="background-color: darkblue;color: white;">
      <tr>
        <th>Nombre/Descripción</th>
        <th>Precio</th>
        <th>Proveedor</th>
        <th>Fecha de Creación</th>
        <th>Opciones</th>
        
      </tr>
    </thead>
    <tbody >
    	@foreach($colgaderas as $colgadera)
      
        
        
        
        <input type="hidden" name="id" value="{{$colgadera->id}}" id="id_colgadera">
      <tr>
        <td>{{$colgadera->colgadera}}</td>
        <td>{{$colgadera->precio}}</td>
        <td>{{$colgadera->proveedor}}</td>
        <td>{{$colgadera->created_at}}</td>
        <td><button class="btn btn-danger" onclick="deleteDos({{$colgadera->id}})"><strong>Eliminar</strong></button></td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>
 		{{-- Materiales --}}
 		</div>
 		{{-- COLGADERAS --}}

 		{{-- ADHESIVOS --}}
 		<div class="container-fluid pull-center" id="medidas_div" style="display: none;">
 				
 				 <h4 style="background-color: grey;height: 50px;padding: 10px;
 				 color: white;text-align: center;"><i class="fa fa-angle-up" aria-hidden="true"></i>
 				&nbsp;&nbsp;<strong>Adhesivos</strong></h4>

 				 <form role="form"  method="POST" action="{{ route('des_generales.store') }}" name="form">
				{{ csrf_field() }}
					<input type="hidden" name="atributo_a" value="adhesivos" id="atributo_a">
					
	  			 <br>
	  			 <div class="row">
	  			 	<div class="col-sm-3">
	  			 		<label class="control-label">Nombre/Descripción:</label>
	  			 		<input type="text" class="form-control" name="adhesivo" required id="adhesivo">
	  			 	</div>
	  			 	<div class="col-sm-2">
 						<label class="control-label">Precio:</label>
	  			 		<input type="number" step="any" min="0" class="form-control" name="precio" placeholder="$--" required id="precio_a">
 					</div>
 				    <div class="col-sm-4">
          <label for="proveedor">Proveedor</label>
           <div class="input-group">
            <span class="input-group-addon" id="basic-addon3" onclick='getProveedor()'><i class="fa fa-refresh" aria-hidden="true"></i></span>
          <select class="form-control" id="proveedor_a" name="proveedor" required>
    <option value="">Seleccionar</option>
    @foreach($provedores as $provedor)
     @isset($provedor->razonsocial)
     <option value="{{$provedor->razonsocial}}">{{$provedor->razonsocial}}</option>
     @else
     <option value="{{$provedor->nombre}}&nbsp;&nbsp;{{$provedor->apellidopaterno}}">{{$provedor->nombre}}&nbsp;&nbsp;{{$provedor->apellidopaterno}}</option>
     @endisset
    @endforeach
  </select>
    </div>
        </div>
 		<div class="col-sm-3">
 			<br>
 			<button class="btn btn-primary" onclick="event.preventDefault(), saveA()"><strong>Agregar</strong></button>
 		</div>
 				</div><br><br>
 				</form>

	  			{{-- Materiales --}}
 		<div class="container " style="color: black;border-color: black;border:solid;" 
    id="table_adhesivos">
	<table class="table">
    <thead class="thead-dark" style="background-color: darkblue;color: white;">
      <tr>
        <th>Nombre/Descripción</th>
        <th>Precio</th>
        <th>Proveedor</th>
        <th>Fecha de Creación</th>
        <th>Opciones</th>
        
      </tr>
    </thead>
    <tbody >
    	@foreach($adhesivos as $adhesivo)
      <form action="" id="elim2" method="POST">
        {{ csrf_field() }}
        
       
        
        <input type="hidden" name="id" value="{{$adhesivo->id}}" id="id_adhesivo">
      
      <tr>
        <td>{{$adhesivo->adhesivo}}</td>
        <td>{{$adhesivo->precio}}</td>
        <td>{{$adhesivo->proveedor}}</td>
        <td>{{$adhesivo->created_at}}</td>
        <td><button class="btn btn-danger" onclick="deleteTres({{$adhesivo->id}})"><strong>Eliminar</strong></button></td>
      </tr>
      </form>
      @endforeach
    </tbody>
  </table>
</div>
 		{{-- Materiales --}}
 		</div>
 		{{-- Adhesivos--}}


 					




		</div>
 	</div>
 </div>
</div>


<script type="text/javascript">
  


  



    function getProveedor(){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: "{{ url('/getclient') }}",
          type: "GET",
          dataType: "html",
      }).done(function(resultado){
          $("#proveedor").html(resultado);
      });
    }



   

  </script>
 @endsection
 