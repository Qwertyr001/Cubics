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
                            <li>
                                <a href="dashboard.php">
                                    <img src="assert/images/icon/zr19.gif" alt=""> Home
                                </a> 
                            </li>
                            <li class="active-bre"><a>Setting</a></li>
                        </ul>
                    </div>

                    <!--Setting start -->
                    <div class="row">
                        <div class="col-md-6">
                            <section class="tz-2 tz-2-admin ">
                                <header class="tz-2-com tz-2-main">
                                    <div class="panel-action">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    </div>
                                    <h4 style="text-align: center">Change Profile</h4>    
                                </header>
                                <div class="panel-body">
                                    <form method="post" action="" name="changeprofile" enctype="multipart/form-data">
                                        <center>
                                            <?php 
                                                $path = $this->md->my_select('tbl_admin_login','*',array('admin_id'=>$this->session->userdata('admin')))[0]->profile_pic;
                                            ?>
                                            <img class="img-circle" src="<?php echo base_url().$path; ?>" alt="" id="blah" width="160px" />
                                            <br/><br/>
                                            <input type="file"  id="imgInp" class="input_banner input_setting " name="photo" style="margin: 25px;padding: 10px;border: solid;border-radius: 4em;"> 
                                            <input class="btn btn-primary" type="submit" name="btn_profile" value="Edit Profile"> 
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
                                        </center>
                                        
                                    </form>
                                </div>
                            </section>
                        </div>

                        <!-- Chanege Password -->
                        <div class="col-md-6">
                            <section class="tz-2 tz-2-admin">
                                <header class="tz-2-com tz-2-main">
                                    <div class="panel-action">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    </div>
                                    <h4 style="text-align: center">Change Password</h4>    
                                </header>
                                <div class="panel-body">
                                    <form method="post" action="" name="changeps">
                                        <br/>
                                        <div class="input-field s12">
                                            <div class="input-group">
                                                <input type="password" id="txt1"  name="cps" class="form-control input_banner setting_addon" placeholder="Current Password">
                                                <div class="input-group-addon" id="sh_ps">
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <br/>
                                        <div class="input-field s12">
                                            <div class="input-group">
                                                <input type="password" id="txt2"  name="nps" class="form-control input_banner setting_addon" placeholder="New Password">
                                                <div class="input-group-addon" id="sh_pss">
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <br/>
                                        <div class="input-field s12">
                                            <div class="input-group">
                                                <input type="password" id="txt3"  name="cnps" class="form-control input_banner setting_addon" placeholder="Confirm Password">
                                                <div class="input-group-addon" id="sh_psss">
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </div>

                                        </div>
                                        <br/>
                                        <input type="submit" name="btn_ps" value="CHANGE" class="btn btn-primary">
                                        <input type="reset"  value="CLEAR" class="btn btn-default">
                                        <?php
                                            if (isset($error)) 
                                            {
                                        ?>
                                            <br><br>
                                            <div class="alert alert-danger alert-dismissable" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                <strong>Oops !</strong> <?php echo $error; ?>
                                            </div>
                                            <?php
                                        }
                                        if (form_error('nps') || form_error('cnps')) {
                                            ?>
                                            <br><br>
                                            <div class="alert alert-danger alert-dismissable" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                <strong>Oops !</strong> <?php echo form_error('nps'); ?>
                                                <br/>
                                                <strong>Oops !</strong> <?php echo form_error('cnps'); ?>
                                            </div>
    <?php
}
?>

                                    </form>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </div>
            <!--SCRIPT FILES-->
<?php $this->load->view('admin/footerscript'); ?>

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