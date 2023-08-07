<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>

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

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-8 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
            <div class="table-responsive-md">
            <table class="table">
                <tr class='bg-primary'>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                </tr>

                </thead>
                <tbody>
                    @foreach($cliente as $tablecliente)
                    <tr>  
                        <!-- Acessando os dados de cada campo pelo método do AgendamentosController -->
                        <td>{{ $tablecliente->nome }}</td>
                        <td>{{ $tablecliente->endereco }}</td>
                        <td>{{ $tablecliente->bairro }}</td>
                        <td>{{ $tablecliente->cep }}</td>
                        <td>{{ $tablecliente->cidade }}</td>
                        <td>{{ $tablecliente->estado }}</td>
                        <td>

                        </td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</x-app-layout>