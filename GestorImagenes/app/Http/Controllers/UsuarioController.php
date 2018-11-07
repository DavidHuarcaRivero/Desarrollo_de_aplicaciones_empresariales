<?php namespace GestorImagenes\Http\Controllers;

class UsuarioController extends Controller {
  /**
  *Create a new controller instance.
  *
  *@return void
  */
  public function _construct() {
    $this->middleware('auth');
  }
  public function getEditarPerfil() {
    return 'Mostrando formulario.';
  }
  public function postEditarPerfil() {
    return 'Generando actualización de perfil.';
  }
  public function missingMethod($parameters=array()) {
		abort(404);
	}
}
