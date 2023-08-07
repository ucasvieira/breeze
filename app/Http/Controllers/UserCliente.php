<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class UserCliente extends Controller
{
    // Método post para validar e enviar os dados
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // Variável para armazenar os dados enviados pelos campos
            'nome' => 'required|max:255',
            'endereco' => 'required|max:255',
            'bairro' => 'required|max:255',
            'cep' => 'required|max:255',
            'cidade' => 'required|max:255',
            'estado' => 'required|max:255',
        ]);

            // Enviando os dados para o banco de dados
            $cliente = new Cliente();
            $cliente ->nome = $request->nome;
            $cliente ->endereco = $request->endereco;
            $cliente ->bairro = $request->bairro;
            $cliente ->cep = $request->cep;
            $cliente ->cidade = $request->cidade;
            $cliente ->estado = $request->estado;
            $cliente ->save();

            // Retornando para o formulário de cadastro
        return redirect()->route('listarCliente')
            ->with('success', 'Agendamento criado com sucesso!');
    }

    // Método get para mostrar os dados na tabela
    public function show(){

        // Recupera todos os agendamentos do banco de dados
        $tablecliente = Cliente::all();
        
        // Retorna a view 'consultar' com os agendamentos recuperados
        return view('listarCliente', ['cliente' => $tablecliente]);
    }

}