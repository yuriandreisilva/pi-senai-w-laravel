@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Alunos</strong></h5>
                    <p class="card-text">Busque, adicione, edite ou remova alunos aqui.</p>
                    <a href="#" class="btn btn-primary">Vamos lá</a>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Livros</strong></h5>
                    <p class="card-text">Busque, adicione, edite ou remova livros aqui.</p>
                    <a href="#" class="btn btn-primary">Vamos lá</a>
                </div>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Empréstimos</strong></h5>
                    <p class="card-text">Consulte os empréstimos aqui.</p>
                    <a href="#" class="btn btn-primary">Vamos lá</a>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><strong>Relatórios</strong></h5>
                    <p class="card-text">Verifique os dados de empréstimos por aqui.</p>
                    <a href="#" class="btn btn-primary">Vamos lá</a>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
