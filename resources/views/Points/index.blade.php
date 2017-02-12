@extends('layout.master')

@section('mt')
<br />
<br />
<br />
<p><table class="table table-striped">
	<thead>
		<tr>
			<td>Puntos Totales</td>
			<td>Monto a Sumar</td>
			<td>Monto por Entrega</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>
			@foreach($points as $p)
		<tr>
			
				<td>{{$p->totalpoints}}</td>
				<td>{{$p->amountSum}}</td>
				<td>{{$p->amountEntrega}}</td>
				<td><a class="btn btn-warning" href="points/{{$p->id}}/edit">Editar</a></td>
				<td><a class="btn btn-danger" href="{{url("points/$p->id/delete")}}">Eliminar</a></td>

			@endforeach
		
		</tr>
	</tbody>
</table></p>

@endsection