<?php
class News extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
                $this->load->library('session');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'Articles';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);
                if (empty($data['news_item'])) {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Nouvel article';

                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                if ($this->form_validation->run() === FALSE) {
                        $this->load->view('templates/header', $data);
                        $this->load->view('news/create');
                        $this->load->view('templates/footer');
                        $data['echec'] = "un problème est survenu";
                } else {
                        $this->news_model->set_news();
                        $this->session->set_flashdata('success', 'l\'article a été ajouté');
                        redirect('/news/', 'refresh');
                }
        }

        public function update($slug = FALSE)
        {

                $this->load->helper('form');
                $this->load->helper('url');
                $this->load->library('form_validation');

                //data to display in form
                $data['title'] = 'Modifiez l\'article';
                $data['news_item'] = $this->news_model->get_news($slug);


                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('text', 'Text', 'required');

                if ($this->form_validation->run() === FALSE) {
                        $this->load->view('templates/header', $data);
                        $this->load->view('news/update', $data);
                        $this->load->view('templates/footer');
                } else {
                        //get new data
                        $this->news_model->update_news($slug,);
                        $this->session->set_flashdata('success', 'l\'article a été modifié');
                        redirect('/news/', 'refresh');
                     
                }
        }

        public function delete($slug) {
             
                if($this->news_model->delete_news($slug)) {
                        $this->session->set_flashdata('success', 'l\'article a été supprimé');
                        redirect('/news/', 'refresh');
                } else {
                        $this->session->set_flashdata('error', 'un problème est survenu');
                        redirect('/news/view/', 'refresh');
                }
        }

}
