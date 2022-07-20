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
                                       <img class="img-circle" src="<?php echo base_url().$record[0]->profile_pic; ?>" alt="" id="blah" width="130px" />
                                    </div>
                                    <div class="col-md-10">
                                        <label><h3><?php echo $record[0]->name; ?></h3></label>
                                    </div>
                                    <div style="margin-top: 60px;">
                                         <a class="btn btn-primary" type="submit" href="<?php echo base_url(); ?>business-update-profile" name="btn_profile" value="">Edit Profile</a> 
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
                                                <td><label for="inputEmail13">Name </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->name; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Website </label></td>
                                                <td><b>:</b></td>
                                                <?php 
                                                    if(strlen($record[0]->website) == 0)
                                                    {
                                                ?>
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;">Not Specified</label></td>
                                                <?php
                                                    }   
                                                    else
                                                    {
                                                ?>
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->website; ?></label></td>
                                                <?php
                                                    }    
                                                ?>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Owner Name </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->owner_name; ?></label></td>
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
                                    <h4 style="text-align: center">Company Information</h4>    
                                </header>
                                <div class="panel-body">
                                    <table align="center">
                                        <?php 
                                            $cat = $record[0]->category_id;
                                            
                                            $data = $this->md->my_query("SELECT `name` FROM `tbl_category` WHERE `category_id` = $cat");
                                        ?>
                                            <tr>
                                                <td><label for="inputEmail13">Category </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $data[0]->name; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Open Closing Time </label></td>
                                                <td><b>:</b></td>
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->open_closing_time; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Week Day </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->weekday; ?></label></td>
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
                                    <h4 style="text-align: center">Company Overview Information</h4>    
                                </header>
                                <div class="panel-body">
                                    <table align="center">
                                        <?php 
                                            $cat = $record[0]->category_id;
                                            
                                            $data = $this->md->my_query("SELECT `name` FROM `tbl_category` WHERE `category_id` = $cat");
                                        ?>
                                            <tr>
                                                <td><label for="inputEmail13">Since </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->since; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Tag Line </label></td>
                                                <td><b>:</b></td>
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->tagline; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label style="margin-right: 10px;" for="inputEmail13">Description </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->description; ?></label></td>
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
                                    <h4 style="text-align: center">Location Information</h4>    
                                </header>
                                <div class="panel-body">
                                    <table align="center">
                                        <?php 
                                            $city = $record[0]->location_id;
                                            
                                            $data = $this->md->my_query("SELECT ct.`name` AS 'city' , s.`name` AS  'state' FROM `tbl_location` AS ct , `tbl_location` AS s WHERE  s.`location_id` = ct.`parent_id` AND ct.`location_id` = $city")[0];
                                        ?>
                                            <tr>
                                                <td><label for="inputEmail13">State </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $data->state; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">City </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $data->city; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Address </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->address; ?></label></td>
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
                                                <td><label for="inputEmail13">Email </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->email; ?></label></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Mobile No </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;"><?php echo $record[0]->contact_no; ?></label></td>
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
                <?php $this->load->view('business/footerscript'); ?>
        </div>
    </body>

</html>