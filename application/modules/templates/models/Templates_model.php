<?php
class Web_model extends CI_Model
{

  public function getkat()
  {
    return $this->db->get('tbl_kategori')->result_array();
  }
  public function getperkat($id)
  {
    $this->db->select('*');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->where('id', $id);
    return $this->db->get('tbl_produk')->result_array();
  }
  
}
