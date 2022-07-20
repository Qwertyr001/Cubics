<?php

class Authorize extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();

        date_default_timezone_set('Asia/Kolkata');
    }

    public function security() 
    {
        if (!$this->session->userdata('admin')) {
            redirect('admin-authentication');
        }
    }
    
    public function forget_password() 
    {
        $record = $this->md->my_select('tbl_admin_login','*');
        
        $ps = $this->encryption->decrypt($record[0]->password);
        
        $email = $record[0]->email;
        
        $config = Array(
            // check this user can login or not check
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'SR.raj7710@gmail.com', // change it to yours
            'smtp_pass' => 'Hell66##77@@10', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('SR.raj7710@gmail.com'); // change it to yours
        $this->email->to($email); // change it to yours
        $this->email->subject('Password Recover');
        
        $msg = '<b>Your Password : </b>'.$ps;
        
        $this->email->message($msg);
        if ($this->email->send()) 
        {
            redirect('admin-authentication/1');
        }
        
    }
    

    public function index() 
    {

        $data = array();

        if ($this->input->post('login')) 
        {
            $email = $this->input->post('email');

            $record = $this->md->my_select('tbl_admin_login', '*', array('email' => $email));
            $count = count($record);

            if ($count == 1) 
            {
                // passowrd verify
                $ops = $this->encryption->decrypt($record[0]->password);
                if ($this->input->post('password') == $ops) 
                {
                    if ($this->input->post('svp')) 
                    {
                        $expire = 60 * 60 * 24 * 2;

                        set_cookie('admin_email', $this->input->post('email'), $expire);
                        set_cookie('admin_password', $this->input->post('password'), $expire);
                    } 
                    else 
                    {
                        if ($this->input->cookie('admin_email', '', -10)) 
                         {
                            set_cookie('admin_email', '', -10);
                            set_cookie('admin_password', '', -10);
                        }
                    }

                    $this->session->set_userdata('admin', $record[0]->admin_id);
                    $this->session->set_userdata('admin_lastlogin', date('Y-m-d h:i:s'));

                    redirect('admin-dashboard');
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

        $this->load->view('admin/index',$data);
    }

    public function logout() 
    {
        $this->security();
        
        $wh['admin_id'] = $this->session->userdata('admin');
        $data['last_login'] = $this->session->userdata('admin_lastlogin');



        $this->md->my_update('tbl_admin_login', $data, $wh);

        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('admin_lastlogin');

        redirect('admin-authentication');
    }

    public function dashboard() 
    {

        $this->security();
        $this->load->view('admin/dashboard');
    }

    public function setting() 
    {
        $this->security();
        
        $data = array();
        
        if($this->input->post('btn_ps'))
        {
            $cps = $this->input->post('cps');
            
            $wh['admin_id'] = $this->session->userdata('admin');
            $ps = $this->encryption->decrypt($this->md->my_select('tbl_admin_login','*',$wh)[0]->password);
            
            if($cps == $ps )
            {
                $this->form_validation->set_rules('nps','','required|min_length[8]|max_length[16]',array('required'=>"Please Enter New Passoword.",'min_length'=>'please Enter Minimum 8 Character.','max_length'=>'please Enter Maximum 16 Character.'));
                $this->form_validation->set_rules('cnps','','required|matches[nps]',array('required'=>"Please Enter Confirm Passoword.",'matches'=>"Password Dose Not Macth."));
                
                if($this->form_validation->run() == TRUE )
                {
                   $ins['password'] = $this->encryption->encrypt($this->input->post('nps'));
                   
                   $result = $this->md->my_update('tbl_admin_login',$ins,$wh);
                   
                   if($result == 1 )
                   {
                       //delete Cookie
                       if($this->input->cookie('admin_email'))
                       {
                           set_cookie('admin_email', '', -10);
                           set_cookie('admin_password', '', -10);
                       }
                       
                       redirect('admin-logout');
                   }
                }
            }
            else
            {
                $data['error'] = "Current Password Not Match.";
            }
        }
        
        if($this->input->post('btn_profile'))
        {
            $config['upload_path']          = './admin-assert/images';
            $config['allowed_types']        = 'jpg|png|gif';
            $config['max_size']             = 1024*4;
            $config['file_name']             = "admin";
            $config['encrypt_name']             = TRUE;
            
            
            $this->load->library('upload',$config);
            
           
            
            if( $this->upload->do_upload('photo') )
            {
                // old photo remove
                $path = $this->md->my_select('tbl_admin_login','profile_pic',array('admin_id'=> $this->session->userdata('admin')))[0]->profile_pic;
                unlink("./".$path);
                
                // new photo update
                
                $ins['profile_pic'] = "admin-assert/images/".$this->upload->data('file_name');
                $wh['admin_id'] = $this->session->userdata('admin');
                
                $result = $this->md->my_update('tbl_admin_login',$ins,$wh);
                
                if($result == 1)
                {
                    $data['success'] = "Profile Change Successfully.";
                }
            }
            else
            {
                $data['photo_err'] = $this->upload->display_errors();
            }
        }
        
        
        $this->load->view('admin/setting',$data);
    }
    
    public function banner() 
    {
        $this->security();
        
       $data = array();
       
       if($this->input->post('add'))
       {
                $config['upload_path']          = './assert/banner/';
                $config['allowed_types']        = 'jpg|png|gif|mp4';
                $config['max_size']             = 1024*4;
                $config['file_name']             = "admin";
                $config['encrypt_name']             = TRUE;


                $this->load->library('upload',$config);



                if( $this->upload->do_upload('banner') )
                {
                    // new photo update

                    $ins['path'] = "assert/banner/".$this->upload->data('file_name');
                 

                    $result = $this->md->my_insert('tbl_banner',$ins);

                    if($result == 1)
                    {
                        $data['success'] = "Banner Added Successfully.";
                    }
                }
                else
                {
                    $data['photo_err'] = $this->upload->display_errors();
                }
       }
       
       $data['banner'] = $this->md->my_select('tbl_banner');
        
        $this->load->view('admin/Banner',$data);
    }

    public function Email_subscriber() 
    {
        $this->security();
        
        $data = array();
        
        if($this->input->post('send'))
        {
            $this->form_validation->set_rules('title','','required',array('required'=>"Please Enter E-Mail Subject."));
            $this->form_validation->set_rules('msg','','required',array('required'=>"Please Enter E-Mail Message."));
            
            if($this->form_validation->run() == TRUE)
            {
               if($this->input->post('email'))
               {
                  $title = $this->input->post('title');
                  $msg = $this->input->post('msg');
                  
                  $email = $this->input->post('email');
                  foreach ($email as $singel)
                  {
                      $result = $this->md->my_mailer($singel,$title,$msg);
                  }    
                  
                  if($result == 1)
                  {
                      $data['success'] = "Email Send Successfully.";
                  }    
                 
               }   
               else
               {
                    $data['error'] = "please Select Atleast One Receiver.";
               }
            }    
        }    
        
        $data['subscriber'] = $this->md->my_select('tbl_email_subscriber');
        
        $this->load->view('admin/Email_subscriber',$data);
    }

    public function feedback() 
    {
        $this->security();
        
        $data['feedback'] = $this->md->my_select('tbl_feedback', '*');
        $this->load->view('admin/Feedback', $data);
    }

    public function city() 
    {
        $this->security();
        
        $data = array();

        if ($this->input->post('add')) {
            $this->form_validation->set_rules('state', '', 'required', array('required' => 'Please Select State.'));
            $this->form_validation->set_rules('city', '', 'required|regex_match[/^[a-zA-Z]+$/]', array('required' => 'Please Enter City Name.', 'regex_match' => 'Please Enter Valid City Name.'));

            if ($this->form_validation->run() == TRUE) {
                $count = $this->md->my_query("SELECT COUNT(*) AS cc FROM `tbl_location` WHERE `name` = '" . $this->input->post('city') . "' AND `parent_id` =  '" . $this->input->post('state') . "'")[0]->cc;

                if ($count == 0) {
                    $ins['name'] = $this->input->post('city');
                    $ins['parent_id'] = $this->input->post('state');
                    $ins['label'] = 'city';

                    $result = $this->md->my_insert('tbl_location', $ins);

                    if ($result == 1) {
                        $data['success'] = "City Added Successfully.";
                    }
                } else {
                    $data['error'] = "City Already Exist.";
                }
            }
        }

        $data['state'] = $this->md->my_select('tbl_location', '*', array('label' => 'state'));
        $data['city'] = $this->md->my_query("SELECT s.`name` AS state , c.* FROM `tbl_location` AS s , `tbl_location` AS c WHERE s.`location_id` = c.`parent_id` AND c.`label` = 'city'");
        $this->load->view('admin/city', $data);
    }

    public function contact_us() 
    {
        $this->security();
        
        $data = array();

        $data['contactus'] = $this->md->my_select('tbl_contact_us', '*');
        $this->load->view('admin/contactus', $data);
    }

    public function main_in_category() 
    {
        $this->security();
        $data = array();
        
        if($this->input->post('add'))
        {
            $this->form_validation->set_rules('name','','required',array('required'=>'Please Enter Name.'));
            
            if($this->form_validation->run() == TRUE)
            {
                $config['upload_path']          = './assert/category/';
                $config['allowed_types']        = 'jpg|png|gif';
                $config['max_size']             = 1024*4;
                $config['file_name']            = "admin";
                $config['encrypt_name']         = TRUE;


                $this->load->library('upload',$config);



                if( $this->upload->do_upload('category') )
                {
                    // new photo update

                    $ins['path'] = "assert/category/".$this->upload->data('file_name');
                    $ins['name'] = $this->input->post('name');
                 

                    $result = $this->md->my_insert('tbl_category',$ins);

                    if($result == 1)
                    {
                        $data['success'] = "Category Added Successfully.";
                    }
                }
                else
                {
                    $data['photo_err'] = $this->upload->display_errors();
                }
            }    
        }   
            
        $data['category'] = $this->md->my_select('tbl_category');
        $this->load->view('admin/main_in_category',$data);
    }

    public function member() 
    {
        $this->security();
        
        $data['member'] = $this->md->my_select('tbl_register');
        $this->load->view('admin/member',$data);
    }
    
    public function all_business() 
    {
        $this->security();
        
        $data['business'] = $this->md->my_select('tbl_business');
        $data['state'] = $this->md->my_select('tbl_location', '*', array('label' => 'state'));
        $data['city'] = $this->md->my_select('tbl_location', '*', array('label' => 'city'));
       
        
        $this->load->view('admin/all_business',$data);
    }
    
    public function all_review() 
    {
        $this->security();
        
        $data['review'] = $this->md->my_select('tbl_review');
        
        $this->load->view('admin/all_review',$data);
    }

    public function state() 
    {
        $this->security();
        
        $data = array();
        if ($this->input->post('add')) {
            $this->form_validation->set_rules('state', 'State Name', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required' => 'Please Enter State Name.', 'regex_match' => 'Please Enter  Valide State Name.'));

            if ($this->form_validation->run() == TRUE) {
                //unique validation
                $sql = "SELECT COUNT(*) AS cc FROM `tbl_location` WHERE `name` = '" . $this->input->post('state') . "' AND `label` = 'state'";

                $count = $this->md->my_query($sql) [0]->cc;

                if ($count == 0) {
                    $ins['name'] = $this->input->post('state');
                    $ins['parent_id'] = 0;
                    $ins['label'] = 'state';

                    $result = $this->md->my_insert('tbl_location', $ins);
                    if ($result == 1) {
                        $data['success'] = "State Added Successfully.";
                    } else {
                        $data['error'] = "Something Went Wrong.";
                    }
                } else {
                    $data['error'] = "State Already Exist.";
                }
            }
        }

        $data['state'] = $this->md->my_select('tbl_location', '*', array('label' => 'state'));

        $this->load->view('admin/state', $data);
    }

    
    public function delete() 
    {
       // $this->security();
        
        $table = $this->uri->segment(2);
        $id = $this->uri->segment(3);
        
        if ($table == "contact_us") 
        {
            $wh['contact_id'] = $id;
            $this->md->my_delete('tbl_contact_us', $wh);
            redirect('manage-Contact-us');
        } else if ($table == "Feedback") 
        {
            $wh['feedback_id'] = $id;
            $this->md->my_delete('tbl_feedback', $wh);
            redirect('manage-Feedback');
        } 
         else if ($table == "city") 
        {
            $wh['location_id'] = $id;
            $this->md->my_delete('tbl_location', $wh);
            redirect('manage-City');
        }
        else if($table == "subscriber")
        {
            $wh['subscriber_id'] = $id;
            $this->md->my_delete('tbl_email_subscriber', $wh);
            redirect('manage-Email_subscriber');
        }
        else if ($table == "Banner") {
            $wh['banner_id'] = $id;
            $path = $this->md->my_select('tbl_banner','path',$wh)[0]->path;
            unlink("./".$path);
            
            $this->md->my_delete('tbl_banner', $wh);
            redirect('manage-banner');
        } 
        else if ($table == "state") 
        {
            $wh['location_id'] = $id;
            $this->md->my_delete('tbl_location', $wh);
            redirect('manage-state');
        }
        else if ($table == "category") 
        {
            $wh['category_id'] = $id;
            $path = $this->md->my_select('tbl_category','path',$wh)[0]->path;
            unlink("./".$path);
            
            $this->md->my_delete('tbl_category', $wh);
            redirect('manage-main_in_category');
        }
        else if ($table == "member") 
        {
            $wh['register_id'] = $id;
            $this->md->my_delete('tbl_register', $wh);
            redirect('manage-member');
        }
        else if ($table == "business") 
        {
            $wh['business_id'] = $id;
            $path = $this->md->my_select('tbl_business','profile_pic',$wh)[0]->profile_pic;
            unlink("./".$path);
            
            $this->md->my_delete('tbl_business', $wh);
            redirect('manage-all-business');
        }
        else if ($table == "follow") 
        {
            $wh['follow_id'] = $id;
            $this->md->my_delete('tbl_follow', $wh);
            redirect('member-follow');
        }
        else if ($table == "review") 
        {
            $wh['review_id'] = $id;
            $this->md->my_delete('tbl_review', $wh);
            redirect('manage-all-review');
        }
        else if ($table == "memberreview") 
        {
            $wh['review_id'] = $id;
            $this->md->my_delete('tbl_review', $wh);
            redirect('member-review');
        }
        else if ($table == "gallary") 
        {
            $wh['gallary_id'] = $id;
            $path = $this->md->my_select('tbl_gallary','path',$wh)[0]->path;
            unlink("./".$path);
            
            $this->md->my_delete('tbl_gallary', $wh);
            redirect('business-gallery');
        }
        else if ($table == "inquiry") 
        {
            $wh['inquiry_id'] = $id;
            $this->md->my_delete('tbl_inquiry', $wh);
            redirect('member-inquiry');
        }
    }

  
}
