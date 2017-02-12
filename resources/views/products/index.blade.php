@extends('layout.master')

@section('mt')
<br />
<br />
<br />
<p><table class="table table-striped">
	<thead>
		<tr>
			<td>Producto</td>
			<td>Descripciòn</td>
			<td>Price</td>
			<td>Puntos</td>
			<td>Foto</td>
			<td>Editar</td>
			<td>Eliminar</td>
		</tr>
	</thead>
	<tbody>
			@foreach($products as $p)
		<tr>
			
				<td>{{$p->title}}</td>
				<td>{{$p->description}}</td>
				<td>{{$p->price}}</td>
				<td>{{$p->points}}</td>
				<td><button class="btn btn-success" data-toggle="modal" data-target="#md{{$p->id}}Photo">Visualizar Foto</button></td>
				<td><a class="btn btn-warning" href="products/{{$p->id}}/edit">Editar</a></td>
				<td><button class="btn btn-danger" onclick="DeleteProduct('{{$p->id}}')">Eliminar</button></td>

		<div class="modal fade" id="md{{$p->id}}Photo" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <div class="img">
                            <img src="files/{{$p->photo}}" id="image">                            
                        </div>
                        <div class="bottom">
                            <div class="name"></div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
			@endforeach
		
		</tr>
	</tbody>
</table></p>

<script>
	function DeleteProduct(id)
	{
		var c = confirm('¿Seguro deseas borrar este producto?');
		var route = 'products/'+id+'/delete';

		if(c)
		{
			$.get(route, function(r)
			{
				alert(r);
				$(location).attr('href', 'login')
			});
			}
			else
			{
				return false;
			}
		}

</script>

@endsection