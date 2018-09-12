@extends('layouts.cotizacion')
@section('content')

<div class="container pt-2">
	<h3>GENERAR ÓRDEN</h3>
	<br>
	<form action="" id="explosionadoForm"></form>

			<div class="row">

				<div class="col-12 mb 2">
					<h4>Datos Órden</h4>
				</div>

				<div class="col-6 mb-2">
					<!--espe-->
					<div class="input-group ">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">Nombre</span>
						</div>
						<input type="text" class="form-control" id="nombre" aria-describedby="basic-addon3" form="explosionadoForm">
					</div>
				</div>
				<div class="col-6 mb-2">
					<!--espe-->
					<div class="input-group ">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">Fecha</span>
						</div>
						<input type="date" class="form-control" id="fecha" aria-describedby="basic-addon3" form="explosionadoForm" readonly>
					</div>
				</div>
				<div class="col-6 mb-2">
					<!--espe-->
					<div class="input-group ">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">ID</span>
						</div>
						<input type="text" class="form-control" id="id" aria-describedby="basic-addon3" form="explosionadoForm" readonly>
					</div>
				</div>
				<div class="col-6 mb-2">
				    <label for="exampleFormControlTextarea1">Descripción</label>
					<textarea class="form-control" id="descripcion" rows="3"></textarea>
				</div>

	

				<div class="col-12 mb 2">
					<h4>Buscar Materiales</h4>
				</div>


				<div class="col-6 mb-2">
					<!--Tipo de mat-->
					<div class="input-group">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Sección</label>
						</div>
						<select class="custom-select" id="tipoMaterial" form="explosionadoForm">
							<option value="">SELECCIONAR</option>
							<option value="montaje">Montaje</option>
							<option value="proteccion">Portección</option>
							<option value="marcos">Marcos y Bastidores</option>
							<option value="marialuisa">Maria Luisa</option>
							<option value="generales">Generales</option>
						</select>
					</div>
				</div>
				<div class="col-6 mb-2">
					<!--mat-->
					<div class="input-group">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Material</label>
						</div>
						<select class="custom-select" id="material" form="explosionadoForm">
						</select>
					</div>
				</div>
				<div class="col-6 mb-2">
					<!--Alto-->
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">Alto</span>
						</div>
						<input type="text" class="form-control" id="alto" aria-describedby="basic-addon3" form="explosionadoForm">
						<select class="custom-select" id="unidades1">
							<option selected>Unidades...</option>
							<option value="m">m</option>
							<option value="cm">cm</option>
							<option value=mm>mm</option>
						</select>
					</div>
				</div>
				<div class="col-6 mb-2">
					<!--ancojh-->
					<div class="input-group ">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">Ancho</span>
						</div>
						<input type="text" class="form-control" id="ancho" aria-describedby="basic-addon3" form="explosionadoForm">
						<select class="custom-select" id="unidades2">
							<option selected>Unidades...</option>
							<option value="m">m</option>
							<option value="cm">cm</option>
							<option value="mm">mm</option>
						</select>
					</div>
				</div>
				<div class="col-6 mb-2">
					<!--color-->
					<div class="input-group ">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">Color</span>
						</div>
						<input type="text" class="form-control" id="color" aria-describedby="basic-addon3" form="explosionadoForm">
					</div>
				</div>
				<div class="col-6 mb-2">
					<!--espe-->
					<div class="input-group ">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon3">Espesor</span>
						</div>
						<input type="text" class="form-control" id="espesor" aria-describedby="basic-addon3" form="explosionadoForm">
					</div>
				</div>
				
				<div class="col-6 my-3">
					<button type="button" class="btn btn-warning btn-lg btn-block">Buscar</button>
				</div>
				<div class="col-6 my-3">
					<input type="reset" class="btn btn-warning btn-lg btn-block" value="Limpiar" form="explosionadoForm">
				</div>
			</div>
		
				<!--MEDIDAS y dalkjsdkans-->
							<p class="h5">Medidas/Especificaciones</p>
				
				<!--Inputs-->

			<table class="table table-striped table-warning">
				<thead>
					<tr class="bg-warning">
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Clave</th>
						<th># de Piezas</th>
						<th>Monto</th>
						<th>Operación</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nom</td>
						<td>Des</td>
						<td>clav</td>
						<td>no. p</td>
						<td>mont</td>
						<td>
							<button type="button" class="btn btn-warning">Agregar</button>
						</td>
					</tr>
				</tbody>
			</table>

			<table class="table table-striped table-warning">
				<thead>
					<tr class="bg-warning">
						<th>Tipo Material</th>
						<th>Material</th>
						<th>Clave</th>
						<th># de Piezas</th>
						<th>Monto</th>
						<th>Operación</th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>tip</td>
						<td>mat</td>
						<td>clav</td>
						<td>no. p</td>
						<td>mont</td>
						<td>
							<button type="button" class="btn btn-warning">Quitar</button>
						</td>
					</tr>
				</tbody>
			</table>

			<a href="{{route('cotizacion')}}" class="btn btn-warning btn-lg btn-block" role="button" aria-pressed="true">Cotizar</a>

	<script>
		$(document).ready(function(){
			var now = new Date();
			var day = ("0" + now.getDate()).slice(-2);
			var month = ("0" + (now.getMonth() + 1)).slice(-2);
			var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
			$('#fecha').val(today);
		});

		$('#unidades1').on('change', function(){
			$('#unidades2').val($('#unidades1').val());

		});

		$('#unidades2').on('change', function(){
			$('#unidades1').val($('#unidades2').val());

		});

		$('#tipoMaterial').change(function(){

			var a = '';
			switch($(this).val()){
				case 'montaje':
					a = 'montaje2'
					break;
				case 'proteccion':
					a = 'proteccion2';
					break;
				case 'marcos':
					a = 'marco2';
					break;
				case 'marialuisa':
					a = 'maria2';
					break;
				case 'generales':
					a = 'generales2';
					break;
			}

			$.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
			});
			$.ajax({
				url: a,
			    type: "GET",
			    dataType: "html",
			    success: function(res){
                    $('#material').html(res);
                },
                error: function (){
                    $('#material').html('');
                }
			});
		});

	</script>
</div>

@endsection
