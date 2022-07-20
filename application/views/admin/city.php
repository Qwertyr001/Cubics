<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('admin/head'); ?>
    <style>
        div.solid {border-style: solid; opacity:0.8}
        .error-msg + p
        {
            color: red;
            font-size: 13px;
        }
    </style>
   

    <body>
        <div>
            <div>
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
                                            <i class="fa fa-home" aria-hidden="true"></i> Home
                                        </a> 
                                    </li>
                                    <li class="active-bre"><a>Location</a></li>
                                    <li class="active-bre"><a>City</a></li>
                                </ul>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <?php 
                                        if(isset($editcity))
                                        {
                                    ?>
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form id="selects-form"  method="post">
                                                            <h4 style="text-align: center">Edit City</h4>
                                                            <section class="panel">
                                                                <header class="panel-heading">
                                                                    <div class="panel-actions">
                                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                                    </div>
                                                                </header>
                                                                <div class="panel-body"style="margin-top: 0px;">

                                                                    <div class="col-md-6">
                                                                        <label for="State">State</label>
                                                                        <select id="" name="state" class="form-control input-sm">
                                                                            <option value="">Select State</option>
                                                                            <?php 
                                                                                foreach($state as $data)
                                                                                {
                                                                            ?>
                                                                            <option value="<?php echo $data->location_id; ?>" <?php 
                                                                                  if(!isset($success)&& set_select('state',$data->location_id))
                                                                                {
                                                                                    echo set_select('state',$data->location_id);
                                                                                }
                                                                                else
                                                                                {
                                                                                    if($data->location_id == $editcity[0]->parent_id )
                                                                                    {
                                                                                        echo "selected";
                                                                                    }
                                                                                }
                                                                                
                                                                            
                                                                            ?>><?php echo $data->name;  ?></option>
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

                                                                    <div class="col-md-6">
                                                                        <label for="State">City</label>
                                                                        <input type="text" name="city" class="form-control" id="email" placeholder="City" value="<?php 
                                                                            if (!isset($success) && set_value('city'))
                                                                            {
                                                                                echo set_value('city');
                                                                            } 
                                                                            else
                                                                            {
                                                                                echo $editcity[0]->name;
                                                                            }
                                                                        ?>">
                                                                        <p class="error-msg">
                                                                            <?php
                                                                            echo form_error('city');
                                                                            ?>
                                                                        </p>

                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-sm-9" style="padding: 20px">
                                                                            <input class="btn" name="edit" type="submit"  value="ADD" style="background: #2170e8">
                                                                            <button type="reset" class="btn" style="background: #2170e8">Clear</button>
                                                                            <a href="<?php echo base_url('manage-City'); ?>" class="btn" style="background: #2170e8" value="clear">CANCEL</a>
                                                                        <?php
                                                                        if (isset($success)) {
                                                                        ?>
                                                                        <br><br>
                                                                        <div class="alert alert-success alert-dismissable" role="alert">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                                            <strong>Ok !</strong> <?php echo $success ?>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    if (isset($error)) {
                                                                        ?>
                                                                        <br><br>
                                                                        <div class="alert alert-danger alert-dismissable" role="alert">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                                            <strong>Oops !</strong> <?php echo $error; ?>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>   
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>


                                                            </section>

                                                        </form>
                                                    </div>          
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                    <?php
                                        }   
                                        else 
                                        {
                                    ?>
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form id="selects-form"  method="post">
                                                            <h4 style="text-align: center">Add New City</h4>
                                                            <section class="panel">
                                                                <header class="panel-heading">
                                                                    <div class="panel-actions">
                                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                                    </div>
                                                                </header>
                                                                <div class="panel-body"style="margin-top: 0px;">

                                                                    <div class="col-md-6">
                                                                        <label for="State">State</label>
                                                                        <select id="" name="state" class="form-control input-sm">
                                                                            <option value="">Select State</option>
                                                                            <?php 
                                                                                foreach($state as $data)
                                                                                {
                                                                            ?>
                                                                            <option value="<?php echo $data->location_id; ?>" <?php 
                                                                                  if(!isset($success)&& set_select('state',$data->location_id))
                                                                                {
                                                                                    echo set_select('state',$data->location_id);
                                                                                }
                                                                                
                                                                            
                                                                            ?>><?php echo $data->name;  ?></option>
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

                                                                    <div class="col-md-6">
                                                                        <label for="State">City</label>
                                                                        <input type="text" name="city" class="form-control" id="email" placeholder="City" value="<?php 
                                                                            if (!isset($success) && set_value('city'))
                                                                            {
                                                                                echo set_value('city');
                                                                            }    
                                                                        ?>">
                                                                        <p class="error-msg">
                                                                            <?php
                                                                            echo form_error('city');
                                                                            ?>
                                                                        </p>

                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-sm-9" style="padding: 20px">
                                                                            <input class="btn" name="add" type="submit" value="ADD" style="background: #2170e8">
                                                                            <button type="reset" class="btn" style="background: #2170e8">Clear</button>
                                                                        <?php
                                                                    if (isset($success)) {
                                                                        ?>
                                                                        <br><br>
                                                                        <div class="alert alert-success alert-dismissable" role="alert">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                                            <strong>Ok !</strong> <?php echo $success ?>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    if (isset($error)) {
                                                                        ?>
                                                                        <br><br>
                                                                        <div class="alert alert-danger alert-dismissable" role="alert">
                                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                                            <strong>Oops !</strong> <?php echo $error; ?>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>   
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>


                                                            </section>

                                                        </form>
                                                    </div>          
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                    <?php
                                        }
                                    ?>  
                                </div>
                                <div class="col-md-6">
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 style="text-align: center">View All City</h4>
                                                        <form id="summary-form" action="" class="form-horizontal">
                                                            <section class="panel">
                                                                <header class="">
                                                                    <div class="panel-actions">
                                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                                    </div>
                                                                </header>
                                                                <div class="panel-body">
                                                                    <div class="validation-message">
                                                                        <ul></ul>
                                                                    </div>
                                                                    <div class="form-group">

                                                                        <div class="panel-body" style="margin-top: -28px;">                                                
                                                                            <table id="example" class="table table-striped table-bordered" style="width:105%;">
                                                                                <div class="container"></div>
                                                                                <thead>                                    
                                                                                    <tr>
                                                                                        <th>Number</th>
                                                                                        <th>State</th>
                                                                                        <th>City</th>
                                                                                        <th>Edit</th>
                                                                                        <th>Remove</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <?php
                                                                                        $no =0;
                                                                                        foreach ($city as $data)
                                                                                        {
                                                                                            $no++;
                                                                                        ?>
                                                                                        <tr>                                                             
                                                                                            <td style="vertical-align:middle; text-align: center; width: 15%;">
                                                                                                <?php echo $no; ?>
                                                                                            </td>
                                                                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs"><?php echo $data->state; ?></td>
                                                                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs"><?php echo $data->name; ?></td>
                                                                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs">
                                                                                                <a href="<?php echo base_url(); ?>edit-city/<?php echo $data->location_id; ?>" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil"></a>
                                                                                            </td>
                                                                                            <td style="vertical-align: middle;text-align: center"  data-toggle="modal" data-target="#myModal">
                                                                                                <a onclick="$('#delete-link').attr('href','<?php echo base_url(); ?>delete/city/<?php echo $data->location_id; ?>')" >
                                                                                                    <i class="fa fa-trash" aria-hidden="true" style="color: red;cursor: pointer" class="d-inline-block"data-toggle="tooltip" 
                                                                                                       data-placement="top" title="Remove!">
                                                                                                   </i>
                                                                                                </a>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php
                                                                                    }
                                                                                    ?>

                                                                                </tbody>
                                                                            </table>
                                                                            <div id="myModal" class="modal fade" role="dialog">
                                                                                <div class="modal-dialog" style="z-index: 9999;">

                                                                                    <!-- Modal content-->
                                                                                    <div class="modal-content" >
                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                            <h4 class="modal-title">Confirmation </h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>Are You Sure Want to Delete City ?</p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                           <a class="btn btn-danger" id="delete-link" style="color: #fff;">Yes, Delete</a>
                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </section>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
            <!--SCRIPT FILES-->
            <?php $this->load->view('admin/footerscript'); ?>

        </div>
    </body>

</html>
