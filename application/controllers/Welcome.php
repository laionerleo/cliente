<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        
        parent::__construct();
 
        //cargamos la base de datos por defecto
        $this->load->database('default');
        
        //cargamos los agentes para los dispositivos
        $this->load->library('user_agent');

		//cargamos el helper url y el helper form
        $this->load->helper(array('url', 'language'));
        
        //cargamamos la libreria del lenguaje
        $this->lang->load('welcome');

        //cargamos los modelos
        $this->load->model(array('Msecurity'));

    }

	/**/
		/**/
	public function index()
	{	
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('index', $d);
	
	}
	public function login()
	{	
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$urlblog = "http://localhost/serviciosoap/loginusuario";
		//$jsonblog = file_get_contents($urlblog);
		$post = $this->input->post();
		//print_r($post);
		//The URL of the resource that is protected by Basic HTTP Authentication.
		$url = 'http://localhost/serviciosoap/loginusuario';
		//Your username.
		$username = $post['inp_email'];
		//Your password.
		$password = $post['inp_password'];
		//Initiate cURL.
		$ch = curl_init($url);
		//Specify the username and password using the CURLOPT_USERPWD option.
		curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
		//Tell cURL to return the output as a string instead
		//of dumping it to the browser.
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//Execute the cURL request.
		$response = curl_exec($ch);
		print_r($response);
		//Check for errors.
		if(curl_errno($ch)){
			//If an error occured, throw an Exception.
			throw new Exception(curl_error($ch));
		}
		//Print out the response.
		echo $response;
		$this->load->view('inicio', $d);
	}

	public function subir(){
	
		$d = array();
		$this->Msecurity->url_and_lan($d);
		echo base_url()."application/assets/images/";
		$this->load->view('subir', $d);
	//	$this->cargar();
	
	}

	public function bajar(){
	
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('bajar', $d);
	
	}

	function cargar() {
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$firma=$this->input->post("firma");
		echo $firma;
		
	
		$mi_archivo = 'mi_archivo';
        $config['upload_path'] = 'archivos/';
        $config['file_name'] = "nombre_archivo";
        $config['allowed_types'] = "pdf | doc";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

		$this->load->library('upload', $config);
		
        if (!$this->upload->do_upload($mi_archivo)) {
			//*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            print_r($this->upload->display_errors());
            return;
		}
         print_r($this->upload->data());
		
		
	}
	
	public function download(){
        
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            //$fileInfo = $this->file->getRows(array('id' => $id));
            
            //file path
            $file = 'archivos/nombre_archivo.png';
            
            //download file from directory
            force_download($file, NULL);
        
    }

	public function error404($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error404', $d);
	
	}

	/**/

	public function error($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error403', $d);
	
	}

	/**/

	public function error403($lan='es')
	{
		$d = array();
		$this->Msecurity->url_and_lan($d);
		$this->load->view('error403', $d);
	
	}

	/**/
}