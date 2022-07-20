<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Business-Register-2 - Cubics</title>
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
                        <li><a href="<?php echo base_url(); ?>login" style="background-color: #2170e8;" ><i></i> Login Business</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">

                    <h4>Welcome, <?php echo $this->session->userdata('name'); ?></h4>
                    <form class="s12" action=""  method="post" name="business_register_2">
                        <div>
                            <div class="input-field s12">
                                <select onchange="set_combo('city', this.value);" style="display: block;height: 40px;text-transform: capitalize;" name="state">
                                    <option value="">Select State</option>
                                    <?php
                                    foreach ($state as $data) {
                                        ?>
                                        <option value="<?php echo $data->location_id; ?>" <?php 
                                            if($this->session->userdata('state'))
                                            {
                                                if($data->location_id == $this->session->userdata('state'))
                                                {
                                                    echo "selected";
                                                }    
                                            }
                                            else
                                            {
                                                echo set_select('state', $data->location_id);
                                            }    
                                            
                                        ?> ><?php echo $data->name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <p class="error-msg">
                                    <?php
                                        echo form_error('state');
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="input-field s12">
                                    <select style="display: block;height: 40px;text-transform: capitalize;" name="city" id="city">
                                        <option value="">Select City</option>
                                        <?php 
                                            if($this->input->post('state') || $this->session->userdata('state'))
                                            {
                                                if($this->session->userdata('state'))
                                                {
                                                    $wh['parent_id'] = $this->session->userdata('state');
                                                }
                                                else
                                                {
                                                    $wh['parent_id'] = $this->input->post('state');
                                                }    
                                                
                                                $state = $this->md->my_select('tbl_location','*',$wh);
                                                foreach( $city as $data )
                                                {
                                        ?>
                                        <option value="<?php echo $data->location_id; ?>" <?php 
                                            if($this->session->userdata('city'))
                                            {
                                                if($data->location_id == $this->session->userdata('city'))
                                                {    
                                                     echo "selected";
                                                }    
                                            }  
                                            else
                                            {
                                                echo set_select('city', $data->location_id);
                                            }    
                                            
                                        ?> ><?php echo $data->name; ?></option>
                                        <?php
                                                }    
                                            }    
                                        ?>
                                    </select>
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('city');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <textarea name="address" rows="14" placeholder="Address"><?php  
                                        
                                    if($this->session->userdata('address'))
                                    {
                                        echo $this->session->userdata('address');
                                    }    
                                    else
                                    {    
                                        echo set_value('address');
                                    }    
                               
                                    ?></textarea>
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('address');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <div class="input-field s12">
                                <input type="text" name="tagline" class="validate" value="<?php  
                                if($this->session->userdata('tagline'))
                                    {
                                        echo $this->session->userdata('tagline');
                                    }    
                                    else
                                    {
                                         echo set_value('tagline');  
                                    }     
                                    ?>" placeholder="tagline" >
                                <p class="error-msg">
                                    <?php
                                        echo form_error('tagline');
                                    ?>
                                </p>
                            </div>
                            <div class="input-field s12">
                                <textarea name="description" rows="14" placeholder="Description"><?php  
                                if($this->session->userdata('description'))
                                    {
                                        echo $this->session->userdata('description');
                                    }    
                                    else
                                    {        
                                        echo set_value('description');  
                                    }    
                                    ?></textarea>
                                <p class="error-msg">
                                    <?php
                                        echo form_error('description');
                                    ?>
                                </p>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <input type="text" style="text-transform: capitalize;" name="owner_name" class="validate" placeholder="Owner Name" value="<?php  
                                    if($this->session->userdata('owner_name'))
                                    {
                                        echo $this->session->userdata('owner_name');
                                    }    
                                    else
                                    {    
                                        echo set_value('owner_name');  
                                    }    
                                    ?>">
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('owner_name');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <div>
                                <div class="input-field s12">
                                    <select name="since" style="display: block;height: 40px;" >
                                        <option value="">Selcet Since</option>
                                        <?php
                                            for($i=1995;$i<= date('Y');$i++)
                                            {
                                        ?>
                                        <option <?php if($this->session->userdata('since') && $this->session->userdata('since') == $i)
                                            {
                                                echo "selected";
                                            }
                                            else
                                            {    
                                                echo set_select('since', $i); 
                                            } ?> ><?php echo $i; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                    <p class="error-msg">
                                    <?php
                                        echo form_error('since');
                                    ?>
                                </p>
                                </div>
                            </div>
                            <br/>
                            <div>
                                <div class="input-field s4 left-align" >
                                    <a href="<?php echo base_url('business-register-1'); ?>" style="color: black" class="btn btn-primary col-md-6"> < Previous</a> 
                                </div>
                                <div class="input-field s4 right-align" >
                                    <input class="btn col-md-6" style="background: #337ab7;width: 50%;height: 37px; border-radius: 10px 10px 10px 10px;color: black" type="submit" name="add" value="Next >">
                                </div>
                                
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
        <script src="<?php echo base_url(); ?>assert/js/set.js" type="text/javascript"></script>
    </body>


</html>