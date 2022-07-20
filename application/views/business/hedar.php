<?php 
        $wh['business_id'] =$this->session->userdata('business');
        $record = $this->md->my_select('tbl_business','*',$wh);
        $path = $record[0]->profile_pic;
        $status = $this->md->my_select('tbl_business','*',$wh)[0]->status;
        
?>
<div class="container-fluid sb1" >
        <div class="row">
                <!--== LOGO ==-->
                <div class="col-md-2 col-sm-3 col-xs-6 sb1-1"> 
                    <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a> 
                    <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url(); ?>Pages" class="logo">
                        <img src="<?php echo base_url(); ?>assert/images/1.png" alt="" style="margin-left: 10px; width: 130px !important" /> 
                    </a>
                </div>
                <div class="col-md-5"></div>
                <!--== MY ACCCOUNT ==-->
                <div class="col-md-5 col-sm-3 col-xs-6">
                    <!-- Dropdown Trigger -->
                    <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu' style="margin-top: 10px;"><img src="<?php echo base_url().$path; ?>" alt=""  /><?php echo $record[0]->name; ?> <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                        <?php
                            if($status == 0)
                            {    
                        ?>
                    <div style="float: left;width: 200px;padding-right: 20px;color: red;margin-top: 25px;font-size: small;">
                        <marquee>Currently This Account is Not Verified.You can Contact Admin. </marquee>
                    </div>
                        <?php
                            }
                        ?>
                    
                    <!-- Dropdown Structure -->
                    <ul id='top-menu' class='dropdown-content top-menu-sty'>
                        <li><a href="<?php echo base_url();?>business-change-password" class="waves-effect"><img src="assert/images/icon/small icon/zrrr1.gif" alt="">Change Password</a> </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('business-logout'); ?>" class="ho-dr-con-last waves-effect"><img src="assert/images/icon/small icon/zrrr2.gif" alt=""> Logout</a> </li>
                    </ul>
                </div>
            </div>
        </div>