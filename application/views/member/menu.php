<?php $this->load->view('admin/head'); ?>
<?php
    $wh['register_id'] = $this->session->userdata('user');
    $record = $this->md->my_select('tbl_register','*',$wh)[0];
?>
<div class="sb2-1" style="margin-top: 25px;">
    
                    <!--== USER INFO ==-->
                    <div class="sb2-12">
                        <ul>
                            <?php 
                                if(strlen($record->profile_pic)>0)
                                {
                            ?>
                            <li><img src="<?php echo base_url().$record->profile_pic; ?>"  alt=""> </li>
                            <?php
                                }
                                else
                                {
                            ?>
                            <li><img src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg"  alt=""> </li>
                            <?php
                                }    
                            ?>
                            <li>
                                <h5><?php echo $record->name; ?><span><br><i class="fa fa-clock-o" aria-hidden="true" ></i> &nbsp; <?php echo date('d-m-Y h:i:s', strtotime($record->last_login)) ?> </span></h5> 
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <!--== LEFT MENU ==-->
                    <div class="sb2-13">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li><a href="<?php echo base_url(); ?>Member/dashboard" class="menu-active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>
                            <li><a href="<?php echo base_url(); ?>Member/profile" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>
                            <li><a href="<?php echo base_url(); ?>member-review" class="collapsible-header"><i class="fa fa-star" aria-hidden="true"></i>My Review</a></li>
                            <li><a href="<?php echo base_url(); ?>member-follow" class="collapsible-header"><i class="fa fa-heart" aria-hidden="true"></i>My Following</a></li>
                            <li><a href="<?php echo base_url(); ?>member-inquiry" class="collapsible-header"><i class="fa fa-question-circle" aria-hidden="true"></i>My Inquiry</a></li>
			    <li><a href="<?php echo base_url(); ?>pages" class="collapsible-header"><i class="fa fa-home" aria-hidden="true"></i>Return to Homepage</a></li>

                        </ul>    
                    </div>
                </div>