@extends('app')
@section('content')
	<div class="container">
		<div class="col-md-1"></div>
		<div class="col-md-10 mbg-color-5">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<h2 class="text-center clr-m1">Reservas de Habitaciones</h2>
				<div class="panel panel-primary"></div>
				<table class="table">
					<tr class="mbg-color-2">
						<th class="text-center clr-m2">Número Adultos</th>
						<th class="text-center clr-m2">Número Niños</th>
						<th class="text-center clr-m2">Fecha Entrada</th>
						<th class="text-center clr-m2">Fecha Salida</th>
						<th class="text-center clr-m2">Opciones</th>
					</tr>
					@foreach ($reserveRooms as $reserveRoom)
					<tr>
						<td class="text-center">{{ $reserveRoom->adult_occupant }}</td>
						<td class="text-center">{{ $reserveRoom->child_occupant }}</td>
						<td class="text-center">{{ $reserveRoom->start_at }}</td>
						<td class="text-center">{{ $reserveRoom->exit_at }}</td>
						<td class="text-center">
							<a href="{{ url('myReserves/'.$reserveRoom->id) }}" class="text-indent"><i class="fa fa-search-plus"></i></a>
							<a href="" class="text-indent"><i class="fa fa-pencil"></i></a>
							<a href="" class="text-indent"><i class="fa fa-ban"></i></a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="col-md-1"></div>
	</div>
@endsection