<?php  
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    
    public function index()
    {
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password','required|min_length[3]');
        if($this->form_validation->run()==false){
            $data['title'] = 'Halaman Login';
            $this->load->view('auth/login.php', $data);
        }else{
            $this->login();
        }
        
    }

    public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user',['email' => $email])->row_array();
        if($user){
            if($email == $user['email']){
                if(password_verify($password, $user['password'])){

                    $data=[
                        'role_id'=>$user['role_id'],
                        'email'  =>$user['email']
                    ];
                    
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1){
                        redirect('admin');
                    }else if($user['role_id'] == 2){
                        redirect('member');
                    }else{
                        echo"anda siapa??";
                    }
                    
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('auth');
                }   
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User belum terdaftar!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]|matches[password1]');
        $this->form_validation->set_rules('password1', 'Repeat Password', 'required|min_length[3]|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/footer');
        }else{
            $data=[
                'role_id' => 2,
                'name' =>htmlspecialchars($this->input->post('name')),
                'email' =>htmlspecialchars($this->input->post('email')),
                'password' =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'is_active' => 1
            ];

            $this->db->insert('user',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been logout</div>');
        redirect('auth');
    }
}
