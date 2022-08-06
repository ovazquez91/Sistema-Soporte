<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class Cliente extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model("Usuario");
        $this->load->model("Clientes");
        $this->load->library('session');
	}
    
	public function index()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/index');
        $this->load->view('js');
        }    
	}
    
    public function ticket()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/lista-ticket');
        $this->load->view('js');
        }
	}
    
    public function detalleTicket()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/detalleTicket');
        $this->load->view('js');
        }
	}
    
    public function recibos()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/recibos');
        $this->load->view('js');
        }
	}
    
    public function recibo()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/recibo');
        $this->load->view('js');
        }
	}
    
    public function alltickets()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/lista-ticket');
        $this->load->view('js');
        }
	}
    
    public function ticketAprobados()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/lista-ticket');
        $this->load->view('js');
        }
	}
    
    public function ticketCerrados()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/lista-ticket');
        $this->load->view('js');
        }
	}
    
    public function ticketProceso()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/lista-ticket');
        $this->load->view('js');
        }
	}
    
    public function perfil()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/perfil');
        $this->load->view('js');
        }
	}
    
    public function producto()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/productos');
        $this->load->view('js');
        }
	}
    
    public function comprarHoras()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/comprarHoras');
        $this->load->view('js');
        }
	}
    
    public function horas()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/horas');
        $this->load->view('js');
        }
	}
    
    public function avisos()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/avisos');
        $this->load->view('js');
        }
	}
    
    public function noticias()
	{
        if (!$this->session->userdata('logged_in')) {    
            redirect(base_url() . 'Login');
        } else {
            
        $data["noticias"] = $this->Clientes->getAllNoticias();    
        $this->load->view('head');
        $this->load->view('clientes/menu-cliente');
		$this->load->view('clientes/noticias', $data);
        $this->load->view('js');
        }
	}
    
    
    
    
}
