<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('admin/head'); ?>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--== MAIN CONTRAINER ==-->
        <?php $this->load->view('admin/hedar'); ?>
        <!--== BODY CONTNAINER ==-->
        <div class="container-fluid sb2">
            <div class="row">
               <?php $this->load->view('admin/menu'); ?>
                <!--== BODY INNER CONTAINER ==-->
                <div class="sb2-2" style="min-height: 1000px;">
                    <!--== breadcrumbs ==-->
                    <div class="sb2-2-2">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>admin-dashboard"><img src="assert/images/icon/zr19.gif" alt=""> Home</a> </li>
                            <li class="active-bre"><a> Dashboard</a> </li>
                        </ul>
                    </div>
                    
                    <div class="tz-2 tz-2-admin" >
                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center;">Pages </h4>
                            <div class="tz-2-main-com bot-sp-20">
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr14.gif" alt=""><span>Contact US</span>
                                        <?php 
                                            $contact = count($this->md->my_select('tbl_contact_us'));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $contact; ?></h2> 
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr2.gif" alt=""><span>FeedBack</span>
                                        <?php 
                                            $feed = count($this->md->my_select('tbl_feedback'));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $feed; ?></h2> 
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/es.gif" alt=""><span>Email Subscriber</span>
                                         <?php 
                                            $email = count($this->md->my_select('tbl_email_subscriber'));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $email; ?></h2> 
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr16.gif" alt=""><span>Banner</span>
                                        <?php 
                                            $ban = count($this->md->my_select('tbl_banner'));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $ban; ?></h2>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tz-2 tz-2-admin" style="margin-top: 10px;">
                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center;">Manage Business</h4>
                            <div class="tz-2-main-com bot-sp-20">
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr11.gif" alt=""><span>All Business</span>
                                        <?php 
                                            $ab = count($this->md->my_select('tbl_business'));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $ab; ?></h2> 
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr10.gif" alt=""><span>Active Business</span>
                                        <?php 
                                            $aab = count($this->md->my_select('tbl_business'));
                                            $aaab = count($this->md->my_query("SELECT * FROM `tbl_business` WHERE status =1"));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $aaab; ?></h2>
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr12.gif" alt=""><span>Inactive Business</span>
                                        <?php 
                                            $ad = count($this->md->my_select('tbl_business'));
                                            $aad = count($this->md->my_query("SELECT * FROM `tbl_business` WHERE status =0"));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $aad; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tz-2 tz-2-admin" style="margin-top: 10px;">
                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center;">Member </h4>
                            <div class="tz-2-main-com bot-sp-20">
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr8.gif" scale="100%" alt=""><span>Active Member</span>
                                        <?php 
                                            $ma = count($this->md->my_select('tbl_register'));
                                            $maa = count($this->md->my_query("SELECT * FROM `tbl_register` WHERE status =1"));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $maa; ?></h2>
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr18.gif" alt=""><span>Inactive Member</span>
                                        <?php 
                                            $md = count($this->md->my_select('tbl_register'));
                                            $mdaa = count($this->md->my_query("SELECT * FROM `tbl_register` WHERE status =0"));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $mdaa; ?></h2>
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr13.gif" alt=""><span>All Member</span>
                                        <?php 
                                            $m = count($this->md->my_select('tbl_register'));
                                            
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $m; ?></h2> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tz-2 tz-2-admin" style="margin-top: 10px;">
                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center;">Location </h4>
                            <div class="tz-2-main-com bot-sp-20">
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr20.gif" alt=""><span>State</span>
                                        <?php 
                                            $st = count($this->md->my_select('tbl_location'));
                                            $sst = count($this->md->my_query("SELECT * FROM `tbl_location` WHERE `label` = 'state'"));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $sst; ?></h2> 
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr15.gif" alt=""><span>City</span>
                                        <?php 
                                            $ct = count($this->md->my_select('tbl_location'));
                                            $cct = count($this->md->my_query("SELECT * FROM `tbl_location` WHERE `label` = 'city'"));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $cct; ?></h2> 
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr17.gif" alt=""><span>Main Category</span>
                                        <?php 
                                            $ca = count($this->md->my_select('tbl_category'));
                                            
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $ca; ?></h2>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--SCRIPT FILES-->
            <?php $this->load->view('admin/footerscript'); ?>
    </body>

</html>