<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('admin/head'); ?>
    <style>
        .pr
        {
            height: 20px;
        }
    </style>

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
                                <a href="<?php echo base_url('admin-dashboard'); ?>">
                                    <img src="assert/images/icon/zr19.gif" alt=""> Home
                                </a> 
                            </li>
                            <li class="active-bre"><a>Business</a></li>
                            <li class="active-bre"><a>View All Business</a></li>
                        </ul>
                    </div>

                    <div class="tz-2 tz-2-admin">
                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center;">View All Business</h4>

                            <div style="padding: 15px;">

                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Status</th>
                                            <th>Remove</th>

					    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach($business as $data)
                                        {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td style="text-align: center;vertical-align: middle;"><?php echo $no; ?></td>
                                                <td style="text-align: center;vertical-align: middle; height: 60px;" class="center hidden-xs"> <a class="d-inline-block" >
                                                        <?php 
                                                            if(strlen($data->profile_pic)>0)
                                                            {
                                                        ?>
                                                        <img class="pr" src="<?php echo base_url().$data->profile_pic; ?>"    alt="" data-toggle="tooltip" data-placement="top" title="<?php echo $data->name; ?>">
                                                        <?php
                                                            }
                                                            else
                                                            {
                                                        ?>
                                                        <img  class="pr"src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg" alt="" data-toggle="tooltip" data-placement="top" title="<?php echo $data->name; ?>"> 
                                                        <?php
                                                            }    
                                                        ?>
                                                    </a>
                                                </td>
                                                <td style="text-align: center;vertical-align: middle;"><?php echo $data->name; ?></td>
                                                <td style="text-align: center;vertical-align: middle;"><a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=<?php echo $data->email; ?>" target="_blank" ><?php echo $data->email; ?></a></td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    <?php 
                                                        $city = $data->location_id;
                                                        $citydata = $this->md->my_query("SELECT ct.`name` AS 'city' , s.`name` AS  'state' FROM `tbl_location` AS ct , `tbl_location` AS s WHERE  s.`location_id` = ct.`parent_id` AND ct.`location_id` = $city")[0];
                                                    ?>
                                                    <?php echo $citydata->state; ?>
                                                </td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    <?php echo $citydata->city; ?>
                                                </td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    <?php
                                                        if($data->status == 0)
                                                        {
                                                    ?>
                                                    <i id="business<?php echo $data->business_id; ?>" onclick="change_status('business','<?php echo $data->business_id; ?>')" style="cursor: pointer;" class="fa fa-toggle-off " data-toggle="tooltip" data-placement="top" title="Deactive!"></i> 
                                                    <?php
                                                        }   
                                                        else
                                                        {
                                                    ?>
                                                    <i id="business<?php echo $data->business_id; ?>" onclick="change_status('business','<?php echo $data->business_id; ?>')" style="color: #c72727;cursor: pointer;" class="fa fa-toggle-on " data-toggle="tooltip" data-placement="top" title="Active!"></i> 
                                                    <?php
                                                        }    
                                                    ?>
                                                    
                                                </td>
                                                <td style="vertical-align: middle;text-align: center"  data-toggle="modal" data-target="#myModal"> 
                                                    <a  onclick="$('#delete-link').attr('href','<?php echo base_url(); ?>delete/business/<?php echo $data->business_id; ?>')">
                                                        <i class="fa fa-trash" aria-hidden="true" style="color: red;cursor: pointer" class=""data-toggle="tooltip"title="Remove Data" title=""></i>
                                                    </a>
                                                </td>
						
						<!--<td style="text-align: center;vertical-align: middle;"><?php echo $this->encryption->decrypt($data->password); ?></td> -->
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
                                                <p>Are You Sure Want to Delete Member ?</p>
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

                </div>
            </div>
            <!--SCRIPT FILES-->
            <?php $this->load->view('admin/footerscript'); ?>

        </div>
    </body>

</html>