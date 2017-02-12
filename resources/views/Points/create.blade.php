@extends('layout.master')

@section('mt')
<span>Agregar Puntos</span>

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Crear una nueva entrada para Puntos</h4>
                <form class="form-horizontal style-form" action="{{ url('/points') }}" method="POST" enctype="multipart/form-data">
                	<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Puntos totales</label>
                        <div class="col-sm-10">
                        	<input type="number" min="1" name="totalpoints" class="form-control">
                             <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                    	</div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Monto a sumar</label>
                        <div class="col-sm-10">
                        	<input type="number" name="amountSum" min="1" class="form-control">
                    	</div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Monto a sumar por Entrega Inmediata</label>
                        <div class="col-sm-10">
                            <input type="number" name="amountEntrega" min="1" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                              	<button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                    </div>       
                 
				</form>
		</div>
	</div>
</div>

@stop