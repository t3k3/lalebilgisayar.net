<?php

class Urun_model extends CI_Model{

    public function get($id){

        return $this->db->where('id', $id)->get('urunler')->row();

    }

    public function getAll($tablo = 'urunler', $where = array()) {


        return $this->db->where($where)->get($tablo)->result();
        
    }

    public function getSearch($q = array(), $q1 = array(), $tablo = 'urunler', $where = array()) {


        return $this->db->like($q)->or_like($q1)->where($where)->get($tablo)->result();
        
    }

    public function urunEkle($data = array()) {

        $insert = $this->db->insert('urunler', $data);
        
        if($insert) {
            
            return $this->db->insert_id();
        }

    }

    public function resimEkle($data = array()) {

        return $this->db->insert('gorsel', $data);

    }

    public function urunGuncelle() {

    }

    public function urunSil($id) {

        return $this->db->where('id', $id)->delete('urunler');

    }

}
