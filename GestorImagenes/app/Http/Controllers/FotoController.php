<?php namespace GestorImagenes\Http\Controllers;

class FotoController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(){
		$this->middleware('auth');
	}
	public function getIndex(){
		return 'Mostrando fotos del usuario.';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
  public function getCrearFotos() {
    return 'Formulario de crear fotos.';
  }
  public function postCrearFotos() {
    return 'Almacenando fotos.';
  }
	public function ActualizarFoto(){
		return 'Formulario de actualizar foto';
	}
	public function getEliminarFoto(){
		return 'Formulario de eliminar fotos';
	}
	public function postEliminarFoto(){
		return 'Eliminar foto';
	}
	public function missingMethod($parameters=array()) {
		abort(404);
	}
}
