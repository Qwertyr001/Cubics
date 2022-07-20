<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Business-Register-1 - Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('business/hederlink'); ?>
       <style>
            .select-wrapper .caret{
                display: none !important;
            }
            .select-dropdown
            {
                display: none !important;
            }
            .check
            {
                cursor: pointer;
                position: relative;
                margin: auto;
                width: 18px;
                height: 18px;
                -webkit-tap-highlight-color: transparent;
                transform: translate3d(0,0,0);
            }
            &:before
            {
                content: "";
                position: absolute;
                top: -15px;
                left: -15px;
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: rgba(#223254,.03);
                opacity: 0;
                transition: opacity .2s ease;
            }
            svg
            {
                position: relative;
                z-index: 1;
                fill: none;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke: #C8CCD4;
                stroke-width: 1.5;
                transform: translate3d(0,0,0);
                transition: all .2s ease;
            }
            path
            {
                stroke-dasharray: 60;
                stroke-dashoffset: 0;
            }

            polyline 
            {
                stroke-dasharray: 22;
                stroke-dashoffset: 66;
            }
            &:hover, 
            &:before
            {
                opacity: 1;
            }
            svg
            {
                stroke: #4285F4;
            }


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
        <?php $this->load->view('business/heder'); ?>
        <section class="tz-register">
            <div class="log-in-pop" style="width: 73%">
                <div class="log-in-pop-left" style="padding: 20% 8%;" >
                    <h1>Hello... <span></span></h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes.</p>
                    <h4></h4>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>business-login" style="background-color: #2170e8;" ><i></i> Login Business</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">

                    <h4>Create Business an Account</h4>
                    <p>Already Have An Account. Login Within Less Then Minutes.</p>
                    <form class="s12" action="" method="post" name="business_register">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" name="name" class="validate" placeholder="Company Name" value="<?php
                                    if($this->session->userdata('name'))
                                    {
                                        echo $this->session->userdata('name');
                                    }    
                                    else
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
                                    <input type="text" data-ng-model="name1" name="contact_no" class="validate" placeholder="Mobile No" value="<?php
                                    if($this->session->userdata('contact_no'))
                                    {
                                        echo $this->session->userdata('contact_no');
                                    }    
                                    else
                                    {
                                        echo set_value('contact_no');
                                    }    
                                ?>">
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('contact_no');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="email" class="validate" name="email" placeholder="Email id" value="<?php
                                    if($this->session->userdata('email'))
                                    {
                                        echo $this->session->userdata('email');
                                    }    
                                    else
                                    {    
                                        echo set_value('email');
                                    }    
                                    ?>" >
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('email');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <div class="input-field s12">
                                <div class="input-group">
                                    <input type="password" id="txt1"  name="password" placeholder="Password" value="<?php
                                    if($this->session->userdata('password'))
                                    {
                                        echo $this->session->userdata('password');
                                    }    
                                    else
                                    {    
                                        echo set_value('password');
                                    }    
                                    ?>">
                                    <div class="input-group-addon" id="sh_ps">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                                <p class="error-msg">
                                    <?php
                                        echo form_error('password');
                                    ?>
                                </p>
                            </div>
                            <div class="input-field s12">
                                <div class="input-group">
                                    <input type="password" id="txt2"  name="cpassword" placeholder=" Confirm Password" value="<?php
                                        echo set_value('cpassword');
                                    ?>">
                                    <div class="input-group-addon" id="sh_pss">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                                 <p class="error-msg">
                                    <?php
                                        echo form_error('cpassword');
                                    ?>
                                </p>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" class="validate" name="website" placeholder="WEBSITE" value="<?php
                                    if($this->session->userdata('website'))
                                    {
                                        echo $this->session->userdata('website');
                                    }    
                                    else
                                    {    
                                        echo set_value('website');
                                    }    
                                    ?>">
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('website');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <select name="category" id="category" style="display: block;height: 40px;text-transform: capitalize;">
                                        <option value="">Select Category</option>
                                        <?php  
                                            foreach($category as $data)
                                            {
                                        ?>
                                        <option value="<?php echo $data->category_id; ?>" <?php
                                        if($this->session->userdata('category'))
                                            {
                                                if($data->category_id == $this->session->userdata('category'))
                                                {
                                                    echo "selected";
                                                }    
                                            }
                                            else
                                            {
                                                echo set_select('category', $data->category_id);
                                            }
                                        ?> ><?php echo $data->name; ?></option>
                                        <?php
                                            }    
                                        ?>
                                    </select>
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('category');
                                    ?>
                                  </p>
                                </div>
                                
                            </div>
                            <br/>
                            <div>
                                <div class="input-field s4 col-md-12">
                                    <input class="btn col-md-12" style="background: #337ab7;" type="submit" name="add" value="Next >">
                                </div>
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
        <?php $this->load->view('business/footer'); ?>
        <!--SCRIPT FILES-->

        <?php $this->load->view('business/footerscript'); ?>
    </body>

</html>