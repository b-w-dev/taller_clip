@extends('layouts.blank')
@section('content')

<div class="container-fluid">
	<div role="application" class="panel panel-group" >
		<div class="panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-4">
						<h4>Datos del Proveedor:</h4>
					</div>
					<div class="col-sm-4 text-center">
						<a class="btn btn-success" href="{{ route('proveedores.create') }}">
							<i class="fa fa-plus" aria-hidden="true"></i><strong> Agregar Proveedor</strong>
						</a>
					</div>
					<div class="col-sm-4 text-center">
						<a class="btn btn-primary" href="{{ route('proveedores.index') }}">
							<i class="fa fa-bars" aria-hidden="true"></i><strong> Lista de Proveedores</strong>
						</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
  					<div class="form-group col-sm-3">
    					<label class="control-label" for="tipopersona">Tipo de Persona:</label>
    					<dd>{{ $proveedor->tipopersona }}</dd>
  					</div>
					@if($proveedor->tipopersona == "Fisica")
						<div class="form-group col-sm-3">
	  						<label class="control-label" for="nombre">Nombre(s):</label>
	  						<dd>{{ $proveedor->nombre }}</dd>
	  					</div>
	  					<div class="form-group col-sm-3">
	  						<label class="control-label" for="apellidopaterno">Apellido Paterno:</label>
	  						<dd>{{ $proveedor->apellidopaterno }}</dd>
	  					</div>
	  					<div class="form-group col-sm-3">
	  						<label class="control-label" for="apellidomaterno">Apellido Materno:</label>
	  						<dd>{{ $proveedor->apellidomaterno }}</dd>
	  					</div>
					@else
						<div class="form-group col-sm-3">
	  						<label class="control-label" for="razonsocial">Razon Social:</label>
	  						<dd>{{ $proveedor->razonsocial }}</dd>
	  					</div>
					@endif
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="rfc">RFC:</label>
  						<dd>{{ $proveedor->rfc }}</dd>
  					</div>
				</div>
			</div>
		</div>
		<ul class="nav nav-tabs">
			<li>
				<a href="{{ route('proveedores.show', ['proveedor' => $proveedor]) }}">Dirección Física:</a>
			</li>
			<li class="active">
				<a href="{{ route('proveedores.direccionFiscal.index', ['proveedor' => $proveedor]) }}">Dirección Fiscal:</a>
			</li>
			<li>
				<a href="{{ route('proveedores.contacto.index', ['proveedor' => $proveedor]) }}">Contactos:</a>
			</li>
			<li>
				<a href="{{ route('proveedores.datosGenerales.index', ['proveedor' => $proveedor]) }}">Datos Generales:</a>
			</li>
			<li>
				<a href="{{ route('proveedores.datosBancarios.index', ['proveedor' => $proveedor]) }}">Datos Bancarios:</a>
			</li>
		</ul>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-4">
						<h5>Contacto:</h5>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-sm-3">
    					<label class="control-label" for="nombre">Nombre:</label>
    					<dd>{{ $contacto->nombre }}</dd>
  					</div>
  					<div class="form-group col-sm-3">
    					<label class="control-label" for="apater">Apellido paterno:</label>
						<dd>{{ $contacto->apater }}</dd>
  					</div>	
  					<div class="form-group col-sm-3">
    					<label class="control-label" for="amater">Apellido materno:</label>
    					<dd>{{ $contacto->amater }}</dd>
  					</div>		
				</div>
				<div class="row">
					<div class="form-group col-sm-3">
  						<label class="control-label" for="area">Area:</label>
  						<dd>{{ $contacto->area }}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="puesto">Puesto:</label>
  						<dd>{{ $contacto->puesto }}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="telefono1">Telefono:</label>
  						<dd>{{ $contacto->telefono1 }}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="ext1">Extensión:</label>
  						<dd>{{ $contacto->ext1 }}</dd>
  					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-3">
  						<label class="control-label" for="telefono2">Telefono :</label>
  						<dd>{{ $contacto->telefono2 }}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="ext2">Extensión:</label>
  						<dd>{{ $contacto->ext2 }}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="telefonodir">Telefono directo:</label>
  						<dd>{{ $contacto->telefonodir }}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="celular1">Celular:</label>
  						<dd>{{ $contacto->celular1 }}</dd>
  					</div>
  				</div>
  				<div class="row">
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="celular2">Celular:</label>
  						<dd>{{ $contacto->celular2 }}</dd>
  					</div>
  					<div class="form-group col-sm-3">
  						<label class="control-label" for="email1">Correo electronico:</label>
  						<dd>{{ $contacto->email1 }}</dd>
  					</div>

  					<div class="form-group col-sm-3">
  						<label class="control-label" for="email2">Correo electronico:</label>
  						<dd>{{ $contacto->email2 }}</dd>
  					</div>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-sm-12 text-center">
						<a class="btn btn-danger" href="{{ route('proveedores.contacto.edit', ['proveedor' => $proveedor, 'contacto' => $contacto]) }}">
							<strong>Editar</strong>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection