<?php
class Edit extends CI_Controller
{
    public function state()
    {
        $wh['location_id'] = $this->uri->segment(2);
        
        if($this->input->post('edit'))
        {
             $this->form_validation->set_rules('state', 'State Name', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required'=>'Please Enter State Name.','regex_match'=>'Please Enter  Valide State Name.')); 
			
            if ($this->form_validation->run() == TRUE)
            {
                //unique validation
                    $old = $data['editstate'][0]->name;
                    $new = $this->input->post('state');
                    
                    $sql = "SELECT COUNT(*) AS cc FROM `tbl_location` WHERE `name` != '".$old."' AND `name` = '".$new."' AND `label` = 'state'";
                    $count = $this->md->my_query($sql)[0]->cc;
                    
                    
                     if($count == 0)
                     {
                         $ins['name'] = $this->input->post('state');
                    
                         $result = $this->md->my_update('tbl_location',$ins,$wh);
                          if($result == 1)
                            {
                              redirect('manage-state');
                            }
                            else
                            {
                                $data['error'] = "Something Went Wrong.";
                            }

                     }
                     else
                     {
                         $data['error'] = "State Already Exist.";
                     }
            }
        }
        
        $data['editstate'] = $this->md->my_select('tbl_location','*',$wh);
        $data['state'] = $this->md->my_select('tbl_location','*',array('label'=>'state'));
        
        
        $this->load->view('admin/state',$data);
    }
    
    public function city() 
    {
        $wh['location_id'] = $this->uri->segment(2);
        
        if($this->input->post('edit'))
       {
          
          $this->form_validation->set_rules('city', 'city Name', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required'=>'Please Enter city Name.','regex_match'=>'Please Enter  Valide City Name.')); 
          
          if ($this->form_validation->run() == TRUE)
          {
              $old = $data['editcity'][0]->name;
              $new = $this->input->post('city');
                    
                    $sql = "SELECT s.`name` AS state , c.* FROM `tbl_location` AS s , `tbl_location` AS c WHERE s.`location_id` = c.`parent_id` AND c.`label` = 'city'";
                    $count = $this->md->my_query($sql)[0]->cc;
                    
                    
                     if($count == 0)
                     {
                         $ins['name'] = $this->input->post('city');
                    
                         $result = $this->md->my_update('tbl_location',$ins,$wh);
                          if($result == 1)
                            {
                              redirect('manage-City');
                            }
                            else
                            {
                                $data['error'] = "Something Went Wrong.";
                            }

                     }
                     else
                     {
                         $data['error'] = "State Already Exist.";
                     }

          }    
          
       }
        
        
        
        
        $data['editcity'] = $this->md->my_select('tbl_location','*',$wh);
        $data['state'] = $this->md->my_select('tbl_location', '*', array('label' => 'state'));
        $data['city'] = $this->md->my_query("SELECT s.`name` AS state , c.* FROM `tbl_location` AS s , `tbl_location` AS c WHERE s.`location_id` = c.`parent_id` AND c.`label` = 'city'");
       
        $this->load->view('admin/city',$data);
    
    }
    public function category()
    {
        $wh['category_id'] = $this->uri->segment(2);
        
        if($this->input->post('edit'))
        {
             $this->form_validation->set_rules('name', 'Category Name', 'required|regex_match[/^[a-zA-Z ]+$/]', array('required'=>'Please Enter Category Name.','regex_match'=>'Please Enter  Valide Category Name.')); 
			
            if ($this->form_validation->run() == TRUE)
            {
                
                //unique validation
                    $old = $data['editcategory'][0]->name;
                    $new = $this->input->post('name');
                    
                    $sql = "SELECT COUNT(*) AS cc FROM `tbl_category` WHERE `name` != '".$old."' AND `name` = '".$new."'";
                    $count = $this->md->my_query($sql)[0]->cc;
                    
                    
                     if($count == 0)
                     {
                         $ins['name'] = $this->input->post('name');
                    
                         $result = $this->md->my_update('tbl_category',$ins,$wh);
                          if($result == 1)
                            {
                              redirect('manage-main_in_category');
                            }
                            else
                            {
                                $data['error'] = "Something Went Wrong.";
                            }

                     }
                     else
                     {
                         $data['error'] = "Category Already Exist.";
                     }
            }
        }
        
        $data['editcategory'] = $this->md->my_select('tbl_category','*',$wh);
       $data['category'] = $this->md->my_select('tbl_category');
        
        
        $this->load->view('admin/main_in_category',$data);
    }
}
