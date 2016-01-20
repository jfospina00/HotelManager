
<table class="table table-bordered srh-res">
	<tr>
		<th>Cantidad Adultos</th>
		<td>{{ $reserve->adult_occupant }}</td>
	</tr>
	<tr>
		<th>Cantidad Niños</th>
		<td>{{ $reserve->child_occupant }}</td>
	</tr>
	<tr>
		<th>Dias Estadia</th>
		<td>{{ $reserve->stay }}</td>
	</tr>
	<tr>
		<th>Fecha Ingreso</th>
		<td>{{ $reserve->start_at }}</td>
	</tr>
	<tr>
		<th>Fecha Salida</th>
		<td>{{ $reserve->exit_at }}</td>
	</tr>
	<tr>
		<th>Costo</th>
		<td>{{ $reserve->price }}</td>
	</tr>
	<tr>
		<th>Estado</th>
		<td>{{ $reserve->state->name_state }}</td>
	</tr>
	<tr>
		<th>Tipo Habitación</th>
		<td>{{ $reserve->typeRoom->name_type_room }}</td>
	</tr>
	<tr>
		<th>Número Habitación</th>
		<td>{{ $reserve->room->number_room }}</td>
	</tr>
</table>
