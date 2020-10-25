<?php

class Kategori extends CI_Controller{


    public function index(){

        if ($this->input->get('q') !== null) {

            $q = $this->input->get('q');
            
            //arama kısmı like
            $urunData = $this->urun_model->getSearch(array('urun_name' => $q), array('urun_marka' => $q, 'urun_model' => $q, 'urun_etiketler' => $q));
            $gorselData = $this->urun_model->getAll('gorsel');
            $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


            $viewData = array(
                'page' => 'urunler',
                'gorselData' => $gorselData,
                'urunData' => $urunData,
                'altKategoriler' => $kategoriler,
                'pageKategori' => 'tumu'
            );

            
            $this->load->view('urunler', $viewData);
            
            
        }

        else {

            $urunData = $this->urun_model->getAll();
            $gorselData = $this->urun_model->getAll('gorsel');
            $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


            $viewData = array(
                'page' => 'urunler',
                'gorselData' => $gorselData,
                'urunData' => $urunData,
                'altKategoriler' => $kategoriler,
                'pageKategori' => 'tumu'
            );

            
            $this->load->view('urunler', $viewData);
        }

    }

    public function bilgisayar(){



        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 1));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'bilgisayar'
        );

        
        $this->load->view('urunler', $viewData);

    }

    public function donanim(){


        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 2));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'donanim'
        );

        
        $this->load->view('urunler', $viewData);
        
    }


    public function tablet(){
        
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 3));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'tablet'
        );

        
        $this->load->view('urunler', $viewData);


    }

    public function notebook(){
        
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 4));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'notebook'
        );

        
        $this->load->view('urunler', $viewData);


    }



    public function masaustu(){
        
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 5));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'masaustu'
        );

        
        $this->load->view('urunler', $viewData);


    }

    public function server(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 6));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'server'
        );

        
        $this->load->view('urunler', $viewData);
    }

    public function netbook(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 7));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'netbook'
        );

        
        $this->load->view('urunler', $viewData);
    }



    public function islemci(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 8));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'islemci'
        );

        
        $this->load->view('urunler', $viewData);
    }

    public function anakart(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 9));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'anakart'
        );

        
        $this->load->view('urunler', $viewData);
    }

    public function ram_bellek(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 10));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'ram-bellek'
        );

        
        $this->load->view('urunler', $viewData);
    }

    public function ekran_karti(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 11));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'ekran-karti'
        );

        
        $this->load->view('urunler', $viewData);
    }

    public function hard_disk(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 12));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'hard-disk'
        );

        
        $this->load->view('urunler', $viewData);
    }

    public function ssd_disk(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 13));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'ssd-disk'
        );

        
        $this->load->view('urunler', $viewData);
    }

    public function monitor(){
        $urunData = $this->urun_model->getAll('urunler', array('kategori_id' => 14));
        $gorselData = $this->urun_model->getAll('gorsel');
        $kategoriler = $this->urun_model->getAll('kategori', array('kategori_ust_id !=' => 0));


        $viewData = array(
            'page' => 'urunler',
            'gorselData' => $gorselData,
            'urunData' => $urunData,
            'altKategoriler' => $kategoriler,
            'pageKategori' => 'monitor'
        );

        
        $this->load->view('urunler', $viewData);
    }




}