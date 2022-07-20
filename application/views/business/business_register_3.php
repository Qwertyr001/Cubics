<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Business-Register-3 - Cubics</title>
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
                <div class="log-in-pop-left" style="padding: 19% 7%;" >
                    <h1>Hello... <span></span></h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes.</p>
                    <h4></h4>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>login" style="background-color: #2170e8;" ><i></i> Login Business</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">

                     <h4>Welcome, <?php echo $this->session->userdata('name'); ?></h4>
                    <form class="s12" action="" method="post">
                        <div>
                            <div class="input-field s12">
                                <input type="text" name="open_closing_time" class="validate" placeholder="open-closing-time" value="<?php
                                    if($this->session->userdata('open_closing_time'))
                                    {
                                        echo $this->session->userdata('open_closing_time');
                                    }    
                                    else
                                    {    
                                        echo set_value('open_closing_time');
                                    }    
                                ?>">
                                <p class="error-msg">
                                    <?php
                                        echo form_error('open_closing_time');
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="input-field">
                                    <input type="checkbox" id="week1" name="day[]" value="monday" <?php 
                                        if($this->session->userdata('day[]') && in_array("monday", $this->session->userdata('day[]')) )
                                        {
                                            echo "checked"; 
                                        }  
                                        else
                                        {
                                            echo set_checkbox('day[]','monday'); 
                                        }
                                    ?>>
                                    <label for="week1"> Monday</label><br>
                                    <input type="checkbox" id="week2" name="day[]" value="tuesday" <?php 
                                        if($this->session->userdata('day[]')  && in_array("tuesday",$this->session->userdata('day[]'))  )
                                        {
                                            echo "checked"; 
                                        }  
                                        else
                                        {
                                            echo set_checkbox('day[]','tuesday'); 
                                        }            
                                        ?>>
                                    <label for="week2"> Tuesday</label><br>
                                    <input type="checkbox" id="week3" name="day[]" value="wedenesday" <?php 
                                        if($this->session->userdata('day[]')  && in_array("wedenesday", $this->session->userdata('day[]'))  )
                                        {
                                            echo "checked"; 
                                        }  
                                        else
                                        {
                                            echo set_checkbox('day[]','wedenesday'); 
                                        }    
                                        ?>>
                                    <label for="week3"> Wednesday</label><br>
                                    <input type="checkbox" id="week4" name="day[]" value="thursday" <?php 
                                        if($this->session->userdata('day[]')  && in_array("thursday", $this->session->userdata('day[]'))  )
                                        {
                                            echo "checked"; 
                                        }  
                                        else
                                        {
                                            echo set_checkbox('day[]','thursday'); 
                                        }    
                                        ?>>
                                    <label for="week4"> Thursday</label><br>
                                    <input type="checkbox" id="week5" name="day[]" value="friday" <?php 
                                       if($this->session->userdata('day[]')  && in_array("friday", $this->session->userdata('day[]'))  )
                                        {
                                            echo "checked"; 
                                        }  
                                        else
                                        {
                                                echo set_checkbox('day[]','friday'); 
                                        }        
                                        ?>>
                                    <label for="week5"> Friday</label><br>
                                    <input type="checkbox" id="week6" name="day[]" value="saturday" <?php 
                                        if($this->session->userdata('day[]')  && in_array("saturday", $this->session->userdata('day[]'))  )
                                        {
                                            echo "checked"; 
                                        }  
                                        else
                                        {
                                             echo set_checkbox('day[]','saturday'); 
                                        }    
                                         ?>>
                                    <label for="week6"> Saturday</label><br>
                                    <input type="checkbox" id="week7" name="day[]" value="sunday" <?php 
                                        if($this->session->userdata('day[]')  && in_array("sunday", $this->session->userdata('day[]'))  )
                                        {
                                            echo "checked"; 
                                        }  
                                        else
                                        {
                                            echo set_checkbox('day[]','sunday') ;
                                        }   
                                        ?>>
                                    <label for="week6"> Sunday</label><br><br><br>
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('day[]');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" name="iframe" class="validate" placeholder="I-Frame" value="<?php
                                    if($this->session->userdata('iframe'))
                                    {
                                        echo $this->session->userdata('iframe');
                                    }    
                                    else
                                    {    
                                        echo set_value('iframe');
                                    }    
                                ?>">
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('iframe');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <br/>
                            <div>
                                <div class="input-field s4 left-align" >
                                    <a href="<?php echo base_url('business-register-2'); ?>" style="color: black" class="btn btn-primary col-md-6"> < Previous</a> 
                                </div>
                                <div class="input-field s4 right-align" >
                                    <input class="btn col-md-6" style="background: #337ab7;width: 50%;height: 37px; border-radius: 10px 10px 10px 10px;color: black" type="submit" name="add" value="Next >">
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