<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Affichage extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
		
	}
	public function sinup() {
		$this->load->view('template/header');
		$this->load->view('sinup');
		$this->load->view('template/footer');
	}
	public function insertion_user()
	{
		$this->form_validation->set_rules('mdp', 'Mot de passe', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pseudo', 'Nom', 'required');
		$this->form_validation->set_rules('prenom', 'Prénom', 'required');
        
		//Upload Image	
		// $config['file_name']            ='img';//Fanovana anarana raha tiana e!
		$config['upload_path']          = 'public/images';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 7680;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('userfile')) 
		{       
			    $this->load->view('template/header');
				$this->load->view('sinup');
				$this->load->view('template/footer');
		}
		else {
			$dataimage = $this->upload->data();
			$image = $dataimage['file_name'];
			if ($this->form_validation->run())
			{
				$data = [
					'pseudo' =>$this->input->post('pseudo'),
					'prenom' =>$this->input->post('prenom'),
					'email' =>$this->input->post('email'),
					'mdp' =>sha1($this->input->post('mdp')),
					'photo' => $image,
					'Date'=> date('Y-m-d H:i:s'),
					
				];
				$this->User_model->insertuser($data);
				$this->index();
			}
			else
			{
				$this->sinup();
			}
		}
	}
	public function login_validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mdp', 'Mot de passe', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run())
		{
			$email = $this->input->post('email');
		    $password = sha1($this->input->post('mdp'));

			$this->load->model('User_model');
			$valide = $this->User_model->can_login($password, $email);
			if ($valide) {

                $userData = array(
                    'user_id' => $valide->user_id,
                    'email' => $valide->email,
                    'logged_in' => true
                );
                $this->session->set_userdata($userData);
                $this->acceuil();
			}
			else{
                  $this->session->set_tempdata("error","Le Mot de passe ou Email incorrect!",3);
				  redirect(current_url());
			}
		}
		else
		{
			//False
			$this->index();
		}
	}
	public function logout() {
		$array_items = array('id_user', 'nom', 'email', 'logged_in');
        $this->session->unset_userdata($array_items);
		redirect(base_url()."index");
	}
	public function acceuil() {
		$this->load->view('template/header');
		$this->load->model('User_model');
		$data['user'] = $this->User_model->select_user();
		$this->load->view('acceuil',$data);
		$this->load->view('template/footer');
	}
	public function message() {
		$this->load->view('template/header');
		$this->load->view('message');
		$this->load->view('template/footer');
	}
	public function user() {
		$this->load->view('template/header');
		$this->load->model('User_model','user');
		$data['user'] = $this->user->select_user();
		$this->load->view('acceuil',$data);
		$this->load->view('template/footer');
	}
	public function boite_message() {
		$id=$this->input->post('id');
		$data = array(
			'user_id' => $id, 
		);
		$this->load->view('template/header');
		$this->load->model('User_model');
		$data['user'] = $this->User_model->select_user_seul($data);
		$this->load->view('message',$data);
		$this->load->view('template/footer');
	}
}
