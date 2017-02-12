@extends('layouts.master').

@section('ct')

<h1>Carrito de compras</h1>
<table class="table table-striped" style="width: 60%; margin: auto;">
		<thead>
			<tr>
				<td>Producto</td>
				<td>Precio</td>
				<td>Cantidad</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tbody>
@foreach($cart as $c)
			<tr>
				<td>{{$c->name}}</td>
				<td>${{$c->price}}</td>
				<td>{{$c->qty}}</td>
				<td><a class="btn btn-danger" href="cart/{{$c->rowId}}/delete">Eliminar</a></td>
			</tr>
@endforeach
	</tbody>
</table>

<h3>Sub-Total a pagar: </h3><h4>@if($Total==0) No hay artitulos en el carrito @else ${{$Total}} @endif</h4>

<a class="btn btn-success" href="{{url('purchase')}}">Comprar</a>

@endsection

