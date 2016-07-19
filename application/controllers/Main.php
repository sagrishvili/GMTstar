<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		if (isset($this->session->key) == 1) {
			$this->session->unset_userdata('key');
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name' , 'saxeli' , 'trim|htmlentities|required');
		$this->form_validation->set_rules('email' , 'email' , 'required|valid_email');
		$this->form_validation->set_rules('idnumb' , 'number' , 'required|numeric|min_length[11]');
		$this->form_validation->set_rules('date' , 'date' , 'required');
		$this->form_validation->set_rules('pass' , 'password' , 'required');
		$this->form_validation->set_rules('passw' , 'conf password' , 'required|matches[pass]');


		if ($this->form_validation->run() === FALSE) {
			$this->load->view('index');
		}else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$idnumb = $this->input->post('idnumb');
			$date = $this->input->post('date');
			$pass = $this->input->post('pass');
			$this->load->model('user');
			$this->user->registr($name,$email,$idnumb,$date,$pass);
			$info = array($name,$email,$idnumb,$date);
			$this->session->set_userdata('info', $info);
			$this->session->set_userdata('key',1);
			//$this->session->set_userdata('email',$email);
			redirect('/main/profile');
		}



		
	}

	/*public function upload()
	{
		$em = $this->session->email;
		$url = $this->do_upload();
		$this->load->model('user');
		$this->user->upda($url,$em);

	}

	public function do_upload()
	{
		$type = explode('.', $_FILES['userfile']['tmp_name']);
		$type = $type[count($type)-1];
		$url = './uploads/'.uniqid(rand()).'.'.$type;
if(in_array($type, array('jpg','jpeg','gif','png')))
		if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
			if(move_uploaded_file($_FILES['userfile'], ['tmp_name'] , $url))
				return $url;
			return "";
		}
	}*/

	public function profile()
	{
		if (isset($this->session->key) && $this->session->key == 1) {
			$infouser = $this->session->info;
			$this->load->model('user');
		    $user = $this->user->companyinfo();

		    foreach ($user->result() as $row)
		    {
		    	$infocompany = array($row->companyname,$row->email,$row->time,$row->news);
		    }

			$this->load->view('profile' , array(
				'info' => $infouser,
				 'infocomp' => $infocompany
				));
		}else{
			redirect('/main/home');
		}
		
	}

	public function home()
	{
		$this->load->view('index');
	}

	public function login()
	{
		$maili = $this->input->post('maili');
		$password = $this->input->post('password');
		$this->load->model('user');
		$user = $this->user->login($maili,$password);

		if ($user) {
			$this->load->model('user');
		    $user = $this->user->infouser($maili);

		    foreach ($user->result() as $row)
		    {
		    	$info = array($row->name,$row->email,$row->idnumber,$row->date);
		    }

		    $this->session->set_userdata('info', $info);
		    

			$this->session->set_userdata('key',1);
			redirect('/main/profile');
			echo "<script> atert('წარმატებით დარეგისტრირდით'); </script>";
		}else{
			redirect('/main/home');
			echo "<script> atert('მეილი ან პაროლი არასწორია'); </script>";
		}
	}



	public function registrcompa()
	{
		//$this->load->view('company');



		if (isset($this->session->com) == 1) {
			$this->session->unset_userdata('com');
		}



		$this->load->library('form_validation');
		$this->form_validation->set_rules('cname' , 'saxeli' , 'trim|required');
		$this->form_validation->set_rules('mail' , 'email' , 'required|valid_email');
		$this->form_validation->set_rules('passw' , 'password' , 'required');
		$this->form_validation->set_rules('confpassw' , 'conf password' , 'required|matches[passw]');
		$this->form_validation->set_rules('new' , 'news' , 'required|min_length[20]');;


		if ($this->form_validation->run() === FALSE) {
			$this->load->view('company');
		}else{
			$name = $this->input->post('cname');
			$email = $this->input->post('mail');
			$pass = $this->input->post('passw');
			$news = $this->input->post('new');
			$this->load->model('user');
			$this->user->registrcompa($name,$email,$pass,$news);
			$info = array($name,$email,$pass,$news);
			$this->session->set_userdata('info1', $info);
			$this->session->set_userdata('com',1);
			//$this->session->set_userdata('email',$email);
			redirect('/main/companyprofile');
		}






	}




	public function companyprofile()
	{
		if (isset($this->session->com) && $this->session->com == 1) {
			$infouser = $this->session->info1;

			$this->load->view('companyprofile' , array(
				'info1' => $infouser
				));
		}else{
			//redirect('/main/registrcompa');
		}
		
	}



	public function companylogin()
	{


		$maili = $this->input->post('maili');
		$password = $this->input->post('passwr');
		$this->load->model('user');
		$user = $this->user->companylogin($maili,$password);

		if ($user) {
			$this->load->model('user');
		    $user = $this->user->infocomp($maili);

		    foreach ($user->result() as $row)
		    {
		    	
		    	$info = array($row->companyname,$row->email,$row->time,$row->news);
		    }

		    $this->session->set_userdata('info1', $info);
		    

			$this->session->set_userdata('com',1);
			redirect('/main/companyprofile');
			echo "<script> atert('წარმატებით დარეგისტრირდით'); </script>";
		}else{
			redirect('/main/registrcompa');
			echo "<script> atert('მეილი ან პაროლი არასწორია'); </script>";
		}

	}




	public function useridea()
	{
		$this->load->view('idea');
	}


}



?>