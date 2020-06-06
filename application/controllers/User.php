<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function profile()
    {
        $data['title'] = 'My Profile';
        $session = $this->session->userdata();
        $data['error'] = '';
        $data['user'] = $this->db->get_where('user',['email' => $session['email']])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/profile',$data);
        $this->load->view('templates/footer');
    }

    public function editProfile()
    {
        $name = $this->input->post('name');
        $email = $this->session->userdata('email');
    
        $upload_image = $_FILES['gambar']['name'];

        if($upload_image){
            $config['upload_path'] = '././assets/img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '300';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambar')){
               $newImage = $this->upload->data('file_name');
               $this->db->set('gambar', $newImage); 
            }else{
               
                $error = ['error' => $this->upload->display_errors()];

                $this->session->set_flashdata('upload_error', '<div class="alert alert-danger" role="alert">'.$error['error'].'</div>');
            }
        }

        $this->db->set('name',$name);
        $this->db->where('email',$email);
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Profile Succesfully</div>');
        redirect('user/profile');

    }
}
