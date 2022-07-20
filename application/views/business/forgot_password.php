<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Forgot-paasword - Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        div.solid {border-style: solid; opacity:0.8}
        .error-msg + p
        {
            color: red;
            font-size: 13px;
        }
    </style>

        <?php $this->load->view('business/head'); ?>
    </head>

    <body data-ng-app="">
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--TOP SEARCH SECTION-->
        <?php $this->load->view('business/heder'); ?>
        <section class="tz-register">
            <div class="log-in-pop" style="width: 55%">

                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.html" alt="" />
                    </a>
                    <h4>Forgot Password</h4>
                    <p>Enter The Register Email Id We Will Sent Your Password Via Email.</p>
                    <form class="s12" action="" method="post">
                        <div>
                            <div class="input-field s6">
                                <input type="text" name="email" data-ng-model="name1" class="validate"  value="<?php 
                                    echo set_value('email');
                                ?>">
                                <label>Email</label>
                                <p class="error-msg">
                                    <?php
                                        echo form_error('email');
                                    ?>
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Send now" name="send" class="waves-effect waves-light log-in-btn" style="background: #2170e8"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="<?php echo base_url('business-login'); ?>">Back</a> | <a href="<?php echo base_url('business-register-1'); ?>">Create an account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--MOBILE APP-->
        <?php $this->load->view('business/footer'); ?>
        <?php $this->load->view('business/footerscript');?>
    </body>
</html>