<?php

class Admin extends CI_Controller {

    public function index() {

        $this->load->model('urun_model');

        if ($this->session->userdata('name')) {
            $urunData = $this->urun_model->getAll();
            $kategoriData = $this->urun_model->getAll('kategori');
        
    
            $viewData = array(
                'urunData' => $urunData,
                'kategoriData' => $kategoriData
            );
             
    
            $this->load->view('admin/production/index', $viewData);
        }
        
        else {

            redirect(base_url('admin/login'));

        }




    }

    public function login(){

        $this->load->view('admin/production/login');

    }

    public function loginYap(){

        $this->load->model('User_model');

        $user = $this->User_model->userGet(array(
            'name' => $this->input->post('username'),
            'password' => hash('sha256', $this->input->post('password')),
            'yetki' => 5
        ));

        if ($user) {
            $this->session->set_userdata('name', $this->input->post('username'));

            redirect(base_url('admin'));

        }

        else {
            redirect(base_url('admin/login?login=0'));
        }

    }

    public function logOut(){

        $this->session->sess_destroy();
        $this->load->view('admin/production/login');

    }


    public function yeniEklePage() {

        if ($this->session->userdata('name')) {

            $this->load->view('admin/production/yeni_urun');
        }

        else {
            $this->load->view('admin/production/login');
        }
        
        

    }

    public function urunEkle() {


        if ($this->session->userdata('name')) {

            $data = array(
                'urun_kodu' => $this->input->post('urun_kodu'),
                'kategori_id' => $this->input->post('kategori_id'),
                'urun_name' => $this->input->post('urun_name'),
                'urun_marka' => $this->input->post('urun_marka'),
                'urun_model' => $this->input->post('urun_model'),
                'urun_detay' => $this->input->post('urun_detay'),
                'urun_etiketler' => $this->input->post('urun_etiketler'),
                'urun_fiyat' => $this->input->post('urun_fiyat'),
                'urun_isyeni' => $this->input->post('urun_isyeni'),
                'urun_stok' => $this->input->post('urun_stok'),
            );
    
            $this->load->model('urun_model');
    
            $viewData['last_id'] = $this->urun_model->urunEkle($data);
            $viewData['urun_name'] = $this->input->post('urun_name');
            
            
            $this->load->view('admin/production/resimEkle', $viewData);
        }

        else {
            $this->load->view('admin/production/login');
        }

        

    }


    public function resimEkle($last_id) {


        if ($this->session->userdata('name')) {

            $date = date('m-d-Y_H:i:s');

            $this->load->model('urun_model');
    
            $config['allowed_types'] = 'jpg|gif|png';
            $config['upload_path'] = 'uploads/';
    
            $this->load->library('upload', $config);
    
            if($this->upload->do_upload('file')) {
                
                $file_name = $this->upload->data('file_name');
     
                $data = array(
                    'urun_id' => $last_id,
                    'name' => $file_name,
                    'path' => base_url('uploads/').$file_name
                );
               
                $this->urun_model->resimEkle($data);
               
            }
    
            else {
                echo "Başarsız.";
            }
        }

        else {
            $this->load->view('admin/production/login');
        }
        
       
    }

    public function urunSil($id) {

        if ($this->session->userdata('name')) {

            $this->load->model('urun_model');
        

            //gorsel tabosundan gorsel isimleri çekilir.
    
            $temp = $this->urun_model->getAll('gorsel', array('urun_id' => $id));
    
            if ($temp) {
                //gorselleri isimlerine göre siler.
                foreach ($temp as $tem) {
                    unlink('uploads/'.$tem->name);
                }
            }
    
            //urun database girdilerini siler.
            $this->urun_model->urunSil($id);
    
            redirect('/admin');
        }

        else {
            $this->load->view('admin/production/login');
        }



    }


}

