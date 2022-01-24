<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

//    public function __construct() {
//
//        parent::__construct();
//        $this->load->library('ion_auth');
//        if (!$this->ion_auth->logged_in()) {
//
//            redirect('auth/login', 'refresh');
//            }
//        }
        
            

    public function redirecionar() {

        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
    }

    public function index() {
        $data['titulo'] = 'Blordware';

        $postagens = $this->db->get('post')->result();
        $postagem = $this->db->get('autor')->result();
//            echo 'quantidade posts:'.count($postagens);
        $data['postagens'] = $postagens;
        $data['postagem'] = $postagem;
        $this->load->view('home', $data);
    }

    public function post($id = FALSE) {
//            echo $id;


        $data['titulo'] = 'Posts';
        if ($id != FALSE) {

            $post = $this->db->get_where('post', array('id' => $id))->row();

//            print_r($post);
            $data['postagem'] = $post;
        }

        $this->load->view('template/post', $data);
    }

    public function sobre() {
        $data['titulo'] = 'Sobre';
        $this->load->view('sobre', $data);
    }
    public function postagemP() {
        $data['titulo'] = 'PostagemP';
        $this->load->view('postagemP', $data);
    }

    public function publicar() {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $data['titulo'] = 'Publicar';
        $this->load->view('template/publicar', $data);
    }

}
