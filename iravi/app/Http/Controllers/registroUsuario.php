<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\usuario;
use App\persona;
use App\detallepersonadireccion;
use App\genero;
use App\tipodireccion;
use App\direccion;
use Illuminate\Http\Request;
use DB;

class registroUsuario extends Controller
{

public function mostrar(){
if (session()->has('S_Rol') ) {
	return redirect ('/');
	}else{

		$tipoDireccion = DB::select('SELECT idtipo, tipo from tipodireccion');
		$tipoGenero = DB::select('SELECT idgenero, sexo from genero');

		return view ('registroUsuario',['tipoDireccion'=>$tipoDireccion, 'tipoGenero'=>$tipoGenero]);
	}

}

	public function guardar(Request $datos)
	{
		//dd($datos->all());
		$persona = new persona;
		$persona->nombrepersona=$datos->input('nombre');
		$persona->apellidopaterno=$datos->input('app');
		$persona->apellidomaterno=$datos->input('apm');
		$persona->fechanacimiento=$datos->input('nacimiento');
		$persona->telefono=$datos->input('telefono');
		$persona->correoelectronico=$datos->input('correo');

		$persona->fkgenero=$datos->input('genero');
		$persona->save();
		$ultimoidpersona=$persona->idpersona;
		$usuario = new usuario;
		$usuario->idusuario = $datos->input('idusuario');
		$usuario->contrasena = $datos->input('contrasena');
		$usuario->fkpersona =  $ultimoidpersona;
		$usuario->fkrol = 3;
		$usuario->save();
		$direccion = new direccion;
		$direccion->calle = $datos->input('calle');
		$direccion->numint = $datos->input('ninterior');
		$direccion->numext = $datos->input('nexterior');
		$direccion->colonia = $datos->input('colonia');
		$direccion->municipio = $datos->input('municipio');
		$direccion->ciudad = $datos->input('ciudad');
		$direccion->pais = $datos->input('pais');
		$direccion->codigopostal = $datos->input('cp');
		$direccion->fktipo = $datos->input('tipodireccion');
		$direccion->save();
		$ultimoiddireccion=$direccion->id;
		$detallepersonadireccion= new detallepersonadireccion;
		$detallepersonadireccion->fkpersona=$ultimoidpersona;
		$detallepersonadireccion->fk_direccion=$ultimoiddireccion;
		$detallepersonadireccion->save();
		
		 session(['S_Rol' => '3']);
         session(['S_identificador'=>$datos->input('correo')]);
			       return redirect('/');
	}
}
?>
