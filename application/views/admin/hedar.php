<?php 
        $wh['admin_id'] =$this->session->userdata('admin');
        $record = $this->md->my_select('tbl_admin_login','*',$wh);
        $path = $record[0]->profile_pic;
    ?>   

<div class="container-fluid sb1" >
        <div class="row" style="margin-top: -7px; ">
                <!--== LOGO ==-->
                <div class="col-md-2 col-sm-3 col-xs-6 sb1-1"> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a> <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url(); ?>Pages" class="logo"><img src="<?php echo base_url(); ?>assert/images/1.png" alt="" style="margin-left: 10px; width: 130px;" /> </a>
                </div>
                <!--== MY ACCCOUNT ==-->
                <div class="col-md-2 col-sm-3 col-xs-6 col-md-offset-8">
                    <!-- Dropdown Trigger -->
                    <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu' style="margin-top: 10px;"><img src="<?php echo base_url().$path; ?>" alt="" />Admin Panel <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                    <!-- Dropdown Structure -->
                    <ul id='top-menu' class='dropdown-content top-menu-sty'>
                        <li><a href="<?php echo base_url();?>admin-setting" class="waves-effect"><img src="assert/images/icon/small icon/zrrr1.gif" alt="">Admin Setting</a> </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('admin-logout'); ?>" class="ho-dr-con-last waves-effect"><img src="assert/images/icon/small icon/zrrr2.gif" alt=""> Logout</a> </li>
                    </ul>
                </div>
            </div>
        </div>

