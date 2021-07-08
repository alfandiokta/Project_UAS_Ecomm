<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori_model extends CI_Model
{

  public function editkategoriId($id)
  {
    return $this->db->get_where('tbl_kategori', ['id' => $id])->row_array();
  }
}
