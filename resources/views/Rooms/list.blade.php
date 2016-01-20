@extends('app')
@section('content')
<div class="container">
	<div class="col-md-1"></div>
	<div class="col-md-10 mbg-color-5">
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document" id="content-modal">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Reserva</h4>
		      </div>
		      <div class="modal-body">
		       	
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h2 class="text-center clr-m1">Mis Reservas</h2>
			<div class="panel panel-primary">
				<table class="table table-hover text-center">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token1">
					<input type="hidden" route="route" value="{{ url('/ajax/tr') }}">
					<tr class="text-center">
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
				</table>
			</div>
			
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
@endsection









{{-- <div class="col-md-12">
	<div class="col-md-12 text-center">
		<a href="{{ url('/myReserves') }}"class="btn btn-success  fnt-2"><i class="fa fa-arrow-circle-left"></i> Regresar </a>
		<div class="col-md-1"></div>
		<a href="{{ url('/myReserves/'.'/edit') }}"class="btn btn-warning text fnt-2"> Modificar <i class="fa fa-pencil"></i></a>
	</div>
</div> --}}