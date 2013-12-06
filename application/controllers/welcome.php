<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function save()
	{
		
		header("Content-type: application/json");
		$data = '"time":"'.time().'"';
		foreach ($_FILES as $key => $value) 
		{

			$file = $key;
			$properties = $value;
			if($properties['tmp_name']!=""){
				$name = (time()*(rand(100,1000))) . '.' . pathinfo($properties['name'], PATHINFO_EXTENSION);
				$config = "";
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = '*';
				$config['file_name'] = $name;
				$this->load->library('upload');
				$this->upload->initialize($config);
				$this->upload->do_upload($file);
				$data .= ',"'.$file.'":"'.$name.'"';
			}else{
				$data .= ',"'.$file.'":""';
			}
			
		}
		
		foreach($_POST as $key=>$value)
		{
			$field = explode('_',$key);
			$data .= ',"'.$key.'":"'.$value.'"';
		}
		
		$data = '{'.$data.'}';
		echo $data;

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */