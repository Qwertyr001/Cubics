<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('business/head'); ?>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--== MAIN CONTRAINER ==-->
        <?php $this->load->view('business/hedar'); ?>
        <!--== BODY CONTNAINER ==-->
        <div class="container-fluid sb2">
            <div class="row">
               <?php $this->load->view('business/menu'); ?>
                <!--== BODY INNER CONTAINER ==-->
                <div class="sb2-2" style="min-height: 1000px;">
                    <!--== breadcrumbs ==-->
                    <div class="sb2-2-2">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>business-dashboard"><img src="assert/images/icon/zr19.gif" alt=""> Home</a> </li>
                            <li class="active-bre"><a> Dashboard</a> </li>
                        </ul>
                    </div>
                    <div class="tz-2 tz-2-admin">
                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center">Manage </h4>
                            <div class="tz-2-main-com bot-sp-20">
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr21.gif" alt=""><span>All Gallery</span>
                                        <?php 
                                            $gal = count($this->md->my_select('tbl_gallary','*',array('business_id'=>$this->session->userdata( 'business' ))));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $gal; ?></h2> 
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr22.gif" alt=""><span>All Reviews</span>
                                        <?php 
                                            $re = count($this->md->my_select('tbl_review','*',array('business_id'=>$this->session->userdata( 'business' ))));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $re; ?></h2> 
                                    </div>
                                </div>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> <img src="<?php echo base_url(); ?>assert/images/icon/zr23.gif" alt=""><span>All Inquiry</span>
                                        <?php 
                                            $inq = count($this->md->my_select('tbl_inquiry','*',array('business_id'=>$this->session->userdata( 'business' ))));
                                        ?>
                                        <p>Cubics</p>
                                        <h2><?php echo $inq; ?></h2> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--SCRIPT FILES-->
            <?php $this->load->view('business/footerscript'); ?>
    </body>

</html>