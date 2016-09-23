<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

	public function index(){
		
		$data['citacoes'] = $this->db->get('citacoes')->result();
		$this->load->view('citacoes', $data);
	}
	
	public function formulario_cadastro(){
		
		$this->load->helper('form');
		$this->load->view('formulario-cadastro');
	}

	public function gerar_pdf(){
		
		$data['citacoes'] = $this->db->get('citacoes')->result();
		$this->load->view('gerar-pdf', $data);
	}

	public function enviar_referencia (){
	
		$mensagem = "Nome: " . $this->input->post('txt_nome') . br();
		$mensagem .= "Título: " . $this->input->post('txt_titulo') . br();
		$mensagem .= "Autores: " . $this->input->post('txt_autores') . br();
		$mensagem .= "Citações: " . $this->input->post('txt_citacoes') . br();
		$mensagem .= "Palavras-chave: " . $this->input->post('txt_palavrasChave') . br();
		$mensagem .= "Referências: " . $this->input->post('txt_referencias') . br();
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('txt_nome','nomeArquivo','required');			
			$this->form_validation->set_rules('txt_titulo','titulo','required');
			$this->form_validation->set_rules('txt_autores','autores','required');
			$this->form_validation->set_rules('txt_citacoes','citacoes','required');
			$this->form_validation->set_rules('txt_referencias','referencias','required');
			$this->form_validation->set_rules('txt_palavrasChave','palavrasChave','required');
			if($this->form_validation->run()){	
				$data['nomeArquivo'] = $this->input->post('txt_nome');
				$data['titulo'] = $this->input->post('txt_titulo');
				$data['autores'] = $this->input->post('txt_autores');
				$data['citacoes'] = $this->input->post('txt_citacoes');
				$data['palavrasChave'] = $this->input->post('txt_palavrasChave');
				$data['referencias'] = $this->input->post('txt_referencias');
				if($this->db->insert('citacoes',$data)){
					redirect(base_url());
				}else{
					print "<script> alert('ERRO!'); window.history.go(-1); </SCRIPT>\n";		
				}	
			}else{
				print "<script> alert('Há campos em branco.'); window.history.go(-1); </SCRIPT>\n";
			}
	}
	
	public function error404(){
		
		$this->load->view('error404');
	}
}
