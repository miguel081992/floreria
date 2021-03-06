@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Insumo Id:</strong>
                            {{ $producto->insumo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadinsumo:</strong>
                            {{ $producto->cantidadInsumo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreproducto:</strong>
                            {{ $producto->nombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $producto->costo }}
                        </div>
                        <div class="form-group">
                            <strong>Precioventa:</strong>
                            {{ $producto->precioVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $producto->disponible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
