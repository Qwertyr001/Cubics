<?php

class Business extends CI_Controller {

    public function __construct() {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
    }
    
     public function security() 
    {
        if (!$this->session->userdata('business')) {
            redirect('business-login');
        }
    }

    public function index() {
        $data = array();
        ;

        if ($this->input->post('add')) {
            $this->form_validation->set_rules('name', '', 'required|regex_match[/^[A-Za-z0-9 ]+$/]', array('required' => 'Please Enter Company Name.', 'regex_match' => 'Please Enter valid Company Name.'));
            $this->form_validation->set_rules('email', '', 'required|valid_email|is_unique[tbl_business.email]', array('required' => 'Please Enter Email .', 'valid_email' => 'Please Enter valid Email.', 'is_unique' => 'Email Already Register.'));
            $this->form_validation->set_rules('password', '', 'required|min_length[8]|max_length[16]', array('required' => 'Please Enter Password .', 'min_length' => 'Please Enter Password Between 8-16 Character.', 'max_length' => 'Please Enter Password Between 8-16 Character`.'));
            $this->form_validation->set_rules('cpassword', '', 'required|matches[password]', array('required' => 'Please Enter Confirm Password .', 'matches' => 'Password Does Not Match.'));
            $this->form_validation->set_rules('contact_no', '', 'required|numeric|max_length[11]',array('required'=>'Please Enter Mobile Number.','numeric'=>'Please Enter Valid Mobile Number','max_length'=>'Please Enter Valid Mobile Number'));
            $this->form_validation->set_rules('category', '', 'required', array('required' => 'Please Select Category .'));
         



            if ($this->form_validation->run() == TRUE) {
                $this->session->set_userdata('name', $this->input->post('name'));
                $this->session->set_userdata('email', $this->input->post('email'));
                $this->session->set_userdata('password', $this->input->post('password'));
                $this->session->set_userdata('contact_no', $this->input->post('contact_no'));
                $this->session->set_userdata('category', $this->input->post('category'));
                $this->session->set_userdata('website', $this->input->post('website'));

                redirect('business-register-2');
            }
        }
        $data['category'] = $this->md->my_select('tbl_category', '*');
        $this->load->view('business/index', $data);
    }

    public function business_register_2() {
        if (!$this->session->userdata('name')) {
            redirect('business-register-1');
        }

        if ($this->input->post('add')) {

            $this->form_validation->set_rules('state', '', 'required', array('required' => 'Please Select state .'));
            $this->form_validation->set_rules('city', '', 'required', array('required' => 'Please Select city .'));
            $this->form_validation->set_rules('address', '', 'required|min_length[10]', array('required' => 'Please Enter Address.', 'min_length' => 'Please Enter Minimum 10 Character. '));
            $this->form_validation->set_rules('tagline', '', 'required', array('required' => 'Please Enter Tag Line.'));
            $this->form_validation->set_rules('description', '', 'required|min_length[40]', array('required' => 'Please Enter depression.', 'min_length' => 'Please Enter Minimum 40 Character.'));
            $this->form_validation->set_rules('owner_name', '', 'required', array('required' => 'Please Enter Owner Name.'));
            $this->form_validation->set_rules('since', '', 'required', array('required' => 'Please Select Since.'));

            if ($this->form_validation->run() == TRUE) {
                $this->session->set_userdata('state', $this->input->post('state'));
                $this->session->set_userdata('city', $this->input->post('city'));
                $this->session->set_userdata('address', $this->input->post('address'));
                $this->session->set_userdata('tagline', $this->input->post('tagline'));
                $this->session->set_userdata('description', $this->input->post('description'));
                $this->session->set_userdata('owner_name', $this->input->post('owner_name'));
                $this->session->set_userdata('since', $this->input->post('since'));

                redirect('business-register-3');
            }
        }


        $data['state'] = $this->md->my_select('tbl_location', '*', array('label' => 'state'));
        $data['city'] = $this->md->my_select('tbl_location', '*', array('label' => 'city'));
        $this->load->view('business/business_register_2', $data);
    }

    public function business_register_3() {
        if (!$this->session->userdata('name') && !$this->session->userdata('state')) {
            redirect('business-register-1');
        } else if ($this->session->userdata('name') && !$this->session->userdata('state')) {
            redirect('business-register-2');
        }

        if ($this->input->post('add')) {
            $this->form_validation->set_rules('open_closing_time', '', 'required', array('required' => 'Please Enter open-closing-time .'));
            $this->form_validation->set_rules('day[]', '', 'required', array('required' => 'Please Check At Least One .'));
            $this->form_validation->set_rules('iframe', '', 'required', array('required' => 'Please Enter I-Frame .'));

            if ($this->form_validation->run() == TRUE) {
                $this->session->set_userdata('open_closing_time', $this->input->post('open_closing_time'));
                $this->session->set_userdata('day[]', $this->input->post('day[]'));
                $this->session->set_userdata('iframe', $this->input->post('iframe'));

                redirect('business-register-4');
            }
        }
        $this->load->view('business/business_register_3');
    }

    public function business_register_4() {
        $data = array();

        if (!$this->session->userdata('name') && !$this->session->userdata('state') && !$this->session->userdata('iframe')) {
            redirect('business-register-1');
        } else if ($this->session->userdata('name') && !$this->session->userdata('state') && !$this->session->userdata('iframe')) {
            redirect('business-register-2');
        } else if ($this->session->userdata('name') && $this->session->userdata('state') && !$this->session->userdata('iframe')) {
            redirect('business-register-3');
        }

        if ($this->input->post('add')) {
            if ($this->input->post('add')) {
                $config['upload_path'] = './business-assert/profile/';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = 1024 * 4;
                $config['file_name'] = "profile" . time();
                $config['encrypt_name'] = TRUE;


                $this->load->library('upload', $config);



                if ($this->upload->do_upload('profile')) {
                    $day = $this->session->userdata('day[]');
                    $sday = implode(",", $day);
                    // insert array
                    $ins['name'] = $this->session->userdata('name');
                    $ins['email'] = $this->session->userdata('email');
                    $ins['password'] = $this->encryption->encrypt($this->session->userdata('password'));
                    $ins['contact_no'] = $this->session->userdata('contact_no');
                    $ins['website'] = $this->session->userdata('website');
                    $ins['category_id'] = $this->session->userdata('category');
                    $ins['location_id'] = $this->session->userdata('city');
                    $ins['address'] = $this->session->userdata('address');
                    $ins['tagline'] = $this->session->userdata('tagline');
                    $ins['description'] = $this->session->userdata('description');
                    $ins['owner_name'] = $this->session->userdata('owner_name');
                    $ins['since'] = $this->session->userdata('since');
                    $ins['open_closing_time'] = $this->session->userdata('open_closing_time');
                    $ins['weekday'] = implode(",", $this->session->userdata("day[]"));
                    $ins['iframe'] = $this->session->userdata('iframe');
                    $ins['profile_pic'] = "business-assert/profile/" . $this->upload->data('file_name');
                    $ins['status'] = 0;

                    $result = $this->md->my_insert('tbl_business', $ins);

                    if ($result == 1) {
                        $this->session->unset_userdata('name');
                        $this->session->unset_userdata('email');
                        $this->session->unset_userdata('password');
                        $this->session->unset_userdata('contact_no');
                        $this->session->unset_userdata('website');
                        $this->session->unset_userdata('category');
                        $this->session->unset_userdata('city');
                        $this->session->unset_userdata('state');
                        $this->session->unset_userdata('address');
                        $this->session->unset_userdata('tagline');
                        $this->session->unset_userdata('description');
                        $this->session->unset_userdata('owner_name');
                        $this->session->unset_userdata('since');
                        $this->session->unset_userdata('open_closing_time');
                        $this->session->unset_userdata('iframe');
                        $this->session->unset_userdata('day[]');

                        $id = $this->md->my_query("SELECT MAX(`business_id`) AS mx FROM `tbl_business`")[0]->mx;

                        $this->session->set_userdata('business', $id);
                        $this->session->set_userdata('business_lastlogin', date('Y-m-d h:i:s'));

                        redirect('business-dashboard');
                    }
                } else {
                    $data['photo_err'] = $this->upload->display_errors();
                }
            }
        }

        $this->load->view('business/business_register_4', $data);
    }

    public function dashboard() 
    {
        $this->security();
        
        $this->load->view('business/dashboard');
    }
    
    public function profile() 
    {
        
        $wh['business_id'] = $this->session->userdata('business');
        $data['record'] = $this->md->my_select('tbl_business','*',$wh);
        
        $this->load->view('business/profile',$data);
    }
    
    public function update_profile() 
    {
        $this->security();
        
        $wh['business_id'] = $this->session->userdata('business');
        $data['record'] = $this->md->my_select('tbl_business','*',$wh);
        $data['category'] = $this->md->my_select('tbl_category', '*');
        $data['state'] = $this->md->my_select('tbl_location', '*', array('label' => 'state'));
        $data['city'] = $this->md->my_select('tbl_location', '*', array('label' => 'city'));
        
        
        if($this->input->post('edit'))
        {
            $this->form_validation->set_rules('name', '', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required' => 'Please Enter Name.', 'regex_match' => 'Please Enter Valide Name.'));
            $this->form_validation->set_rules('owner_name', '', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required' => 'Please Enter Email.','regex_match' => 'Please Enter Valide Owner Name.'));
            $this->form_validation->set_rules('category', '', 'required', array('required' => 'Please Select At Lest One.'));
            $this->form_validation->set_rules('open_closing_time', '', 'required', array('required' => 'Please Enter Open Closing Time.'));
            $this->form_validation->set_rules('day[]', '', 'required', array('required' => 'Please Select At Lest One.'));
            $this->form_validation->set_rules('since', '', 'required', array('required' => 'Please Select At Lest One.'));
            $this->form_validation->set_rules('tagline', '', 'required', array('required' => 'Please Enter Tag Line.'));
            $this->form_validation->set_rules('state', '', 'required', array('required' => 'Please Select State .'));
            $this->form_validation->set_rules('city', '', 'required', array('required' => 'Please Select City .'));
            $this->form_validation->set_rules('address', '', 'required|min_length[20]', array('required' => 'Please Enter Address.', 'min_length' => 'Please Enter Minimum 20 Character. '));
            $this->form_validation->set_rules('email', '', 'required|valid_email', array('required' => 'Please Enter Email .', 'valid_email' => 'Please Enter valid Email.'));
            $this->form_validation->set_rules('contact_no', '', 'required|max_length[11]', array('required' => 'Please Enter Mobile No .', 'max_length' => 'Please Enter Valid Mobile No.'));
            $this->form_validation->set_rules('description', '', 'required|min_length[40]', array('required' => 'Please Enter depression.', 'min_length' => 'Please Enter Minimum 40 Character.'));
            
            if($this->form_validation->run() == TRUE)
            {
                $old_email = $data['record'][0]->email;
                $new_email = $this->input->post('email');
                
                $count = $this->md->my_query("SELECT COUNT(*) AS cc FROM `tbl_business` WHERE `email` !='".$old_email."' AND `email` = '".$new_email."'  ")[0]->cc;
                
                if( $count == 0 )
                {
                   if(strlen($_FILES['profile']['name']))
                   {
                       $config['upload_path']          = './business-assert/profile/';
                            $config['allowed_types']        = 'jpg|png|gif';
                            $config['max_size']             = 1024*4;
                            $config['file_name']            = "user_".time();
                            $config['encrypt_name']         = TRUE;
                            
                            $this->load->library('upload',$config);
                            if( $this->upload->do_upload('profile') )
                            {
                                // new photo update
                                 $ins['profile_pic'] = "business-assert/profile/".$this->upload->data('file_name');
                            }
                            else
                            {
                                $data['photo_err'] = $this->upload->display_errors();
                            }
                   }    
                   
                            
                        $ins['name']  = $this->input->post('name');
                        $ins['website']  = $this->input->post('website');
                        $ins['owner_name']  = $this->input->post('owner_name');
                        $ins['category_id']  = $this->input->post('category');
                        $ins['open_closing_time']  = $this->input->post('open_closing_time');
                        $ins['weekday'] = implode(",", $this->input->post("day[]"));
                        $ins['since']  = $this->input->post('since');
                        $ins['location_id'] = $this->input->post('city');
                        $ins['address'] = $this->input->post('address');
                        $ins['email'] = $this->input->post('email');
                        $ins['contact_no'] = $this->input->post('contact_no');
                        $ins['description'] = $this->input->post('description');
                        
                        $result = $this->md->my_update('tbl_business',$ins,$wh);
                        
                        if( $result == 1 )
                        {
                            redirect('business-profile');
                        }    
                }   
                else
                {
                    $data['email_err'] = "Email Already Register.";
                }    
                
            }    
        }    
        
        $this->load->view('business/update_profile',$data);
    }

    public function logout() {
        $wh['business_id'] = $this->session->userdata('business');
        $data['last_login'] = $this->session->userdata('business_lastlogin');



        $this->md->my_update('tbl_business', $data, $wh);

        $this->session->unset_userdata('business');
        $this->session->unset_userdata('business_lastlogin');

        redirect('business-login');
    }

    public function business_login() 
    {
        $data = array();
        if ($this->input->post('login')) 
        {
            $email = $this->input->post('email');

            $record = $this->md->my_select('tbl_business', '*', array('email' => $email));
            $count = count($record);

            if ($count == 1) 
            {
                // passowrd verifay
                $ops = $this->encryption->decrypt($record[0]->password);
                if ($this->input->post('password') == $ops) 
                {
                    if ($this->input->post('svp')) 
                        {
                            $expire = 60 * 60 * 24 * 2;

                            set_cookie('business_email', $this->input->post('email'), $expire);
                            set_cookie('business_password', $this->input->post('password'), $expire);
                        } 
                        else 
                        {
                            if ($this->input->cookie('business_email', '', -10)) 
                             {
                                set_cookie('business_email', '', -10);
                                set_cookie('business_password', '', -10);
                            }
                        }

                    $this->session->set_userdata('business', $record[0]->business_id);
                    $this->session->set_userdata('business_lastlogin', date('Y-m-d h:i:s'));

                    redirect('business-dashboard');
                } 
                else 
                {
                    $data['error'] = "Invalid Email Or Password ! Try Again !";
                }
            } 
            else 
             {
                $data['error'] = "Invalid Email Or Password ! Try Again !";
            }
        }

        $this->load->view('business/business_login',$data);
    }
    public function change_password() 
    {
        $this->security();
        
        $data = array();
        
        if($this->input->post('btn_ps'))
        {
            $cps = $this->input->post('cps');
            
            $wh['business_id'] = $this->session->userdata('business');
            $ps = $this->encryption->decrypt($this->md->my_select('tbl_business','*',$wh)[0]->password);
            
            if($cps == $ps )
            {
                $this->form_validation->set_rules('nps','','required|min_length[8]|max_length[16]',array('required'=>"Please Enter New Passoword.",'min_length'=>'please Enter Minimum 8 Character.','max_length'=>'please Enter Maximum 16 Character.'));
                $this->form_validation->set_rules('cnps','','required|matches[nps]',array('required'=>"Please Enter Confirm Passoword.",'matches'=>"Password Dose Not Macth."));
                
                if($this->form_validation->run() == TRUE )
                {
                   $ins['password'] = $this->encryption->encrypt($this->input->post('nps'));
                   
                   $result = $this->md->my_update('tbl_business',$ins,$wh);
                   
                   if($result == 1 )
                   {
                      redirect('business-logout');
                   }
                }
            }
            else
            {
                $data['error'] = "Current Password Not Match.";
            }
        }
        
        $this->load->view('business/password',$data);
    }
    
    public function forgot_password() 
    {
       $data = array();
        
        if($this->input->post('send'))
        {
            $this->form_validation->set_rules('email', '', 'required|valid_email', array('required' => 'Please Enter Email.', 'valid_email' => 'Please Enter Valide Email.'));
            
            if($this->form_validation->run() == TRUE)
            {
                $wh['email'] = $this->input->post('email');
                $record = $this->md->my_select('tbl_business','*',$wh);
                $count = count($record);
                
                if($count ==  1)
                {
                    $ps = $this->encryption->decrypt($record[0]->password);
                    $name = $record[0]->name;
                    $email = $this->input->post('email');
                    
                    $msg = '<div style="width:80%;color:#fff;background: linear-gradient(#0485b3,#fff);padding: 20px;margin: auto;border:1px solid #000;">
                        <h1 style="text-align: center;text-transform:uppercase">C u b i c s </h1>
                        <p>
                            Hello '.$name.',
                            <Br/><Br/>
                            Your Cubics Business password is : <big style="color:#000"> ' . $ps . ' </big>
                        <hr />
                        <small>Team Cubics</small>  
                        Thanks.
                    </p></div>';
                    
                    $title = "Business Password Recover.";
                    
                    $result = $this->md->my_mailer($email,$title,$msg);
                    
                    if($result == 1)
                    {
                        
                        $data['success'] = "Your Password Is Send To Your Register Email.Check It Out.";
                    }    
                    else
                    {
                        $data['error'] = "Someting Want Worng.";
                    }    
                            
                   
                }    
                else
                {
                    $data['error'] = "This Email Is Not Register.";
                }    
                
            }    
        }    
        
        $this->load->view('business/forgot_password',$data);
    }
    public function gallery() 
    {
        $data = array();
        
        if($this->input->post('add'))
        {
            
                $config['upload_path']          = './business-assert/gallary/';
                $config['allowed_types']        = 'jpg|png|gif';
                $config['max_size']             = 1024*4;
                $config['file_name']            = "admin";
                $config['encrypt_name']         = TRUE;


                $this->load->library('upload',$config);



                if( $this->upload->do_upload('category') )
                {
                    // new photo update

                    $ins['path'] = "business-assert/gallary/".$this->upload->data('file_name');
                    $ins['business_id'] = $this->session->userdata('business');
                 

                    $result = $this->md->my_insert('tbl_gallary',$ins);

                    if($result == 1)
                    {
                        $data['success'] = "Photo Added Successfully.";
                    }
                }
                else
                {
                    $data['photo_err'] = $this->upload->display_errors();
                }
                
        }   
            
        $data['gallary'] = $this->md->my_select('tbl_gallary');
        
        $this->load->view('business/gallary',$data);
    }
    
    public function review() 
    {
        $this->security();
        $this->load->view('business/review');
    }
    
     public function inquery() 
    {
         $this->security();
        $this->load->view('business/inquery');
    }   
}
