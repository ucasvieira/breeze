<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Clientes</title>

    <!-- Styles -->
    @vite([
        'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="card">
            <div class="card-body">
                <div class="container-lg">

                    <form class="row g-3" method="POST" id="form" action="{{route('cliente.store')}}" nome="form">
                        @csrf
                        <div class="form-row">

                            <!-- Input Nome -->
                            <label for="validationCustom01">Nome</label>
                            <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Nome Completo" required>
                            <br>

                            <!-- Input Endereço -->
                            <label for="validationCustom02">Endereço</label>
                            <input type="text" name="endereco" class="form-control" id="validationCustom02" placeholder="Digite seu endereço"  required>
                            <br>

                            <!-- Input Bairro -->
                            <label for="validationCustom02">Bairro</label>
                            <input type="text" name="bairro" class="form-control" id="validationCustom02" placeholder="Digite seu bairro"  required>
                            <br>

                            <!-- Input Cep -->
                            <label for="validationCustom02">Cep</label>
                            <input type="text" name="cep" class="form-control" id="validationCustom02" placeholder="Digite seu cep"  required>
                            <br>

                            <!-- Input Cidade -->
                            <label for="validationCustom02">Cidade</label>
                            <input type="text" name="cidade" class="form-control" id="validationCustom02" placeholder="Digite seu cidade"  required>
                            <br>
                            
                            <!-- Input Estado -->
                            <label for="validationCustom02">Estado</label>
                            <input type="text" name="estado" class="form-control" id="validationCustom02" placeholder="Digite seu estado"  required>
                            <br>
                           

                            <!-- Botão Cadastrar -->
                            <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Fim do formulário -->
</form>
            </div>
        </div>
    </div>
</x-app-layout>
    