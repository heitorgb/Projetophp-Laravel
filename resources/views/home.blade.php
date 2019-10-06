@extends('layouts.app')

@section('content')
<div class="container-fluid bg-white main">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card p-2 text-center">

                <div id="perfil" class="mx-auto">
                    @php
                        $nome = Auth::user()->name;
                        $n = str_split($nome);
                        $first = mb_strtoupper($n[0]);
                        $last = end($n) != $first ? mb_strtoupper(end($n)) : '';
                        echo $first.$last;
                    @endphp
                </div>
                <strong>{{ Auth::user()->name }}</strong>

            </div>
        </div>
        <div class="col-md-10 my-3">
            <div class="d-flex justify-content-between">
                <h2 class="">Listas de atividades</h2>

                <button type="button" class="btn btn-success">Adicionar</button>
            </div>

            <!-- Tabela -->
            @if($arrayLista)
            <div class="table-responsive my-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data de inicio</th>
                        <th scope="col">Data fim</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($arrayLista as $key => $linha)
                            <tr>
                                <th scope="row">
                                    {{ $linha->id }}
                                </th>
                                <td>{{ $linha->nome }}</td>
                                <td>{{ $linha->descricao }}</td>
                                <td>{{ $linha->dt_inicio }}</td>
                                <td>{{ $linha->dt_fim }}</td>
                                <td>{{ $linha->status }}</td>
                                <td class="text-right">

                                    <a href="#"
                                    class="btn btn-warning">Editar</a>

                                    <a href="#"
                                    class="btn btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
