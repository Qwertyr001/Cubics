<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Business Department-Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAV ICON(BROWSER TAB ICON) -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assert/images/fav1.ico" type="image/x-icon">
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
        <!-- FONTAWESOME ICONS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assert/css/font-awesome.min.css">
        <!-- ALL CSS FILES -->
        <link href="<?php echo base_url(); ?>assert/css/materialize.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assert/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assert/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
        <link href="<?php echo base_url(); ?>assert/css/responsive.css" rel="stylesheet"/>
        
    </head>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <section class="tz-login">
            <div class="tz-regi-form">
                <div><img src="<?php echo base_url(); ?>assert/images/1.png" alt="" style="width: 125px; height: 75px"> </div>
                <p style="font-size: 20px">Login To Continue With Business Panel.</p>
                <form class="col s12" action="" method="post" name="login">
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" placeholder="Email" name="email" value="<?php
                                    if($this->input->cookie('business_email'))
                                    {
                                        echo $this->input->cookie('business_email');
                                    }    
                                ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <div class="input-group">
                                <input type="password" id="txt3"  name="password" placeholder="Password" value="<?php
                                    if($this->input->cookie('business_password'))
                                    {
                                        echo $this->input->cookie('business_password');
                                    }    
                                ?>">
                                <div class="input-group-addon" id="sh_psss">
                                    <i class="fa fa-eye"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 "> 
                            <button type="submit" class="btn btnsub col-md-12" name="login" value="yes">Login</button> 
                            <div>
                                <?php
                                if (isset($error)) {
                                    ?>
                                <br/><br/><br/><br/>
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong>Oops !</strong> <?php echo $error; ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div>
                            <input type="checkbox" id="cbx"  style="display: none;" name="svp" value="yes" <?php
                                    if($this->input->cookie('business_email'))
                                    {
                                        echo "checked";
                                    }    
                                ?>>
                            <label for="cbx" class="check"><p style="margin-top: -2px;"> Save Password </p>
                                          <!--    <svg width="18px" height="18px" viewBox="0 0 18 18">
                                          <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                          <polyline points="1 9 7 14 15 4"></polyline> </svg>-->
                            </label>
                        </div>
                        </div>
                    </div>
                </form>
                <p><a href="<?php echo base_url(); ?>business-forgot-password">Forgot Password ?</a></p>
            </div>
        </section>
        <!--SCRIPT FILES-->
        <script src="<?php echo base_url(); ?>admin-assert/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>admin-assert/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>admin-assert/js/materialize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>admin-assert/js/custom.js"></script>
    </body>



</html>