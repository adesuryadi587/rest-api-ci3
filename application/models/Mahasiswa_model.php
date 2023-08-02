<?php

class Mahasiswa_model extends CI_Model
{

    public function getMahasiswa($id = null)
    {
        if ($id === null) {
            //ambil hanya field ini            
            $this->db->from('tb_mhs'); // table mahasiswa
            $result = $this->db->get()->result_array(); //ambil semua
            return $result;
        } else {
            //ambil hanya field ini

            $this->db->from('tb_mhs'); // table mahasiswa
            $this->db->where('id_mhs', $id);   // where id = id_mhs      
            $result = $this->db->get()->row_array(); //ambil satu
            return $result;
        }
    }

    //pencarian berdasarkan id_mhs atau nama
    public function getsearchMahasiswa($id = null)
    {
        //ambil hanya field ini

        $this->db->from('tb_mhs'); // table mahasiswa
        $this->db->like('id_mhs', $id);   // where id_mhs = id     
        $this->db->or_like('nm_mhs', $id);   // where id_mhs = id     
        $result = $this->db->get()->result_array(); //ambil semua
        return $result;
    }
}
