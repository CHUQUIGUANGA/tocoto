@extends('adminlte::page')

@section('title', 'TOCOTO_PERFIL')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--Este es el cuerpo del perfil del cliente o admin de centro-->
                    
                    {{ __('Tu estas logeado en tocoto!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
