<!DOCTYPE html>
<html lang="en">
<head>
        <title>Login - Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('hederlink'); ?>
    </head>

    <body data-ng-app="">
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--TOP SEARCH SECTION-->
        <?php $this->load->view('heder'); ?>
<!--                <section class="inn-page-bg">
            <div class="container">
                <div class="row">
                    <div class="inn-pag-ban">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="tz-register">
            <div class="log-in-pop" style="width: 73%">
                <div class="log-in-pop-left">
                    <h1>Hello... <span></span></h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes.</p>
                    <h4></h4>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>register" style="background: #2170e8"><i class=""></i> Register </a>
                        </li>

                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.html" alt="" />
                    </a>
                    <h4>Login Now</h4>
                    <p>Enter The Following Details We Will Move Your Panel</p>
                    <form class="s12" action="" name="login" method="post">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" name="email" class="validate" placeholder="Email" value="<?php
                                    if($this->input->cookie('user_email'))
                                    {
                                        echo $this->input->cookie('user_email');
                                    }    
                                ?>">

                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <div class="input-group">
                                    <input type="password" id="txt1" name="ps" placeholder="Password" value="<?php
                                    if($this->input->cookie('user_password'))
                                    {
                                        echo $this->input->cookie('user_password');
                                    }    
                                ?>">
                                    <div class="input-group-addon" id="sh_ps">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div>
                            <input type="checkbox" id="cbx"  style="display: none;" name="svp" value="yes" <?php
                                    if($this->input->cookie('user_email'))
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
                        <br>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login now" name="login" class="waves-effect waves-light log-in-btn" style="background: #2170e8"> </div>
                        </div>

                        <div>
                            <div class="input-field s12"> <a href="<?php echo base_url('forgot-password'); ?>">Forgot password?</a> </div>
                        </div>
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
                    </form>
                </div>
            </div>
        </section>
        <!--FOOTER SECTION-->
        <?php $this->load->view('footer');?>

        <?php $this->load->view('footerscript'); ?>
       
    </body>



</html>