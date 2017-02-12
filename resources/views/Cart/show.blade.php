@extends('layouts.master')

@section('ct')

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Crear una nueva entrada para Productos</h4>
                <form class="form-horizontal style-form" action="{{ url('purchase/cart') }}" method="POST" enctype="multipart/form-data">
                	<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nombre y Apellido</label>
                        <div class="col-sm-10">
                        	<input type="text" name="name" class="form-control">
                             <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                    	</div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        	<input type="email" name="email" min="0" class="form-control">
                    	</div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Dirección</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                    </div> 
                    <label class="col-sm-2 col-sm-2 control-label">¿Entrega inmendiata? Se añadirán ${{$amountEntrega}}</label>
					<br>
					<div class="checkbox">
					        <label>
					           <input type="checkbox" name="fastDelivery" value="1"><span> Sí</span>
					        </label>
					</div>
					<br>
					<input type="hidden" name="totalPrice" value="{{$Total}}">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                              	<button type="submit" class="btn btn-success">Confirmar Compra</button>
                            </div>
                    </div>       
                 
				</form>
		</div>
	</div>
</div>

<table class="table table-striped" style="width: 60%; margin: auto;">
		<thead>
			<tr>
				<td>Producto</td>
				<td>Precio</td>
				<td>Cantidad</td>
			</tr>
		</thead>
		<tbody>
@foreach($cart as $c)
			<tr>
				<td>{{$c->name}}</td>
				<td>${{$c->price}}</td>
				<td>{{$c->qty}}</td>
			</tr>
@endforeach
	</tbody>
</table>

<h3>Sub-Total a pagar: </h3><h4>${{$Total}}</h4>


@endsection