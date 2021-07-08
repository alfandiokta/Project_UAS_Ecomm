<?php
class Web_model extends CI_Model
{

  public function getprod()
  {
    $this->db->select('*');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->order_by('id_produk', 'desc');
    $this->db->limit('4');
    return $this->db->get('tbl_produk')->result_array();
  }
  public function getprodall()
  {
    $this->db->select('*');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->order_by('id_produk', 'desc');
    return $this->db->get('tbl_produk')->result_array();
  }
  public function prodId($id)
  {
    return $this->db->get_where('tbl_produk', ['id_produk' => $id])->row_array();
  }
  public function getsimilarprod()
  {
    // $model_name = array('nama_produk' => 'Laptop');
    $sql = 'SELECT tbl_produk.*
        FROM tbl_produk
        JOIN tbl_kategori ON  tbl_kategori.id = tbl_produk.kategori
        WHERE tbl_kategori.id != ' . $this->db->escape('nama_produk');
    return $this->db->query($sql)->result_array(static::class); //return related products arra
  }
  public function detail_prod($id)
  {
    $this->db->select('*');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->where('id_produk', $id);
    return $this->db->get('tbl_produk')->row_array();
  }
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
  public function tambah_pelanggan($data)
  {
    $this->db->insert('tbl_pelanggan', $data);
    $id = $this->db->insert_id();
    return (isset($id)) ? $id : FALSE;
  }

  public function tambah_order($data)
  {
    $this->db->insert('tbl_order', $data);
    $id = $this->db->insert_id();
    return (isset($id)) ? $id : FALSE;
  }

  public function tambah_detail_order($data)
  {
    $this->db->insert('tbl_detail_order', $data);
  }
  public function datamitra($id)
  {
    $this->db->select('*');
    $this->db->from('user');
    
    return $this->db->get()->row_array();
  }
  public function simpan_data()
  {
    $config['upload_path'] = './assets/images/';
    $config['allowed_types'] = 'jpg|png|gif|jpeg';
    $config['max_size'] = '2048000';
    // $config['max_width'] = '1024';
    // $config['max_height'] = '768';
    $config['file_name'] = url_title($this->input->post('foto_idn'));
    $filename = $this->upload->file_name;
    $this->upload->initialize($config);
    $this->upload->do_upload('foto_idn');
    $data = $this->upload->data();

    $config['upload_path'] = './assets/images/';
    $config['allowed_types'] = 'jpg|png|gif|jpeg';
    $config['max_size'] = '2048000';
    // $config['max_width'] = '1024';
    // $config['max_height'] = '768';
    $config['file_name'] = url_title($this->input->post('foto'));
    $filename = $this->upload->file_name;
    $this->upload->initialize($config);
    $this->upload->do_upload('foto');
    $data = $this->upload->data();



    $data = array(
      'id'=> "",
      'nama'=> $this->input->post('nama'),
      'alamat'=> $this->input->post('alamat'),
      'telp'=> $this->input->post('telp'),
      'email'=> $this->input->post('email'),
      'provinsi'=> $this->input->post('provinsi'),
      'kota'=> $this->input->post('kota'),
      'foto_idn'=> $data['file_name'],
      'foto'=> $data['file_name']
    );
    $this->db->insert('tbl_pengrajin', $data);
    $this->session->set_flashdata('pesan', 'Ditambahkan');
    redirect('website/pengrajin');
  }
  public function getmitra()
  {
    $this->db->select('*');
    $this->db->order_by('id', 'desc');
    return $this->db->get('tbl_pengrajin')->result_array();
  }
}
