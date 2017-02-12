@extends('layout.master')

@section('mt')

<br />
<br />
<br />
<p><table class="table table-striped">
	<thead>
		<tr>
			<td>Nombre y Apellido</td>
			<td>Email</td>
			<td>Dirección</td>
			<td>Precio Total</td>
			<!--<td>Estado de Entrega</td> -->
			<td>Información del pedido</td>
		</tr>
	</thead>
	<tbody>
		@foreach($orders as $o)
		<tr>
			<td>{{$o->name}}</td>
			<td>{{$o->email}}</td>
			<td>{{$o->address}}</td>
			<td>${{$o->totalPrice}}</td>
			<!--<td>@if($o->delivered == '1')No entregado @else Entregado @endif</td> -->
			<td><button class="btn btn-primary" data-toggle="modal" data-target="#pedidos{{$o->id}}" onclick="Pedidos({{$o->id}})">Pedido</button></td>
			<div class="modal fade" id="pedidos{{$o->id}}" tabindex="-1" role="dialog">
		            <div class="modal-dialog" role="document">
		                <div class="modal-content">
		                    <div class="modal-body">
		                    	
		                    </div>
		                </div>
		            </div>
		        </div>
		</tr>
		@endforeach
	</tbody>
</table></p>

        <script>
        	function Pedidos(id)
        	{
        		var route = "pedidos/"+id+"/product";

        		var m = $('.modal-body');

        		console.log(m.html("<table class='table table-striped'><thead><tr><td>Producto</td><td>Cantidad</td></tr></thead><tbody class='orders'></tbody></table>"));

        		var o = $('.orders');
		                    			        	
	            $.get(route, function(r){
	            	$(r).each(function(key, value){

	                	o.append("<tr><td>"+value.title+"</td>"+"<td>"+value.quantity+"</td></tr>");
	            });

	            });
        	}
        </script>

@endsection