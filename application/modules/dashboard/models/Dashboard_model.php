<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  public function getcountuser()
  {

    return  $this->db->count_all_results('user');
  }
  public function getcountbrg()
  {

    return  $this->db->count_all_results('tbl_produk');
  }
  public function getcountkat()
  {

    return  $this->db->count_all_results('tbl_kategori');
  }
}
