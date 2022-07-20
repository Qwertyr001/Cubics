<!DOCTYPE html>
<html lang="en">
 <head>
        <title>Register - Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('hederlink'); ?>
        <style>
            .check
            cursor: pointer;
            position: relative;
            margin: auto;
            width: 18px;
            height: 18px;
            -webkit-tap-highlight-color: transparent
            transform: translate3d(0,0,0)
            &:before
            content: ""
            position: absolute
            top: -15px
            left: -15px
            width: 48px
            height: 48px
            border-radius: 50%
            background: rgba(#223254,.03)
            opacity: 0
            transition: opacity .2s ease
            svg
            position: relative
            z-index: 1
            fill: none
            stroke-linecap: round
            stroke-linejoin: round
            stroke: #C8CCD4
            stroke-width: 1.5
            transform: translate3d(0,0,0)
            transition: all .2s ease
            path
            stroke-dasharray: 60
            stroke-dashoffset: 0
            polyline 
            stroke-dasharray: 22
            stroke-dashoffset: 66
            &:hover 
            &:before
            opacity: 1
            svg
            stroke: #4285F4

            #cbx:checked + .check
            

        </style>
        <style>
            div.solid {border-style: solid; opacity:0.8}
            .error-msg + p
            {
                color: red;
                font-size: 13px;
            }
        </style>
    </head>

    <body data-ng-app="">
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--TOP SEARCH SECTION-->
        <?php $this->load->view('heder'); ?>
        <section class="tz-register">
            <div class="log-in-pop" style="width: 73%">
                <div class="log-in-pop-left" style="padding: 18% 6%;" >
                    <h1>Hello... <span></span></h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes.</p>
                    <h4></h4>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>login" style="background-color: #2170e8;" ><i></i> Login</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.html" alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <p>Already Have An Account. Login Within Less Then Minutes.</p>
                    <form class="s12"action="" method="post" name="register">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" name="name" class="validate" placeholder="Name" value="<?php  
                                if(!isset($success) && set_value('name')) 
                                    { 
                                         echo set_value('name');  
                                    }     
                                    ?>">
                                <p class="error-msg">
                                    <?php
                                        echo form_error('name');
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" data-ng-model="name1" class="validate" name="mobile" placeholder="Mobile No" value="<?php  
                                    if(!isset($success) && set_value('mobile')) 
                                    { 
                                        echo set_value('mobile');  
                                    }    
                                    ?>">
                                    <p class="error-msg">
                                        <?php
                                            echo form_error('mobile');
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="email" name="email" class="validate" placeholder="Email id" value="<?php  
                                    if(!isset($success) && set_value('email')) 
                                    {    
                                        echo set_value('email');  
                                    }    
                                    ?>">
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('email');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <div class="input-field s12">
                                <div class="input-group">
                                    <input type="password" id="txt1"  name="ps" placeholder="Password" value="<?php  
                                    if(!isset($success) && set_value('ps')) 
                                    {    
                                        echo set_value('ps');  
                                    }    
                                    ?>">
                                    <div class="input-group-addon" id="sh_ps">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                                <p class="error-msg">
                                            <?php
                                                echo form_error('ps');
                                            ?>
                                        </p>
                                 </div>
                             <div class="input-field s12">
                                <div class="input-group">
                                    <input type="password" id="txt2"  name="cps" placeholder=" Confirm Password">
                                    <div class="input-group-addon" id="sh_pss">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                                <p class="error-msg">
                                            <?php
                                                echo form_error('cps');
                                            ?>
                                        </p>
                            </div>
                            <div>
                                <input type="checkbox" id="cbx" checked="" style="display: none;">
                                <label for="cbx" class="check"><p>I Accept All <a href="terms of use.php">Terms & Condition</a> </p>

                                </label>
                            </div>
                            <br>
                            <div>
                                <div class="input-field s4">
                                    <input type="submit" value="Register Now" name="register" class="waves-effect waves-light log-in-btn" style="background: #2170e8"> </div>
                            </div>
                            <div>
                                <div class="input-field s12"> <a href="login.html"></a> </div>
                            </div>
                           
                  
                   
                </div>
                    </form>    
            </div>
        </div>    
    </section>

    <!--FOOTER SECTION-->
    <?php $this->load->view('footer'); ?>
    <!--SCRIPT FILES-->

    <?php $this->load->view('footerscript'); ?>
</body>

</html>