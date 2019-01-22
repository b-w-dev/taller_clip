@extends('layouts.cotizacion')
@section('content')
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-4">
					<h5>Materiales:</h5>
				</div>
			</div>
		</div>
		<div class="card-body">
			<form>
				<div class="form-row">
					<div class="col">
						<input type="text" class="form-control" placeholder="Medida Color etc">
					</div>
					<div class="col">
						<select class="custom-select">
							<option value="" selected>Sección</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						  </select>
					</div>
				</div>
			</form>
			<div class="mt-1">
				<table class="table table-striped table-bordered">
					<thead>
						<tr class="table-info">
							<th scope="col" style="width: 130px;">Clave</th>
							<th scope="col">Sección / descripción / Proveedor</th>
							<th scope="col">Medidas</th>
							<th scope="col">Color</th>
							<th scope="col">Costo</th>
							<th scope="col">Precio venta(metro cuadrado)</th>
							<th style="width: 115px;" scope="col">Fecha</th>

						</tr>
					</thead>
					<tbody>
						@foreach ($materiales as $material)
						{{-- expr --}}
						<tr>
							<td scope="row">
								<div class="row mt-1 mb-1 justify-content-md-center">
									{{$material->clave}}
								</div>
								<div class="row mt-1 mb-1 justify-content-md-center">
									<a href="{{ route('material.edit',['material'=>$material->id]) }}" class="btn btn-info">Editar</a>
								</div>
							</td>
							<td>{{$material->seccion}} / {{$material->descripcion}} / {{$material->proveedor->razonsocial ?
								$material->proveedor->razonsocial : $material->proveedor->nombre." ".$material->proveedor->apellidopaterno."
								".$material->proveedor->apellidomaterno}}</td>
							<td>{{$material->alto}} X {{$material->ancho}} X {{$material->espesor}} {{$material->medidas}}</td>
							<td>{{$material->color}}</td>
							<td>${{$material->costo}}</td>
							<td>${{$material->precio}}</td>
							<td>{{date('d-m-Y', strtotime($material->created_at))}}</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection