<?php $this->load->view('admin/head'); ?>
<div class="sb2-1">
    <?php 
        $wh['admin_id'] =$this->session->userdata('admin');
        $record = $this->md->my_select('tbl_admin_login','*',$wh);
        $path = $record[0]->profile_pic;
    ?>
                    <!--== USER INFO ==-->
                    <div class="sb2-12">
                        <ul>
                            <li><img src="<?php echo base_url().$path; ?>" alt=""> </li>
                            <li>
                                <h5>Cubics Panel <span><br><i class="fa fa-clock-o" aria-hidden="true" ></i> &nbsp; <?php echo date('d-m-y h:i:s',strtotime($record[0]->last_login)); ?></span></h5> 
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <!--== LEFT MENU ==-->
                    <div class="sb2-13">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li><a href="<?php echo base_url(); ?>admin-dashboard" class="menu-active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>
                            <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i> Pages</a>
                           
                                <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>manage-Contact-us">Contact Us</a> </li>
                                        <li><a href="<?php echo base_url(); ?>manage-Feedback">Feedback</a> </li>
                                        <li><a href="<?php echo base_url(); ?>manage-Email_subscriber">Email Subscriber</a> </li>
                                        <li><a href="<?php echo base_url(); ?>manage-banner">Banner</a> </li>
                                        <li><a href="<?php echo base_url(); ?>manage-member">Member</a> </li>
                                       
                                    </ul>
                                </div>
                            </li>
                             <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</a>
                                 <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>manage-state">State</a> </li>
                                        <li><a href="<?php echo base_url(); ?>manage-City">City</a> </li>
                                       
                                    </ul>
                                </div>
                             </li>
                             <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-sitemap" aria-hidden="true"></i>Category</a>
                                 <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>manage-main_in_category">Main Category</a> </li>
                                    </ul>
                                </div>
                             </li>
                             <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-building "aria-hidden="true"></i>Business</a>
                                 <div class="collapsible-body left-sub-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>manage-all-business">View All Business</a> </li>
                                        <li><a href="<?php echo base_url(); ?>manage-all-review">View All Review</a> </li>
                                    </ul>
                                </div>
                             </li>
                        </ul>
                    </div>
                </div>