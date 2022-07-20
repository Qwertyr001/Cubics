<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('business/head'); ?>
    <style>
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
            .select-wrapper .caret{
                display: none !important;
            }
            .select-dropdown
            {
                display: none !important;
            }
    </style>

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
                        <form action="" method="post" enctype="multipart/form-data">
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
                                        <img  src="<?php echo base_url().$record[0]->profile_pic; ?>" alt="" id="blah" width="130px" />
                                    </div>
                                    <div class="col-md-10">
                                        <input id="imgInp" type="file" name="profile" style="border: 1px solid black;padding: 5px;margin-top: 15px; ">
                                    </div>
                                    <div class="col-md-2">
                                        <input class="btn btn-primary" type="submit" name="edit" value="Save">
                                        <a class="btn btn-primary" href="<?php echo base_url('business-profile'); ?>" value="">Cancel</a>
                                    </div>    
                                </div>
                            </section>
                        </div>
                            <div  class="col-md-6" style="margin-top: 10px;">
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
                                                <td>
                                                    <input style="margin-top: 10px;margin-left: 10px;" type="text" value="<?php 
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
                                                <td><label for="inputEmail13">Website </label></td>
                                                <td><b>:</b></td>
                                                <td>
                                                    <input style="margin-top: 10px;margin-left: 10px;" type="text" value="<?php 
                                                    if(!isset($success) && set_value('website'))
                                                    {
                                                        echo set_value('website');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->website;
                                                    }    
                                                ?>" name="website" class="form-control" placeholder="Website">
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('website');
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Owner Name </label></td>
                                                <td><b>:</b></td>   
                                                <td>
                                                    <input style="margin-top: 10px;margin-left: 10px;" type="text" value="<?php 
                                                    if(!isset($success) && set_value('owner_name'))
                                                    {
                                                        echo set_value('owner_name');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->owner_name;
                                                    }    
                                                ?>" name="owner_name" class="form-control" placeholder="Owner Name">
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('owner_name');
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                    </table>
                                </div>
                            </section>
                        </div>
                      
                            <div class="row">     
                                <div  class="col-md-6" style="margin-top: 10px;">
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
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;">
                                                        <select name="category" id="category" style="display: block;height: 40px;text-transform: capitalize;width: 238%;margin-top: 20px;margin-left: -40px">
                                                            <option value="">Select Category</option>
                                                            <?php  
                                                                foreach($category as $data)
                                                                {
                                                            ?>
                                                            <option value="<?php echo $data->category_id; ?>" <?php
                                                                if($data->category_id == $cat)
                                                                    {
                                                                        echo "selected";
                                                                    }    
                                                            ?> ><?php echo $data->name; ?></option>
                                                            <?php
                                                                }    
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('category');
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Open Closing Time </label></td>
                                                <td><b>:</b></td>
                                                <td>
                                                    <input style="margin-top: 10px;margin-left: 10px;margin-bottom: 15px" type="text" value="<?php 
                                                            if(!isset($success) && set_value('open_closing_time'))
                                                            {
                                                                echo set_value('open_closing_time');
                                                            }    
                                                            else
                                                            {
                                                                echo $record[0]->open_closing_time;
                                                            }    
                                                        ?>" name="open_closing_time" class="form-control" placeholder="Open-Closing-Time">
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('open_closing_time');
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Week Day </label></td>
                                                <td><b>:</b></td>   
                                                <td>
                                                    <?php
                                                        $day = explode(",", $record[0]->weekday);
                                                    ?>
                                                    <input type="checkbox" id="week1" name="day[]" value="monday" <?php 
                                                        
                                                        if( !isset( $success ) && set_checkbox('day[]', 'monday') )
                                                        {
                                                            echo set_checkbox('day[]', 'monday'); 
                                                        }  
                                                        else
                                                        {
                                                            if(in_array('monday', $day) )
                                                            {
                                                                echo "checked";
                                                            }
                                                        }            
                                                        ?>>
                                                    <label for="week1"> Monday</label><br>
                                                    <input type="checkbox" id="week2" name="day[]" value="tuesday" <?php 
                                                        
                                                        if( !isset( $success ) && set_checkbox('day[]', 'tuesday') )
                                                        {
                                                            echo set_checkbox('day[]', 'tuesday'); 
                                                        }  
                                                        else
                                                        {
                                                            if(in_array('tuesday', $day) )
                                                            {
                                                                echo "checked";
                                                            }
                                                        }            
                                                        ?>>
                                                    <label for="week2"> Tuesday</label><br>
                                                    <input type="checkbox" id="week3" name="day[]" value="wedenesday" <?php 
                                                        
                                                        if( !isset( $success ) && set_checkbox('day[]', 'wedenesday') )
                                                        {
                                                            echo set_checkbox('day[]', 'wedenesday'); 
                                                        }  
                                                        else
                                                        {
                                                            if(in_array('wedenesday', $day) )
                                                            {
                                                                echo "checked";
                                                            }
                                                        }            
                                                        ?>>
                                                    <label for="week3"> Wednesday</label><br>
                                                    <input type="checkbox" id="week4" name="day[]" value="thursday" <?php 
                                                        
                                                        if( !isset( $success ) && set_checkbox('day[]', 'thursday') )
                                                        {
                                                            echo set_checkbox('day[]', 'thursday'); 
                                                        }  
                                                        else
                                                        {
                                                            if(in_array('thursday', $day) )
                                                            {
                                                                echo "checked";
                                                            }
                                                        }            
                                                        ?>>
                                                    <label for="week4"> Thursday</label><br>
                                                    <input type="checkbox" id="week5" name="day[]" value="friday" <?php 
                                                        
                                                        if( !isset( $success ) && set_checkbox('day[]', 'friay') )
                                                        {
                                                            echo set_checkbox('day[]', 'friday'); 
                                                        }  
                                                        else
                                                        {
                                                            if(in_array('friday', $day) )
                                                            {
                                                                echo "checked";
                                                            }
                                                        }            
                                                        ?>>
                                                    <label for="week5"> Friday</label><br>
                                                    <input type="checkbox" id="week6" name="day[]" value="saturday" <?php 
                                                        
                                                        if( !isset( $success ) && set_checkbox('day[]', 'saturday') )
                                                        {
                                                            echo set_checkbox('day[]', 'saturday'); 
                                                        }  
                                                        else
                                                        {
                                                            if(in_array('saturday', $day) )
                                                            {
                                                                echo "checked";
                                                            }
                                                        }            
                                                        ?>>
                                                    <label for="week6"> saturday</label><br>
                                                    <input type="checkbox" id="week7" name="day[]" value="sunday" <?php 
                                                        
                                                        if( !isset( $success ) && set_checkbox('day[]', 'sunday') )
                                                        {
                                                            echo set_checkbox('day[]', 'sunday'); 
                                                        }  
                                                        else
                                                        {
                                                            if(in_array('sunday', $day) )
                                                            {
                                                                echo "checked";
                                                            }
                                                        }            
                                                        ?>>
                                                    <label for="week7"> Sunday</label><br>
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('day[]');
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                    </table>
                                </div>
                            </section>
                        </div>
                            </div>
                            
                            <div class="col-sm-6">
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
                                           <tr>
                                                <td><label for="inputEmail13">Since </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;">
                                                        <select name="since" id="category" style="display: block;height: 40px;text-transform: capitalize;width: 320%;margin-top: 10px;margin-left: -39px;" >
                                                            <option value="">Select Category</option>
                                                            <?php  
                                                                $now = date('Y');
                                                                for( $i=1995 ; $i<=$now ; $i++ )
                                                                {
                                                            ?>
                                                            <option value="<?php echo $i; ?>" <?php 
                                                                if( $i == $record[0]->since )
                                                                {
                                                                    echo "selected";
                                                                }
                                                            ?>  ><?php echo $i; ?></option>
                                                            <?php
                                                                }    
                                                            ?>
                                                        </select>
                                                         <p class="error-msg">
                                                        <?php
                                                            echo form_error('since');
                                                        ?>
                                                    </p>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Tag Line </label></td>
                                                <td><b>:</b></td>
                                                <td>
                                                    <input style="margin-top: 10px;margin-left: 10px;margin-bottom: 10px;" type="text" value="<?php 
                                                    if(!isset($success) && set_value('tagline'))
                                                    {
                                                        echo set_value('tagline');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->tagline;
                                                    }    
                                                ?>" name="tagline" class="form-control" placeholder="Tagline">
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('tagline');
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label style="margin-right: 10px;">Description </label></td>
                                                <td><b>:</b></td>   
                                                <td>
                                                    <textarea style="margin-left: 10px;" name="description"><?php 
                                                    if(!isset($success) && set_value('description'))
                                                    {
                                                        echo set_value('description');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->description;
                                                    }    
                                                ?></textarea>
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('description');
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                    </table>
                                </div>
                            </section>
                        </div>
                            
                            <div class="row">
                                <div  class="col-md-6" style="margin-top: 5px;">
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
                                            
                                            $stt = $this->md->my_select('tbl_location','*',array('location_id'=>$city))[0]->parent_id;
                                            
                                        ?>
                                            <tr>
                                                <td><label for="inputEmail13">State </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;">
                                                    <select name="state"  style="display: block;height: 40px;text-transform: capitalize;width: 246%;margin-top: 20px;margin-left: -15px;">
                                                            <option value="">Select Category</option>
                                                            <?php  
                                                                foreach($state as $data)
                                                                {
                                                            ?>
                                                            <option value="<?php echo $data->location_id; ?>" <?php
                                                                if($data->location_id == $stt)
                                                                    {
                                                                        echo "selected";
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
                                                    </label></td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">City </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;">
                                                        <select name="city"  style="display: block;height: 40px;text-transform: capitalize;width: 279%;margin-top: 10px;margin-left: -13px;">
                                                            <option value="">Select Category</option>
                                                            <?php 
                                                                $ctt = $this->md->my_select('tbl_location','*',array('parent_id'=>$stt));
                                                                foreach($ctt as $data)
                                                                {
                                                            ?>
                                                            <option value="<?php echo $data->location_id; ?>" <?php
                                                                if($data->location_id == $city)
                                                                    {
                                                                        echo "selected";
                                                                    }    
                                                            ?> ><?php echo $data->name; ?></option>
                                                            <?php
                                                                }    
                                                            ?>
                                                        </select>
                                                        <p class="error-msg">
                                                        <?php
                                                            echo form_error('city');
                                                        ?>
                                                    </p>
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Address </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;">
                                                        <input style="margin-top: 10px;margin-left: -12px;width: 213%;;" type="text" value="<?php 
                                                    if(!isset($success) && set_value('address'))
                                                    {
                                                        echo set_value('address');
                                                    }    
                                                    else
                                                    {
                                                        echo $record[0]->address;
                                                    }    
                                                ?>" name="address" class="form-control" placeholder="Address">
                                                    <p class="error-msg">
                                                        <?php
                                                            echo form_error('address');
                                                        ?>
                                                    </p>
                                                    </label>
                                                </td>
                                            </tr>
                                            
                                    </table>
                                </div>
                            </section>
                        </div>
                            </div> 
                            <div></div>
                            <div  class="col-md-6" >
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
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;">
                                                        <input style="margin-top: 10px;margin-left: 10px;width: 170%;" type="text" value="<?php 
                                                            if(!isset($success) && set_value('email'))
                                                            {
                                                                echo set_value('email');
                                                            }    
                                                            else
                                                            {
                                                                echo $record[0]->email;
                                                            }    
                                                        ?>" name="email" class="form-control" placeholder="Email">
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
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="inputEmail13">Mobile No </label></td>
                                                <td><b>:</b></td>   
                                                <td><label style="margin-left: 50px;margin-bottom: 10px;">
                                                        <input style="margin-top: 10px;margin-left: 10px;width: 170%;" type="text" value="<?php 
                                                            if(!isset($success) && set_value('contact_no'))
                                                            {
                                                                echo set_value('contact_no');
                                                            }    
                                                            else
                                                            {
                                                                echo $record[0]->contact_no;
                                                            }    
                                                        ?>" name="contact_no" class="form-control" placeholder="Contact_no">
                                                        <p class="error-msg">
                                                            <?php
                                                                echo form_error('contact_no');
                                                            ?>
                                                        </p>
                                                    </label>
                                                </td>
                                            </tr>
                                            
                                    </table>
                                </div>
                            </section>
                        </div>
                        </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--SCRIPT FILES-->
                <?php $this->load->view('business/footerscript'); ?>
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
        </div>
    </body>

</html>