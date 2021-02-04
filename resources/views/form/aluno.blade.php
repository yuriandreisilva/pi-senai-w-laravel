@extends('layouts.app')

@section('content')
@include('layouts.menu')
    <div class="container">
    <ol>
        <li>cpf </li>
        <li>nome completo</li>
        <li>data nascimento</li>
        <li>email</li>
        <li>senha</li>
    <ol>
    <form class="mt-4">
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Nome</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Nome completo">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">CPF</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="000.000.000-00">
        </div>
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="email@provedor.com">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="***************">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Nascimento</label>
            <input type="date" class="form-control" id="inputAddress2">
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    </div>
@endsection
