<?php
class User_model extends CI_Model
{

  public function getalluser()
  {
    $this->db->select('*');
    $this->db->order_by('id', 'desc');
    return $this->db->get('user')->result_array();
  }


  public function simpan_data()
  {
    $config['upload_path'] = './assets/images/';
    $config['allowed_types'] = 'jpg|png|gif|jpeg';
    $config['max_size'] = '2048000';
    // $config['max_width'] = '1024';
    // $config['max_height'] = '768';
    $config['file_name'] = url_title($this->input->post('img'));
    $filename = $this->upload->file_name;
    $this->upload->initialize($config);
    $this->upload->do_upload('img');
    $data = $this->upload->data();


    $data = array(
      'id' => "",
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'email' => htmlspecialchars($this->input->post('email', true)),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'img' => 'default.jpg',
      'role_id' => $this->input->post('role_id'),
      'date_created' => time()
    );
    $this->db->insert('user', $data);
    $this->session->set_flashdata('pesan', 'Ditambahkan');
    redirect('user');
  }
  public function edituserId($id)
  {
    $this->db->select('*');
    $this->db->from('user');
    return $this->db->get()->row_array();
  }
}
