
@extends('layouts.app')

@section('content')
@include('layouts.menu')
    <div class="container-fluid">
        <div class="row mt-4 mr-1">
            <div class="ml-auto">
            <a href="{{ route('aluno') }}" class="btn btn-primary">Pesquisar</a>
            <a href="{{ route('aluno/novo') }}" class="btn btn-primary">Cadastrar novo</a>
            </div>
        </div>
    </div>
@endsection
