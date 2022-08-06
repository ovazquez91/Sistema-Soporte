<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model("Usuario");
        $this->load->library('session');
	}
    
	public function index()
	{
        $this->load->view('head');
		$this->load->view('login/login');
        $this->load->view('js');
	}
    
    public function sigIn()
	{
		$usr = $this->input->post('txtUser');
		$pwd = $this->input->post('txtPwd');

		// VALIDAMOS QUE LA PETICIÓN VENGA DE UN POST
		if ($this->input->post("btnAccesar") === "valid") {
			if ($usr != "" && $pwd != "") {
				$data = [
					"correo
                    " => $usr
				];
				$userData = $this->Usuario->getUsuario($data);
				// validamos los datos
				if (isset($userData)) {
                    
                    if ($userData->estatus == "1"){
                        
                    if ($userData->id_rol == "3"){
                        
                        //es cliente
					   if ($usr == $userData->correo && $pwd == $userData->password) {
						$session_data = [
									"usuario_id" => $userData->id_usuario,
									"nombre" => $userData->nombre,
									"telefono" => $userData->telefono,
									"correo" => $userData->correo,
									"logged_in" => TRUE
								];
								// Mandamos el dato a la sesiones
								$this->session->set_userdata($session_data);
								// $this->session->userdata("");
								redirect(base_url() . 'Cliente');
                        
                        
					   } else {
						redirect(base_url() . "index.php/Login/errorUsuarioPassword");
					   } // else
                    }else if($userData->id_rol == "2"){
                        //es soporte
                        
                    }else if($userData->id_rol == "1"){
                        //es admin
                    }else{
                        //el estatus del usuario esta inactivo
                    }
    
				} // if
				else {
					redirect(base_url() . "index.php/Login/errorUsuarioBloqueado");
				}
			} // IF
			else {
              redirect(base_url() . "index.php/Login/errorSinUsuario");

			} // else
		} // if btn VALID
		else {
			redirect(base_url() . "index.php/Login/errorValoresVacios");
		} 
	}
    }// signIn
    
    public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
    
    public function errorSinUsuario()
	{
		$this->load->view('head');
		$this->load->view('login/errorSinUsuario');
        $this->load->view('js');
	}
    
    public function errorUsuarioBloqueado()
	{
		$this->load->view('head');
		$this->load->view('login/errorUsuarioBloqueado');
        $this->load->view('js');
	}
    
    public function errorUsuarioPassword()
	{
		$this->load->view('head');
		$this->load->view('login/errorUsuarioPassword');
        $this->load->view('js');
	}
    
    public function errorValoresVacios()
	{
		$this->load->view('head');
		$this->load->view('login/errorValoresVacios');
        $this->load->view('js');
	}
    
    
    
    
}
