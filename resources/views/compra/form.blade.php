<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            
            {{ Form::label('insumo_id') }}
            {{ Form::select('insumo_id', $insumos,$compra->insumo_id, ['class' => 'form-control' . ($errors->has('insumo_id') ? ' is-invalid' : ''), 'placeholder' => 'Insumo Id']) }}
            {!! $errors->first('insumo_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('proveedor') }}
            {{ Form::text('proveedor', $compra->proveedor, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo') }}
            {{ Form::number('costo', $compra->costo, ['class' => 'form-control' . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => 'Costo']) }}
            {!! $errors->first('costo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::number('cantidad', $compra->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::number('total', $compra->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>