@extends('app')
@section('content')
<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-10 mbg-color-5">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h2 class="text-center clr-m1">Información de la Reserva de Habitación</h2>
			<div class="panel panel-primary"></div>
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="col-md-12">
						<div class="form-group">
							<label for="child_occupant">Fecha de Entrada</label>
							<input type="date" class="form-control" name="start_at" placeholder="Fecha Entrada" readonly value="{{ $reserveRoom->start_at }}">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="child_occupant">Fecha de Salida</label>
							<input type="date" class="form-control" name="exit_at" placeholder="Fecha Entrada" readonly value="{{ $reserveRoom->exit_at }}">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-4">
						<div class="form-group">
							<label for="adult_occupant">Número de Adultos</label>
							<input type="number" class="form-control text-center" name="adult_occupant" placeholder="1" value="{{ $reserveRoom->adult_occupant }}" readonly>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="child_occupant">Número de Niños</label>
							<input type="number" class="form-control text-center" name="child_occupant" placeholder="1" value="{{ $reserveRoom->child_occupant }}" readonly>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="child_occupant">Dia de Estadia</label>
							<input type="number" class="form-control text-center" name="stay" placeholder="1" readonly value="{{ $reserveRoom->stay }}">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="child_occupant">Habitación</label>
							<input type="number" class="form-control text-center" name="room_id" placeholder="1" readonly value="{{ $reserveRoom->room->number_room }}">z
						</div>
						<div class="form-group">
							<label for="child_occupant">Tipo de Habitación</label>
							<input type="number" class="form-control text-center" name="type_room_id" placeholder="1" value="{{ $reserveRoom->type_room_id}}" readonly>
						</div>
					</div>
				</div>
				<div class="col-md-12 text-center">
					<a href="{{ url('/myReserves') }}"class="btn btn-success  fnt-2"><i class="fa fa-arrow-circle-left"></i> Regresar </a>
					<div class="col-md-1"></div>
					<a href="{{ url('/myReserves/'.$reserveRoom->id.'/edit') }}"class="btn btn-warning text fnt-2"> Modificar <i class="fa fa-pencil"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
@endsection