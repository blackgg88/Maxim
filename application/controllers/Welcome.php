<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function _construct() {
		parent::_construct();
    $this->load->model('shop_model');
    $this->load->library('cart');
	}

	public function index()
	{
    $this->load->model('shop_model');
    $dat['productos'] = $this->shop_model->get_destacado();
		$data['titulo'] = 'Inicio';

		$session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];
    $data['apellido'] = $session_data['apellido'];

		$this->load->view('partes/head_views',$data);
		$this->load->view('partes/menu_views');		
		$this->load->view('index',$dat);
		$this->load->view('partes/footer_views');

	}
	public function contacto(){
		$data = array('titulo' => 'Contacto',
			'inicio' => '',
			'catalogo' => '',
			'contacto' => 'active',
			);
    	$data['vision'] = 'hidden';
		$session_data = $this->session->userdata('logged_in');
	  	$data['id'] = $session_data['id'];
    	$data['username'] = $session_data['username'];
    	$data['perfil_id'] = $session_data['perfil_id'];
    	$data['nombre'] = $session_data['nombre'];
    	$data['apellido'] = $session_data['apellido'];
    	$data['email'] = $session_data['email'];

		$this->load->view('partes/head_views',$data);
		$this->load->view('partes/menu_views');
		$this->load->view('contacto');
		$this->load->view('partes/footer_views');
	}
	public function nosotros(){
		$data['titulo']='Nosotros';

		$session_data = $this->session->userdata('logged_in');
	  	$data['id'] = $session_data['id'];
    	$data['username'] = $session_data['username'];
    	$data['perfil_id'] = $session_data['perfil_id'];
    	$data['nombre'] = $session_data['nombre'];
    	$data['apellido'] = $session_data['apellido'];
    	$data['email'] = $session_data['email'];

		$this->load->view('partes/head_views',$data);
		$this->load->view('partes/menu_views');
		$this->load->view('nosotros');
		$this->load->view('partes/footer_views');
	}
	public function terminos(){
		$data['titulo']='Terminos y condiciones';

		$session_data = $this->session->userdata('logged_in');
	  	$data['id'] = $session_data['id'];
    	$data['username'] = $session_data['username'];
   		$data['perfil_id'] = $session_data['perfil_id'];
    	$data['nombre'] = $session_data['nombre'];
    	$data['apellido'] = $session_data['apellido'];
    	$data['email'] = $session_data['email'];
		$this->load->view('partes/head_views',$data);
		$this->load->view('partes/menu_views');
		$this->load->view('terminos');
		$this->load->view('partes/footer_views');
	}
		public function comercializacion(){
		$data['titulo']='Comercializacion';

		$session_data = $this->session->userdata('logged_in');
	  	$data['id'] = $session_data['id'];
    	$data['username'] = $session_data['username'];
    	$data['perfil_id'] = $session_data['perfil_id'];
    	$data['nombre'] = $session_data['nombre'];
    	$data['apellido'] = $session_data['apellido'];
    	$data['email'] = $session_data['email'];

		$this->load->view('partes/head_views',$data);
		$this->load->view('partes/menu_views');
		$this->load->view('comercializacion');
		$this->load->view('partes/footer_views');
	}
		public function registro(){
		$data['titulo']='Crear cuenta';

		$session_data = $this->session->userdata('logged_in');
	  	$data['id'] = $session_data['id'];
    	$data['username'] = $session_data['username'];
    	$data['perfil_id'] = $session_data['perfil_id'];
    	$data['nombre'] = $session_data['nombre'];
    	$data['apellido'] = $session_data['apellido'];
    	$data['email'] = $session_data['email'];

		$this->load->view('partes/head_views',$data);
		$this->load->view('partes/menu_views');
		$this->load->view('registro');
		$this->load->view('partes/footer_views');
	}
}
