@extends('laravel-usp-theme::master')

@section('title') {{ config('app.name') }} - {{ config('ppgselecao.sisDesc') }} @endsection

@section('content')
<h5>Novo Processo Seletivo</h5>

<form method="POST" action="/processos" class="border border-info rounded p-3">
    {{ csrf_field() }}  
    <div class="form-group row">
        <label for="titulo" class="col-form-label col1 px-3">Título</label>
        <div class="w-75">
            <input type="text" class="form-control form-control-sm" id="titulo" name="titulo" placeholder="Título do Processo Seletivo" required
                value="ECA-PPGAC 2020">
        </div>
    </div>
    <div class="form-group row">
        <label for="codcur" class="col-form-label col1 px-3">Programa</label>
        <div class="col1">
            <select class="form-control form-control-sm" id="codcur" name="codcur" required>
                @foreach ($programas as $programa)
                <option value="{{ $programa['codcur'] }}">{{ $programa['sglcur'] }} - {{ $programa['nomcur'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="col1 px-3">
            <button type="button" class="btn btn-info btn-sm" title="Novo Programa de Pós-Graduação" 
                onclick="location.href='/programas/create';">Novo Programa</button>
        </div>
    </div>
    <div class="form-group row px-3">
        <fieldset class="row">
            <label for="inicio" class="col-form-label col1 px-3">Inscrições de</label>
            <div class="col1 form-inline">
                <input type="text" class="form-control form-control-sm datepicker mr-3" id="inicio" name="inicio" placeholder="dd/mm/aaaa" required>
                <input type="text" class="form-control form-control-sm" id="inicioTime" name="inicioTime" placeholder="hh:mm" required>
            </div>
            <label for="fim" class="col-form-label col2 px-3">à</label>
            <div class="col2 form-inline">
                <input type="text" class="form-control form-control-sm datepicker mr-3" id="fim" name="fim" placeholder="dd/mm/aaaa" required> 
                <input type="text" class="form-control form-control-sm" id="fimTime" name="fimTime" placeholder="hh:mm" required>
            </div>
        </fieldset>
    </div>
    <div class="form-group row px-3">
        <fieldset class="row">
            <label for="niveis" class="col-form-label col1 px-3">Níveis</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="niveisME" id="niveisME" value="ME">
                <label class="form-check-label" for="niveisME"> Mestrado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="niveisDO" id="niveisDO" value="DO">
                <label class="form-check-label" for="niveisDO"> Doutorado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="niveisDD" id="niveisDD" value="DD">
                <label class="form-check-label" for="niveisDD"> Doutorado Direto</label>
            </div>
        </fieldset>
    </div>
    <div class="form-group row px-3">
        <fieldset class="row">
            <label for="status" class="col-form-label col1 px-3">Status</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="status" name="status" value="Em Elaboração" checked>
                <label class="form-check-label" for="status"> Em elaboração</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="status" name="status" value="Publicado">
                <label class="form-check-label" for="status"> Publicado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="status" name="status" value="Concluido">
                <label class="form-check-label" for="status"> Concluido</label>
            </div>
        </fieldset>
    </div>   
    <div class="form-group row px-3">
        <label for="inicio" class="col-form-label col1">Publicação</label>
        <div class="col1 form-inline px-3">
            <input type="text" class="form-control form-control-sm datepicker mr-3" id="publicacao" name="publicacao" placeholder="dd/mm/aaaa">
            <input type="text" class="form-control form-control-sm" id="publicacaoTime" name="publicacaoTime" placeholder="hh:mm">
        </div>
    </div>    
    <div class="form-group row p-3">
        <button type="submit" class="btn btn-info" title="Salvar Novo Processo Seletivo">Salvar</button>
    </div>
</form>
@endsection


