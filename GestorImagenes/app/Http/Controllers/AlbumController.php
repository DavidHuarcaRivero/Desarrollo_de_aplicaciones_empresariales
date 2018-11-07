<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getIndex(){
		return 'Mostrando álbumes del usuario.';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
  public function getCrearAlbum() {
    return 'Formulario de crear álbumes.';
  }
  public function postCrearAlbumes() {
    return 'Almacenando Álbum.';
  }
  public function getActualizarAlbum() {
    return 'Formulario de actualizar álbum.';
  }
  public function postActualizarAlbum() {
    return 'Actualizando álbum.';
  }
  public function getEliminarAlbum() {
    return 'Formulario de eliminar álbum.';
  }
  public function postEliminarAlbum() {
    return 'Eliminando Álbum.';
  }
	public function missingMethod($parameters=array()) {
		abort(404);
	}
}
