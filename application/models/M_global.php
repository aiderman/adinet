<?php
class M_global extends CI_Model
{
    private $table = "v_paket_combined";

    public function findAll()
    {
        $this->db->select('*');
        return $this->db->get($this->table)->result();
    }

    function listPaket1()
    {
        $this->db->from('v_list_paket1');
        $result = $this->db->get(); // Simpan hasil query ke variabel $result
        if ($result) {
            return $result->result(); // Ambil hasil jika query berhasil
        } else {
            return false; // Kembalikan FALSE jika query gagal
        }
    }

    function listPaket2()
    {
        $this->db->from('v_list_paket2');
        $result = $this->db->get(); // Simpan hasil query ke variabel $result
        if ($result) {
            return $result->result(); // Ambil hasil jika query berhasil
        } else {
            return false; // Kembalikan FALSE jika query gagal
        }
    }

    function listPaket3()
    {
        $this->db->from('v_list_paket3');
        $result = $this->db->get(); // Simpan hasil query ke variabel $result
        if ($result) {
            return $result->result(); // Ambil hasil jika query berhasil
        } else {
            return false; // Kembalikan FALSE jika query gagal
        }
    }
    function listbox25()
    {
        $this->db->from('v_list_box25');
        $result = $this->db->get(); // Simpan hasil query ke variabel $result
        if ($result) {
            return $result->result(); // Ambil hasil jika query berhasil
        } else {
            return false; // Kembalikan FALSE jika query gagal
        }
    }
    function listbox30()
    {
        $this->db->from('v_list_box30');
        $result = $this->db->get(); // Simpan hasil query ke variabel $result
        if ($result) {
            return $result->result(); // Ambil hasil jika query berhasil
        } else {
            return false; // Kembalikan FALSE jika query gagal
        }
    }
    function listbox35()
    {
        $this->db->from('v_list_box30');
        $result = $this->db->get(); // Simpan hasil query ke variabel $result
        if ($result) {
            return $result->result(); // Ambil hasil jika query berhasil
        } else {
            return false; // Kembalikan FALSE jika query gagal
        }
    }
    function listbox40()
    {
        $this->db->from('v_list_box40');
        $result = $this->db->get(); // Simpan hasil query ke variabel $result
        if ($result) {
            return $result->result(); // Ambil hasil jika query berhasil
        } else {
            return false; // Kembalikan FALSE jika query gagal
        }
    }
}
