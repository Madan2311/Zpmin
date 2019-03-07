<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Fcliente = Cliente::all();
        return view("Clientes.Fclientes",['cliente'=>$Fcliente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(Clientes.clienteAgregar);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $Fcliente = new Cliente;
            $Fcliente->identificacion = $request->identificacion;
            $Fcliente->razon_social = $request->razon_social;
            $Fcliente->email = $request->email;
            $Fcliente->telefono = $request->telefono;
            $Fcliente->total_pagar = $request->total_pagar;

            if($Fcliente->save()){
                $message = "Cliente registrado con exito";
                $status = "alert-success";
            }else{
                $message = "No se puede registrar el usuario";
                $status = "alert-danger";
            }
            return redirect('/Fclientes')->with('status', $status)->with('message', $message);
        }catch (Exception $e) {
            return "fatal error - ".$e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Fcliente = Cliente::find($id);
            if($Fcliente->delete()){
                $message = "Cliente eliminado correctamente!";
                $status = "alert-success";
            }else{
                $message = "No se pudo eliminar el usuario";
                $status = "alert-danger";
            }

            // return redirect()->action('UserController@index',['message' => $message]);
            return redirect('/')->with('status', $status)->with('message', $message);
        } catch (Exception $e) {
            return "fatal error - ".$e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Fcliente = Cliente::find($id);
        return view("Form.Clientes.clienteEditar",[ 'cliente'=>$Fcliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $Fcliente = Cliente::find($id);
            $Fcliente->identificacion = $request->identificacion;
            $Fcliente->razon_social = $request->razon_social;
            $Fcliente->email = $request->email;
            $Fcliente->telefono = $request->telefono;
            $Fcliente->total_pagar = $request->total_pagar;

            if($Fcliente->save()){
                $message = "Datos actualizados correctamente!";
                $status = "alert-success";
            }else{
                $message = "No se pudo actualizar los datos";
                $status = "alert-danger";
            }

            return redirect('/cliente')->with('status', $status)->with('message', $message);
        } catch (Exception $e) {
            return "fatal error - ".$e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
