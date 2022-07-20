<?php $this->load->view('business/head'); ?>
<div class="sb2-1">
    <?php 
        $wh['business_id'] =$this->session->userdata('business');
        $record = $this->md->my_select('tbl_business','*',$wh);
        $path = $record[0]->profile_pic;
        $status = $this->md->my_select('tbl_business','*',$wh)[0]->status;
    ?>
                    <!--== USER INFO ==-->
                    <div class="sb2-12">
                        <ul  style="margin-top: 25px;">
                            <li><img src="<?php echo base_url().$path; ?>" alt=""> </li>
                            <li>
                                <h5><?php echo $record[0]->name; ?><span><br><i class="fa fa-clock-o" aria-hidden="true" ></i> &nbsp; <?php echo date('d-m-y h:i:s',strtotime($record[0]->last_login)); ?></span></h5> 
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <!--== LEFT MENU ==-->
                    <div class="sb2-13">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li><a href="<?php echo base_url(); ?>business-dashboard" class="menu-active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>
                            <li><a href="<?php echo base_url(); ?>business-profile" class="collapsible-header"><i class="fa fa-home" aria-hidden="true"></i>My Profile</a></li>
                            <?php 
                                if( $status == 1 )
                                {    
                            ?>
                            <li><a href="<?php echo base_url(); ?>business-gallery" class="collapsible-header"><i class="fa fa-image" aria-hidden="true"></i>My Gallery</a></li>
                            <li><a href="<?php echo base_url(); ?>business-review" class="collapsible-header"><i class="fa fa-comment-o" aria-hidden="true"></i>My review</a></li>
                            <li><a href="<?php echo base_url(); ?>business-inquery" class="collapsible-header"><i class="fa fa-question-circle" aria-hidden="true"></i>My inquery</a></li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </div>
                </div>