<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('member/head'); ?>
    <style>
            div.solid {border-style: solid; opacity:0.8}
            .error-msg
            {
                color: red;
                font-size: 13px;
            }
            .error-msg + p
            {
                color: red;
                font-size: 13px;
            }
            
        </style>

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
                    <!--== breadcrumbs ==-->
                    <div class="sb2-2-2">
                        <ul>
                            <li>
                                <a href="<?php echo base_url('member-dashboard'); ?>">
                                    <img src="assert/images/icon/zr19.gif" alt=""> Home
                                </a> 
                            </li>
			    <li class="active-bre"><a>My Profile</a></li>
                            <li class="active-bre"><a>Setting</a></li>
                        </ul>
                    </div>

                    <!--Setting start -->
                    <div class="row">
                        <form method="post" action="" name="edit" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <section class="tz-2 tz-2-admin ">
                                <header class="tz-2-com tz-2-main">
                                    <div class="panel-action">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    </div>
                                    <h4 style="text-align: center">Edit Profile</h4>    
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
                                        <?php 
                                            if (isset($photo_err)) 
                                            {
                                        ?>
                                            <br><br>
                                            <div class="alert alert-danger alert-dismissable" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong>Oops !</strong> <?php echo $photo_err; ?>
                                            </div>
                                        <?php
                                            }
                                            if (isset($success)) 
                                            {
                                        ?>
                                            <br><br>
                                            <div class="alert alert-success alert-dismissable" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                            <strong>OK !</strong> <?php echo $success; ?>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="col-md-10">
                                        <input id="imgInp" type="file" name="profile" style="border: 1px solid black;padding: 5px;margin-top: 15px;margin-left: -12px; ">
                                    </div>
                                    <div style="margin-top: 60px;">
                                        <input class="btn btn-primary" type="submit" name="edit" value="Save">
                                        <a class="btn btn-primary" href="<?php echo base_url('member-profile'); ?>" value="">Cancel</a>
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
                                <div class="panel-body pa">
                                    <table align="center" >
                                            <tr>
                                                <td style="vertical-align: middle"><label for="inputEmail13">Name </label></td>
                                                <td><b>:</b></td>   
                                                <td><input style="margin-top: 10px;margin-left: 10px;" type="text" value="<?php 
                                                    if(!isset($success) && set_value('name'))
                                                    {
                                                        echo set_value('name');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->name;
                                                    }    
                                                ?>" name="name" class="form-control" placeholder="Name">
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('name');
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td><label for="inputEmail13">DOB </label></td>
                                                <td><b>:</b></td>
                                                <td><input style="margin-top: 10px;margin-left: 10px;" type="date" name="birth_date" class="form-control" value="<?php 
                                                    if(!isset($success) && set_value('birth_date'))
                                                    {
                                                        echo set_value('birth_date');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->birth_date;
                                                    }    
                                                ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Gender </label></td>
                                                <td><b>:</b></td>
                                                <td>
                                                    <select style="margin-top: 10px;margin-left: 10px;"  name="gender" class="form-control">
                                                        <option value="">Select Gender</option>
                                                        <option <?php 
                                                           if( !isset($success) && set_select('gender', 'Male') )
                                                           {
                                                               echo set_select('gender', 'Male');
                                                           }
                                                           else
                                                           {
                                                               if( $record[0]->gender == 'Male' )
                                                               {
                                                                   echo "selected";
                                                               }    
                                                           }    
                                                        ?> >Male</option>
                                                        <option <?php 
                                                           if( !isset($success) && set_select('gender', 'Female') )
                                                           {
                                                               echo set_select('gender', 'Female');
                                                           }
                                                           else
                                                           {
                                                               if( $record[0]->gender == 'Female' )
                                                               {
                                                                   echo "selected";
                                                               }    
                                                           }    
                                                        ?> >Female</option>
                                                    </select>
                                                </td>
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
                                                <td style="vertical-align: middle"><label for="inputEmail13">Email </label></td>
                                                <td><b>:</b></td>   
                                                <td><input style="margin-top: 10px;margin-left: 10px;" type="email" name="email" value="<?php 
                                                    if(!isset($success) && set_value('email'))
                                                    {
                                                        echo set_value('email');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->email;
                                                    }    
                                                ?>" class="form-control" placeholder="Email">
                                                    <p class="error-msg">
                                                    <?php 
                                                        if(isset($email_err))
                                                        {
                                                            echo $email_err;
                                                        }   
                                                    ?>    
                                                    <?php
                                                        echo form_error('email');
                                                    ?>
                                                </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle"><label for="inputEmail13">Mobile No </label></td>
                                                <td><b>:</b></td>   
                                                <td><input style="margin-top: 10px;margin-left: 10px;" type="text"  name="mobile" value="<?php 
                                                    if(!isset($success) && set_value('mobile'))
                                                    {
                                                        echo set_value('mobile');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->mobile;
                                                    }    
                                                ?>" class="form-control" placeholder="Mobile NO">
                                                    <p class="error-msg">
                                                    <?php
                                                        echo form_error('mobile');
                                                    ?>
                                                </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle"><label for="inputEmail13">Join Date </label></td>
                                                <td><b>:</b></td>   
                                                <td><input style="margin-top: 10px;margin-left: 10px;" type="text" readonly="" disabled=""  value="<?php 
                                                    echo date('d-m-Y', strtotime($record[0]->join_date));
                                                ?>" class="form-control" ></td>
                                            </tr>

                                    </table>
                                </div>
                            </section>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--SCRIPT FILES-->
<?php $this->load->view('member/footerscript'); ?>

        </div>
        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            $("#imgInp").change(function () {
                readURL(this);
            });
        </script>
    </body>

</html>