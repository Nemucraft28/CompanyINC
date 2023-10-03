<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function __construct()
    {
       //$this->middleware('auth:api');
    }

    // Mostrar la lista de clientes
    public function index()
    {
        $cliente = Cliente::all();
        return response()->json(['cliente' => $cliente]);
    }

    // Mostrar un cliente específico
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return response()->json(['cliente' => $cliente]);
    }

    // Crear un nuevo cliente
    public function store(Request $request)
    {
       
        $cliente = new Cliente();
        $cliente->nombres = $request->input('nombres');
        $cliente->cedula = $request->input('cedula');
        $cliente->direccion = $request->input('direccion');
        $cliente->ciudad_numero = $request->input('ciudad_numero');
        $cliente->agente = $request->input('agente');
        $cliente->fecha_registro = $request->input('fecha_registro');
        $cliente->usrio_creador = $request->input('usrio_creador');
        $cliente->save();

        return response()->json(['mensaje' => 'Cliente creado con éxito']);
    }

    // Actualizar un cliente existente
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->email = $request->input('email');
        $cliente->save();
        return response()->json(['mensaje' => 'Cliente actualizado con éxito']);
    }

    // Eliminar un cliente
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return response()->json(['mensaje' => 'Cliente eliminado con éxito']);
    }
}