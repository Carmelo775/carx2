@extends('layout.master')

@section('mt')
<span>Agregar Productos</span>

<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Crear una nueva entrada para Productos</h4>
                <form class="form-horizontal style-form" action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
                	<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Título</label>
                        <div class="col-sm-10">
                        	<input type="text" name="title" class="form-control">
                             <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                    	</div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Precio</label>
                        <div class="col-sm-10">
                        	<input type="number" name="price" min="0" class="form-control">
                    	</div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Imagen</label>
                        <div class="col-sm-10">
                            <input type="file" name="photo" min="0" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Puntos</label>
                        <div class="col-sm-10">
                            <input type="number" name="points" min="1" class="form-control">
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