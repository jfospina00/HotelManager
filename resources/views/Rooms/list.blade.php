@extends('app')
@section('content')
<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-10 mbg-color-5">
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document" id="content-modal">
		    <div class="modal-content clr-m1">
		      <div class="modal-header mbg-color-5">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h3 class="modal-title text-center clr-m1" id="myModalLabel">Reserva de Habitación</h3>
		        <div class="panel panel-header panel-primary"></div>
		      </div>
		      <div class="modal-body">
		       	
		      </div>
		      <div class="modal-footer ">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- Modal -->
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h2 class="text-center clr-m1">Mis Reservas de Habitaciones</h2>
			<div class="panel panel-header panel-primary"></div>
			<div class="panel panel-default">
				<table class="table table-hover text-center">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token1">
					<input type="hidden" route="route" value="{{ url('/ajax/tr') }}">
					<tr class="text-center mbg-color-2 clr-m1">
						<th class="text-center">Fecha Ingreso</th>
						<th class="text-center">Fecha Salida</th>
						<th class="text-center">Costo</th>
						<th class="text-center">Estado</th>
					</tr>
				{{-- FOREACH DE LAS RESERVAS --}}
					@foreach ($reservas as $reserva)
						<tr class="text-center tb-show" id="{{$reserva->id}}" type="button" data-toggle="modal" data-target="#myModal">
							<td> {{$reserva->start_at}} </td>
							<td> {{$reserva->exit_at}} </td>
							<td> {{$reserva->price}} </td>
							<td> {{$reserva->state->name_state}} </td>
						</tr>
					@endforeach
				{{-- FOREACH DE LAS RESERVAS --}}
				</table>
			</div>
			
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
@endsection