<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class bonificaciones extends Controller
{
	
public function mostrar(){
if (session()->has('S_Rol') ) {
	if (session('S_Rol')==3){
	return view ('bonificaciones');
	}
}	
return redirect ('/');
}

}
?>