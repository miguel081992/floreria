<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Insumo') }}
            {{ Form::text('nombreInsumo', $insumo->nombreInsumo, ['class' => 'form-control' . ($errors->has('nombreInsumo') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Insumo']) }}
            {!! $errors->first('nombreInsumo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::number('cantidad', $insumo->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disponible') }}
            <br>
            {{ Form::label('Sí') }}
            {{ Form::radio('disponible', $insumo->disponible=1, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {{ Form::label('No') }}
            {{ Form::radio('disponible', $insumo->disponible=0, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>