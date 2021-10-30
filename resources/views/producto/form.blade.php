<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Insumo') }}
            {{ Form::select('insumo_id',$insumos ,$producto->insumo_id, ['class' => 'form-control' . ($errors->has('insumo_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione insumo']) }}
            {!! $errors->first('insumo_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad Insumo') }}
            {{ Form::number('cantidadInsumo', $producto->cantidadInsumo, ['class' => 'form-control' . ($errors->has('cantidadInsumo') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadinsumo']) }}
            {!! $errors->first('cantidadInsumo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Producto') }}
            {{ Form::text('nombreProducto', $producto->nombreProducto, ['class' => 'form-control' . ($errors->has('nombreProducto') ? ' is-invalid' : ''), 'placeholder' => 'Nombreproducto']) }}
            {!! $errors->first('nombreProducto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo') }}
            {{ Form::number('costo', $producto->costo, ['class' => 'form-control' . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => 'Costo','step'=>'0.01']) }}
            {!! $errors->first('costo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio Venta') }}
            {{ Form::number('precioVenta', $producto->precioVenta, ['class' => 'form-control' . ($errors->has('precioVenta') ? ' is-invalid' : ''), 'placeholder' => 'Precioventa','step'=>'0.01']) }}
            {!! $errors->first('precioVenta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disponible') }}
            <br>
            {{ Form::label('Sí') }}
            {{ Form::radio('disponible', $producto->disponible=1, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {{ Form::label('No') }}
            {{ Form::radio('disponible', $producto->disponible=0, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>