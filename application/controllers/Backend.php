<?php
class Backend extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    
    public function subscriber() 
    {
       $ins['email'] = $this->input->post('email');
       
      $count = count( $this->md->my_select('tbl_email_subscriber','*',$ins));
      
      if($count == 0)
      {
          echo $this->md->my_insert('tbl_email_subscriber',$ins);
          
      }    
      else
      {
          echo 2;
      }    
    }
    
    public function city()
    {
       $wh['parent_id'] = $this->input->post('id');
       $record = $this->md->my_select('tbl_location','*',$wh);
       echo '<option value="">Select City</option>';
       foreach($record as $data)
       {
?>
<option value="<?php echo $data->location_id ?>"><?php echo $data->name; ?></option>
<?php
       }    
    }
    
    public function change_status() 
    {
        $action = $this->input->post('action');
        $id = $this->input->post('id');
        
        if($action == "member")
        {
            $wh['register_id'] = $id;
            $status = $this->md->my_select('tbl_register','status',$wh)[0]->status;
            if($status == 1)
            {
                $data['status'] = 0;
            }   
            else
            {
                $data['status'] = 1;
            }    
            
            $this->md->my_update('tbl_register',$data,$wh);
            
        }
        else if($action == "business")
        {
            $wh['business_id'] = $id;
            $status = $this->md->my_select('tbl_business','status',$wh)[0]->status;
            if($status == 1)
            {
                $data['status'] = 0;
            }   
            else
            {
                $data['status'] = 1;
            }    
            
            $this->md->my_update('tbl_business',$data,$wh);
            
        }
        else if($action == "review")
        {
            $wh['review_id'] = $id;
            $status = $this->md->my_select('tbl_review','status',$wh)[0]->status;
            if($status == 1)
            {
                $data['status'] = 0;
            }   
            else
            {
                $data['status'] = 1;
            }    
            
            $this->md->my_update('tbl_review',$data,$wh);
            
        }

    }
    
    public function add_follow() 
    {
       $wh['business_id'] = $this->input->post('id');    
       $wh['register_id'] = $this->session->userdata('user');
       
       echo $this->md->my_insert('tbl_follow',$wh);
    }
    
    public function add_review() 
    {
       $ins['business_id'] = $this->input->post('id');    
       $ins['register_id'] = $this->session->userdata('user');
       $ins['rating'] = $this->input->post('rate');
       $ins['msg'] = $this->input->post('msg');
       $ins['date'] = date('Y-m-d h:i:s');
       $ins['status'] = 0;
    
       echo $this->md->my_insert('tbl_review',$ins);
       
    }
    
    public function add_inq() 
    {
       $ins['business_id'] = $this->input->post('id');    
       $ins['register_id'] = $this->session->userdata('user');
       $ins['name'] = $this->input->post('name');
       $ins['email'] = $this->input->post('email');
       $ins['title'] = $this->input->post('sub');
       $ins['message'] = $this->input->post('msg');
       
       echo $this->md->my_insert('tbl_inquiry',$ins);
       
    }
    
    public function view_more() 
    {
?>
                <div class="dir-alp-con-right">
            <?php
            $action = $this->input->post('action');
            $id = $this->input->post('id');
            $limit = $this->input->post('limit');
            if( $action == "category" )
            {
                $business = $this->md->my_query("SELECT * FROM `tbl_business` WHERE `status` = 1 AND `category_id` = $id LIMIT 0,$limit");
            }
            else if( $action == "search" )
            {
                $value = $id;
                $search = str_replace("%20", " ", $value);
                $business = $this->md->my_query("SELECT b.* FROM `tbl_business` AS b , `tbl_category` AS c WHERE ( b.`status` = 1 AND b.`category_id` = c.`category_id` ) AND ( b.`name` LIKE '%".$search."%'  OR c.`name` = '%".$search."%' ) LIMIT 0,$limit;");
            }
            else 
            {
                $business = $this->md->my_query("SELECT * FROM `tbl_business` WHERE `status` = 1 LIMIT 0,$limit");
            }
            $count = count($business);
        ?>
        <?php 
            if( $count == 0 )
            {
        ?>
        <div style="padding: 100px;text-align: center;">
            <h1 style="color: #f6f6f6;">Business Not Found.</h1>
        </div>
        <?php
            }   
            else
            {
                foreach( $business as $data )
                {
            ?>
                <div class="row">
                        <!--LISTINGS-->
                        <div class="home-list-pop list-spac">
                                <!--LISTINGS IMAGE-->
                                <div class="col-md-3 list-ser-img"> 
                                    <img src="<?php echo base_url().$data->profile_pic; ?>" alt="" /> 
                                </div>
                                <!--LISTINGS: CONTENT-->
                                <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> 
                                    <a href="<?php echo base_url(); ?>view-business-details/<?php echo $data->business_id; ?>">
                                        <h3><?php echo $data->name; ?></h3>
                                    </a>
                                        <h4>
                                            <?php 
                                                $city = $data->location_id;
                                                $ctt = $this->md->my_query("SELECT ct.`name` AS 'city' , s.`name` AS  'state' FROM `tbl_location` AS ct , `tbl_location` AS s WHERE  s.`location_id` = ct.`parent_id` AND ct.`location_id` = $city")[0];

                                            ?>
                                            <?php echo $ctt->city; ?> , <?php echo $ctt->state; ?>
                                        </h4>
                                        <p><b>Address:</b> <?php echo $data->address; ?></p>
                                        <div class="list-number">
                                                <ul>
                                                        <li><img src="<?php echo base_url(); ?>assert/images/icon/phone.png" alt=""><?php echo $data->contact_no; ?></li>
                                                        <li><img src="<?php echo base_url(); ?>assert/images/icon/mail.png" alt=""><?php echo $data->email; ?></li>
                                                </ul>
                                        </div> 
                                        <span class="home-list-pop-rat">
                                            <?php 
                                                $totalrate = $this->md->my_query("SELECT SUM(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=".$data->business_id)[0]->rate;
                                                $totalrecord = $this->md->my_query("SELECT COUNT(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=".$data->business_id)[0]->rate;
                                                    if( $totalrate == "" )
                                                    {
                                                        $avg = 0;
                                                    }   
                                                    else
                                                    {   
                                                        $avg = round($totalrate/$totalrecord);
                                                    }

                                            ?>
                                            <i class="fa fa-star"></i> <?php echo $avg; ?>
                                        </span>
                                        <div class="list-enqu-btn">
                                                <ul>
                                                    <li class="right"><a href="<?php echo base_url(); ?>view-business-details/<?php echo $data->business_id; ?>"><i class="" aria-hidden="true"></i> View Detail</a> </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                        
                        <!--LISTINGS END-->
                </div>
                    
            <?php
                }
            }
            
        ?>
</div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <?php 
                $limit = $limit + 3;
            ?>
            <div onclick="view_more('<?php echo $action; ?>','<?php echo $id; ?>',<?php echo $limit; ?>)" style="background: #0485b3;padding: 10px;cursor: pointer;">
                <p style="color: #FFF;text-align: center;">View More Business</p>
            </div>
        </div>
    </div>
<?php
    }
}