<?php
    $wh['register_id'] = $this->session->userdata('user');
    $record = $this->md->my_select('tbl_register','*',$wh)[0];
?>
<div class="container-fluid sb1" >
        <div class="row" >
                <!--== LOGO ==-->
                <div class="col-md-1 col-sm-3 col-xs-6 sb1-1"> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a> <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url(); ?>Pages" class="logo"><img src="<?php echo base_url(); ?>assert/images/1.png" alt="" style="margin-left: 10px; width: 130px;" /> </a>
                </div>
                <!--== MY ACCCOUNT ==-->
                <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-8">
                    <!-- Dropdown Trigger -->
                    <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu' style="margin-top: 10px;">
                        <?php 
                                if(strlen($record->profile_pic)>0)
                                {
                            ?>
                        <img src="<?php echo base_url().$record->profile_pic; ?>"  style="width: 30px;" alt=""> 
                            <?php
                                }
                                else
                                {
                            ?>
                            <img src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg"  alt=""> 
                            <?php
                                }    
                            ?>

                        <?php echo $record->name; ?> <i class="fa fa-angle-down" aria-hidden="true"></i> </a>;
                    <!-- Dropdown Structure -->
                    <ul id='top-menu' class='dropdown-content top-menu-sty'>
                        <li><a href="<?php echo base_url();?>member-change-password" class="waves-effect"><img src="assert/images/icon/small icon/zrrr1.gif" alt="">Change Password</a> </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url(); ?>member-logout" class="ho-dr-con-last waves-effect"><img src="assert/images/icon/small icon/zrrr2.gif" alt=""> Logout</a> </li>
                    </ul>
                </div>
            </div>
        </div>

