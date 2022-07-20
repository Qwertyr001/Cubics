<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('member/head'); ?>


    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--== MAIN CONTRAINER ==-->
        <?php $this->load->view('member/hedar'); ?>
        <!--== BODY CONTNAINER ==-->
        <div class="container-fluid sb2">
            <div class="row">
                <?php $this->load->view('member/menu'); ?>
                <!--== BODY INNER CONTAINER ==-->
                <div class="sb2-2" style="min-height: 1000px;">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="tz-2 tz-2-admin ">
                                <header class="tz-2-com tz-2-main">
                                    <div class="panel-action">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    </div>
                                    <h4 style="text-align: center">Change Profile</h4>    
                                </header>
                                <div class="panel-body">
                                    <div class="col-md-2">
                                        <?php 
                                            if(strlen($record[0]->profile_pic) >0 )
                                            {
                                        ?>
                                        <img class="img-circle" src="<?php echo base_url().$record[0]->profile_pic; ?>" alt="" id="blah" width="130px" />
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                        <img class="img-circle" src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg" alt="" id="blah" width="130px" />
                                        <?php
                                            }    
                                        ?>
                                    </div>
                                    <div class="col-md-10">
                                        <label><h3><?php echo $record[0]->name; ?></h3></label>
                                    </div>
                                    <div style="margin-top: 60px;">
                                         <a class="btn btn-primary" type="submit" href="<?php echo base_url(); ?>member-update-profile" name="btn_profile" value="">Edit Profile</a> 
                                    </div>    
                                </div>
                            </section>
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <section class="tz-2 tz-2-admin ">
                                <header class="tz-2-com tz-2-main">
                                    <div class="panel-action">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    </div>
                                    <h4 style="text-align: center">Basic Information</h4>    
                                </header>
                                <div class="panel-body">
                                    <table align="center">
                                            <tr>
                                                <td><label style="margin-bottom: 20px;" for="inputEmail13">Name </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 10px;"><?php echo $record[0]->name; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label style="margin-bottom: 20px;" for="inputEmail13">DOB </label></td>
                                                <td><b>:</b></td>
                                                <?php 
                                                    if($record[0]->birth_date == "0000-00-00")
                                                    {
                                                ?>
                                                <td><label style="margin-left: 10px;">Not Specified</label></td>
                                                <?php
                                                    }   
                                                    else
                                                    {
                                                ?>
                                                <td><label style="margin-left: 10px;"><?php echo date('d-m-Y', strtotime($record[0]->birth_date)); ?></label></td>
                                                <?php
                                                    }    
                                                ?>
                                            </tr>
                                        <tr>
                                                <td><label style="margin-bottom: 20px;" for="inputEmail13">Gender </label></td>
                                                <td><b>:</b></td>   
                                                <?php 
                                                    if(strlen($record[0]->gender) == 0)
                                                    {
                                                ?>
                                                <td><label style="margin-left: 10px;">Not Specified</label></td>
                                                <?php
                                                    }   
                                                    else
                                                    {
                                                ?>
                                                <td style="text-transform: uppercase;" ><label style="margin-left: 10px;"><?php echo $record[0]->gender; ?></label></td>
                                                <?php
                                                    }    
                                                ?>
                                            </tr>
                                    </table>
                                </div>
                            </section>
                        </div>
                            <div style="margin-top: 10px;" class="col-md-6">
                            <section class="tz-2 tz-2-admin ">
                                <header class="tz-2-com tz-2-main">
                                    <div class="panel-action">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    </div>
                                    <h4 style="text-align: center">Contact Information</h4>    
                                </header>
                                <div class="panel-body">
                                    <table align="center">
                                            <tr>
                                                <td><label style="margin-bottom: 20px;" for="inputEmail13">Email </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 10px;"><?php echo $record[0]->email; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label style="margin-bottom: 20px;" for="inputEmail13">Mobile No </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 10px;"><?php echo $record[0]->mobile; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label style="margin-bottom: 20px;" for="inputEmail13">Join Date </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 10px;"><?php echo date('d-m-Y', strtotime($record[0]->join_date)); ?></label></td>
                                            </tr>
                                    </table>
                                </div>
                            </section>
                        </div>

                        </div>
                        
                    </div>
                </div>
            </div>
            <!--SCRIPT FILES-->
                <?php $this->load->view('member/footerscript'); ?>
        </div>
    </body>

</html>