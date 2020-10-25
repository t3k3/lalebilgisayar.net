<?php

class Home extends CI_Controller {

    public function index() {

        $viewData['page'] = 'index';
        
        $this->load->view('index', $viewData);

    }


    public function iletisim() {

        $page = $this->uri->segment(1);
        $viewData['page'] = $page;
        $this->load->view('iletisim', $viewData);

    }

    public function urun($id) {

        $this->load->model('urun_model');

        $viewData['gorsel'] = $this->urun_model->getAll('gorsel', array('urun_id' => $id));

        $viewData['kategori'] = $this->urun_model->getAll('kategori');

        $viewData['page'] = '';
        $viewData ['urun'] = $this->urun_model->get($id);


        $this->load->view('urun', $viewData);

    }

}