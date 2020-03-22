<?php

class crud extends CI_Controller{
 
 function __construct(){
     parent::__construct();		
     $this->load->model('m_data');
     $this->load->helper('url');

 }

 function index(){
     $data['user'] = $this->m_data->tampil_data()->result();
     $this->load->view('view_crud',$data);
 }

 function tambah(){
     $this->load->view('view_crudinput');
 }

 function tambah_aksi(){
     $nama = $this->input->post('nama');
     $alamat = $this->input->post('alamat');
     $pekerjaan = $this->input->post('pekerjaan');
     $username = $this->input->post('username');
     $password = $this->input->post('password');

     $data = array(
         'nama' => $nama,
         'alamat' => $alamat,
         'pekerjaan' => $pekerjaan,
         'username' => $username,
         'password' => $password
         );
     $this->m_data->input_data($data,'user');
     redirect('crud/index');
 }

 function hapus($id){
     $where = array('id' => $id);
     $this->m_data->hapus_data($where,'user');
     redirect('crud/index');
 }
 function edit($id){
    $where = array('id' => $id);
    $data['user'] = $this->m_data->edit_data($where,'user')->result();
    $this->load->view('view_editcrud',$data);
}
function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$alamat = $this->input->post('alamat');
    $pekerjaan = $this->input->post('pekerjaan');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
 
	$data = array(
		'nama' => $nama,
		'alamat' => $alamat,
        'pekerjaan' => $pekerjaan,
        'username' => $username,
        'password' => $password
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
}
}