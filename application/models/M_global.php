<?php
class M_global extends CI_Model
{
    private $table = "v_paket_combined";

    public function findAll()
    {
        $this->db->select('*');
        return $this->db->get($this->table)->result();
    }
}
