@extends('app')
@section('content')
<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-10 mbg-color-5">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h2 class="text-center clr-m1">Mis Reservas de Habitaciones</h2>
			<div class="panel panel-header panel-primary"></div>
			<div class="panel panel-default">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token1">
			<input type="hidden" route="route" value="{{ url('/ajax/stroom') }}">
			
			<form class="col-md-12">
				{{-- <div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			 	</div> --}}
			 	<div class="form-group">
					<label for="exampleInputEmail1">Fechas</label>
				 	<input type="date" name="start_at" class="form-control" value="" id="start" required="required">
				 	<input type="date" name="exit_at"  class="form-control" value="" id="exit" required="required">
			 	</div>
			 	<div class="form-group">
			 		<label for="type_room">Tipo Habitacion</label>
			 		<select name="type_room" id="stroom" class="form-control" disabled="disabled">
			 			<option value="">Seleccione...</option>
			 			@foreach ($typeRooms as $typeroom)
			 				<option value="{{$typeroom->id}}">{{$typeroom->name_type_room}}</option>
			 			@endforeach
			 		</select>
			 	</div>
			 	<div id="mostrar" class="row">
			 		
			 	</div>
			</form>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
@endsection