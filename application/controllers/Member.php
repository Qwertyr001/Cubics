<?php

class Member extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        
        date_default_timezone_set('Asia/Kolkata');
    }
    public function security() 
    {
        if (!$this->session->userdata('user')) 
        {
            redirect('login');
        }
    }
    
    public function logout() 
    {
        $wh['register_id'] = $this->session->userdata('user');
        $data['last_login'] = $this->session->userdata('user_lastlogin');
        
        $this->md->my_update('tbl_register',$data,$wh);
        
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('user_lastlogin');
        
        redirect('login');
    }
    public function dashboard() 
    {
        $this->security();
        
        $this->load->view('member/dashboard');
    }
    public function profile() 
    {   
        $this->security();
        
        $wh['register_id'] = $this->session->userdata('user');
        $data['record'] = $this->md->my_select('tbl_register','*',$wh);
        
        
        $this->load->view('member/profile',$data);
    }
    public function update_profile() 
    {   
        $this->security();
        
        $wh['register_id'] = $this->session->userdata('user');
        $data['record'] = $this->md->my_select('tbl_register','*',$wh);
            
        if($this->input->post('edit'))
        {
                $this->form_validation->set_rules('name', '', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required' => 'Please Enter Name.', 'regex_match' => 'Please Enter Valide Name.'));
                $this->form_validation->set_rules('mobile', '', 'required|regex_match[/^[0-9{10} ]+$/]', array('required' => 'Please Enter Mobile No.', 'regex_match' => 'Please Enter Valide Mobile No.'));
                $this->form_validation->set_rules('email', '', 'required|valid_email', array('required' => 'Please Enter Email.', 'valid_email' => 'Please Enter Valide Email.'));
                
                if($this->form_validation->run() == TRUE)
                {
                    $old_email = $data['record'][0]->email;
                    $new_email = $this->input->post('email');
                    
                    $count = $this->md->my_query("SELECT COUNT(*) AS cc FROM `tbl_register` WHERE `email` !='".$old_email."' AND `email` = '".$new_email."' ")[0]->cc;
                    
                    if( $count == 0 )
                    {
                        //profile
                        if(strlen($_FILES['profile']['name']) > 0 )
                        {
                            $config['upload_path']          = './member-assert/profile/';
                            $config['allowed_types']        = 'jpg|png|gif';
                            $config['max_size']             = 1024*4;
                            $config['file_name']            = "user_".time();
                            $config['encrypt_name']         = TRUE;
                            
                            $this->load->library('upload',$config);
                            if( $this->upload->do_upload('profile') )
                            {
                                // new photo update
                                 $ins['profile_pic'] = "member-assert/profile/".$this->upload->data('file_name');
                            }
                            else
                            {
                                $data['photo_err'] = $this->upload->display_errors();
                            }
                        }    
                        
                        $ins['name']  = $this->input->post('name');
                        $ins['mobile']  = $this->input->post('mobile');
                        $ins['email']  = $this->input->post('email');
                        $ins['birth_date']  = $this->input->post('birth_date');
                        $ins['gender']  = $this->input->post('gender');
                        
                        $result = $this->md->my_update('tbl_register',$ins,$wh);
                        
                        if( $result == 1 )
                        {
                            redirect('member-profile');
                        }    
                    }  
                    else
                    {
                        $data['email_err'] = "Email Already Register.";
                    }    
                }    

        } 
       
        
        $this->load->view('member/update_profile',$data);
    }
    public function review() 
    {   
       $this->security();
       $this->load->view('member/review');
    }
    public function follow() 
    {   
       $this->security();
       $this->load->view('member/follow');
    }
    
    public function change_password() 
    {
       $this->security();
        
        $data = array();
        
        if($this->input->post('btn_ps'))
        {
            $cps = $this->input->post('cps');
            
            $wh['register_id'] = $this->session->userdata('user');
            $ps = $this->encryption->decrypt($this->md->my_select('tbl_register','*',$wh)[0]->password);
            
            if($cps == $ps )
            {
                $this->form_validation->set_rules('nps','','required|min_length[8]|max_length[16]',array('required'=>"Please Enter New Passoword.",'min_length'=>'please Enter Minimum 8 Character.','max_length'=>'please Enter Maximum 16 Character.'));
                $this->form_validation->set_rules('cnps','','required|matches[nps]',array('required'=>"Please Enter Confirm Passoword.",'matches'=>"Password Dose Not Macth."));
                
                if($this->form_validation->run() == TRUE )
                {
                   $ins['password'] = $this->encryption->encrypt($this->input->post('nps'));
                   
                   $result = $this->md->my_update('tbl_register',$ins,$wh);
                   
                   if($result == 1 )
                   {
                      redirect('member-logout');
                   }
                }
            }
            else
            {
                $data['error'] = "Current Password Not Match.";
            }
        }
        $this->load->view('member/password',$data);
    }
    
    public function inquiry() 
    {
       $this->security();
       $this->load->view('member/inquiry');
    }
    
    
}
