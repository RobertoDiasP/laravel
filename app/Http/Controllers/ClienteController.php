<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
     // Método para exibir o formulário de criação
     public function create()
     {
         return view('clientes.create'); // Certifique-se de criar esta view
     }
     
     public function index()
     {
         return view('clientes.index'); // Certifique-se de criar esta view
     }
 
     // Método para armazenar um cliente
     public function store(Request $request)
     {
         // Validação dos dados
         $validatedData = $request->validate([
             'nome' => 'required|string|max:255',
             'telefone' => 'nullable|string|max:20',
             'data_nascimento' => 'nullable|date',
         ]);
 
         // Obtendo o usuário autenticado
         $user = auth()->user();
 
        //  Verificando se já existe um cliente associado ao usuário
         if ($user->cliente) {
             return redirect()->back()->withErrors('Este usuário já possui um cliente associado.');
         }
 
         // Criando o cliente associado ao usuário autenticado
         $cliente = Cliente::create([
             'nome' => $validatedData['nome'],
             'telefone' => $validatedData['telefone'],
             'data_nascimento' => $validatedData['data_nascimento'],
             'email' => $user->email,
             'user_id' => $user->id,
         ]);
 
         return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
     }
}
