<?php

class Pages extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        
        date_default_timezone_set('Asia/Kolkata');
    }

    public function index() 
    {
        $this->load->view('index');
    }

    public function aboutus() 
    {
        $this->load->view('about-us');
    }

    public function contactus() 
    {
        $data = array();
        if ($this->input->post('add')) 
        {
            $this->form_validation->set_rules('name', '', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required' => 'Please Enter Name.', 'regex_match' => 'Please Enter Valide Name.'));
            $this->form_validation->set_rules('mobile', '', 'required|min_length[8]|max_length[12]', array('required' => 'Please Enter Number.', 'max_length' => 'Please Enter 12 digit number.', 'min_length' => 'Please Enter 8 digit number'));
            $this->form_validation->set_rules('subject', '', 'required|max_length[25]|regex_match[/^[a-zA-Z ]+$/]', array('required' => 'Please Enter Subject.', 'regex_match' => 'Please Enter Valide Subject.', 'max_length' => 'Please Enter Maximum 25 Charactor Subject.'));
            $this->form_validation->set_rules('email', '', 'required|valid_email', array('required' => 'Please Enter Email.', 'valid_email' => 'Please Enter Valide Email.'));
            $this->form_validation->set_rules('message', '', 'required|min_length[20]', array('required' => 'Please Enter Message.', 'min_length' => 'Please Enter Minimum 20 Charactor Message.'));

            if ($this->form_validation->run() == TRUE) 
            {
                $ins['name'] = $this->input->post('name');
                $ins['mobile'] = $this->input->post('mobile');
                $ins['subject'] = $this->input->post('subject');
                $ins['email'] = $this->input->post('email');
                $ins['message'] = $this->input->post('message');


                $result = $this->md->my_insert('tbl_contact_us', $ins);
                if ($result == 1) 
                {
                    $data['success'] = "Your Message Sent Successfully.";
                } else 
                {
                    $data['error'] = "Something Went Wrong.";
                }
            }
        }
        $this->load->view('contact-us', $data);
    }

    public function faqs() 
    {
        $this->load->view('faqs');
    }

    public function feedback() 
    {
        $data = array();
        if ($this->input->post('add')) 
        {
            $this->form_validation->set_rules('name', '', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required' => 'Please Enter Name.', 'regex_match' => 'Please Enter Valide Name.'));
            $this->form_validation->set_rules('message', '', 'required|min_length[20]', array('required' => 'Please Enter Message.', 'min_length' => 'Please Enter Minimum 20 Charactor Message.'));

            if ($this->form_validation->run() == TRUE) 
            {
                $ins['name'] = $this->input->post('name');
                $ins['message'] = $this->input->post('message');

                $result = $this->md->my_insert('tbl_feedback', $ins);
                if ($result == 1) 
                {
                    $data['success'] = "Your Message Sent Successfully.";
                } else 
                {
                    $data['error'] = "Something Went Wrong.";
                }
            }
        }
        $this->load->view('feedback', $data);
    }

    public function forgotpass() 
    {
        $data = array();
        
        if($this->input->post('send'))
        {
            $this->form_validation->set_rules('email', '', 'required|valid_email', array('required' => 'Please Enter Email.', 'valid_email' => 'Please Enter Valide Email.'));
            
            if($this->form_validation->run() == TRUE)
            {
                $wh['email'] = $this->input->post('email');
                $record = $this->md->my_select('tbl_register','*',$wh);
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
                            Your Cubics Profile password is : <big style="color:#000"> ' . $ps . ' </big>
                        <hr />
                        <small>Team Cubics</small>  
                        Thanks.
                    </p></div>';
                    
                    $title = "Member Password Recover.";
                    
                    $result = $this->md->my_mailer($email,$title,$msg);
                    
                    if($result == 1)
                    {
                        $data['success'] = "Your Password Is Send To Your Register Email.Check It Out.";
                    }    
                    else
                    {
                        $data['error'] = "Someting Want Wrong.";
                    }    
                            
                   
                }    
                else
                {
                    $data['error'] = "This Email Is Not Register.";
                }    
                
            }    
        }    
        
        $this->load->view('forgot_pass',$data);
    }

    public function login() 
    {
        $data = array();
        
        if($this->input->post('login'))
         {
           
            $email = $this->input->post('email');

            $record = $this->md->my_select('tbl_register', '*', array('email' => $email));
            $count = count($record);

            if ($count == 1) 
            {
                // passowrd verifay
                $ops = $this->encryption->decrypt($record[0]->password);
                if ($this->input->post('ps') == $ops) 
                {
                    // status
                    if($record[0]->status == 1)
                    {
                        if ($this->input->post('svp')) 
                        {
                            $expire = 60 * 60 * 24 * 2;

                            set_cookie('user_email', $this->input->post('email'), $expire);
                            set_cookie('user_password', $this->input->post('ps'), $expire);
                        } 
                        else 
                        {
                            if ($this->input->cookie('user_email', '', -10)) 
                             {
                                set_cookie('user_email', '', -10);
                                set_cookie('user_password', '', -10);
                            }
                        }

                        $this->session->set_userdata('user', $record[0]->register_id);
                        $this->session->set_userdata('user_lastlogin', date('Y-m-d h:i:s'));

                        redirect('member-dashboard');
                    }    
                    else
                    {
                        $data['error'] = "Your Account Is Inactive. Please Contact Admin.";
                    }    
                    
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
        $this->load->view('login',$data);
    }

    public function register() 
    {
        $data = array();
        
        if($this->input->post('register'))
        {
             $this->form_validation->set_rules('name', '', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required' => 'Please Enter Name.', 'regex_match' => 'Please Enter Valide Name.'));
             $this->form_validation->set_rules('mobile', '', 'required|regex_match[/^[0-9{10} ]+$/]', array('required' => 'Please Enter Mobile No.', 'regex_match' => 'Please Enter Valide Mobile No.'));
             $this->form_validation->set_rules('email', '', 'required|valid_email|is_unique[tbl_register.email]', array('required' => 'Please Enter Email.', 'valid_email' => 'Please Enter Valide Email.','is_unique'=>'Email Already Register.'));
             $this->form_validation->set_rules('ps', '', 'required|min_length[8]|max_length[16]', array('required' => 'Please Enter Password.', 'min_length' => 'Please Enter Password Between 8-16 Character.','max_length'=>'Please Enter Password Between 8-16 Character.'));
             $this->form_validation->set_rules('cps', '', 'required|matches[ps]', array('required' => 'Please Enter Confirm Password.', 'matches' => 'Password Does Not Match.'));
             
             if($this->form_validation->run() == TRUE)
             { 
                 $ins['name'] = $this->input->post('name');
                 $ins['mobile'] = $this->input->post('mobile');
                 $ins['email'] = $this->input->post('email');
                 $ins['password'] = $this->encryption->encrypt($this->input->post('ps'));
                 $ins['join_date'] = date('Y-m-d');
                 $ins['status'] = 1;
                 
                 $result = $this->md->my_insert('tbl_register',$ins);
                 
                 if($result == 1)
                 {
                     $mx = $this->md->my_query("SELECT MAX(`register_id`) AS mx FROM `tbl_register`")[0]->mx;
                     
                     $this->session->set_userdata('user',$mx);
                     $this->session->set_userdata('user_lastlogin', date('Y-m-d h:i:s'));
                     
                     redirect('member-dashboard');
                 }    
             }    
        }    
        
        $this->load->view('register');
    }

    public function terms_and_condtion() 
    {
        $this->load->view('termsofuse');
    }
    
    public function view_business_details() 
    {
        if( $this->uri->segment(2) == "" )
        {
            redirect('view-business');
        }    
        
        $this->load->view('view_business_details');
    }
    public function view_business() 
    {
        $this->load->view('view_business');
    }

    /**
    public function mailer() 
    {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'cubics2022@gmail.com', // change it to yours
            'smtp_pass' => 'cubics@202021', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('cubics2022@gmail.com'); // change it to yours
        $this->email->to('savanidhruv660@gmail.com'); // change it to yours
        $this->email->subject('For Demo');
        
        $message = 'Hii ';
        $this->email->message($message);
        
        if ($this->email->send()) 
        {
            echo 'Email sent.';
        } else 
        {
            show_error($this->email->print_debugger());
        }

    }
    **/

}
