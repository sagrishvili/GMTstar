<?php


class User extends CI_Model {


	public function registr($name,$email,$idnumb,$date,$pass)
	{
		 $this->db->insert('user', array(

		 	'name' => $name,
		 	'email' => $email,
		 	'idnumber' => $idnumb,
		 	'date' => $date,
		 	'pass' => $pass

		 	));
	}


/*	public function upda($url,$em)
	{
		$this->db->set('img', $url);
		$this->db->where('email',$em);
		$this->db->update('user');
	}
*/




	public function login($maili,$password)
	{
		$this->db->select('email , pass');
		$this->db->where('email' ,$maili);
		$this->db->where('pass' ,$password);
		$query = $this->db->get('user');


		if ($query->num_rows()>0) {
			foreach ($query->result() as $rows) {
				$newdata = array(

					'email' => $rows->email,
					'pass' => $rows->pass,


					);
			}
			return true;
		}
		return false;

	}



	public function infouser($mai)
	{
		$this->db->select('name , email , idnumber , date');
		$this->db->where('email' ,$mai);
		return $this->db->get('user');
	}






	public function registrcompa($name,$email,$pass,$news)
	{
		 $this->db->insert('compuser', array(

		 	'companyname' => $name,
		 	'email' => $email,
		 	'pass' => $pass,
		 	'news' => $news

		 	));
	}


	public function companylogin($maili,$password)
	{

		$this->db->select('email , pass');
		$this->db->where('email' ,$maili);
		$this->db->where('pass' ,$password);
		$query = $this->db->get('compuser');


		if ($query->num_rows()>0) {
			foreach ($query->result() as $rows) {
				$newdata = array(

					'email' => $rows->email,
					'pass' => $rows->pass,


					);
			}
			return true;
		}
		return false;

	}



	public function infocomp($mai)
	{
		$this->db->select('companyname , email , time , news');
		$this->db->where('email' ,$mai);
		return $this->db->get('compuser');
	}


	public function companyinfo()
	{
		$this->db->select('companyname , email , time , news');
		return $this->db->get('compuser');
	}



}



?>