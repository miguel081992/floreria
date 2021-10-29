@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? 'Ver Compra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras.index') }}"> Volver </a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Insumo:</strong>
                            {{ $compra->insumo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $compra->proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $compra->costo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $compra->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $compra->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
