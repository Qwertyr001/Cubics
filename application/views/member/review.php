<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('member/head'); ?>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--== MAIN CONTRAINER ==-->
        <?php $this->load->view('member/hedar'); ?>
        <!--== BODY CONTNAINER ==-->
        <div class="container-fluid sb2">
            <div class="row">
                <?php $this->load->view('member/menu'); ?>
                <!--== BODY INNER CONTAINER ==-->
                <div class="sb2-2" style="min-height: 1000px;">
                    <!--== breadcrumbs ==-->
                    <div class="sb2-2-2">
                        <ul>
                            <li>
                                <a href="<?php echo base_url('member-dashboard'); ?>">
                                    <img src="assert/images/icon/zr19.gif" alt=""> Home
                                </a> 
                            </li>
                            
                            <li class="active-bre"><a>My Review</a></li>
                        </ul>
                    </div>

                    <div class="tz-2 tz-2-admin">
                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center;">View My Review</h4>

                            <div style="padding: 15px;">

                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Business </th>
                                            <th>Profile</th>
                                            <th>Rating</th>
                                            <th>Review</th>
                                            <th>Status</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                                $review = $this->md->my_select('tbl_review','*',array('register_id'=>$this->session->userdata( 'user' )));
                                                $no = 0;
                                                foreach( $review as $data )
                                                {
                                                    $no++;
                                                    $user = $this->md->my_select('tbl_register','*',array('register_id'=>$data->register_id))[0];
                                                    $business = $this->md->my_select('tbl_business','*',array('business_id'=>$data->business_id))[0];
                                                ?>
                                            <tr>
                                                <td style="text-align: center;vertical-align: middle;"><?php echo $no; ?></td>
                                                <td style="text-align: center;vertical-align: middle;" >
                                                    <img src="<?php echo base_url().$business->profile_pic; ?> " style="width: 100px;height: 100px;" data-toggle="tooltip" data-placement="top" title="<?php echo $business->name; ?>" />
                                                </td>
                                                <td style="text-align: center;vertical-align: middle;" >
                                                    <?php 
                                                        if(strlen($user->profile_pic) > 0)
                                                        {
                                                    ?>
                                                    <img src="<?php echo base_url().$user->profile_pic; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $user->name; ?>" style="width: 100px;height: 100px;"/>
                                                    <?php
                                                        }   
                                                        else
                                                        {
                                                    ?>
                                                    <img src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg" style="width: 100px;height: 100px;"/>
                                                    <?php
                                                        }    
                                                    ?>
                                                </td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    <?php 
                                                        $rate = $data->rating;
                                                        
                                                        for( $i=1 ; $i<=$rate ; $i++ )
                                                        {
                                                    ?>
                                                        <i class="fa fa-star"></i>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    <?php echo $data->msg; ?>
                                                </td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    <?php
                                                        if($data->status == 0)
                                                        {
                                                    ?>
                                                    <span style="color: red;font-size: 13px;">Pending / Blocked</span>
                                                    <?php
                                                        }   
                                                        else
                                                        {
                                                    ?>
                                                    <span style="color: green;font-size: 13px;">Active</span>
                                                    <?php
                                                        }    
                                                    ?>
                                                    
                                                </td>
                                                <td style="vertical-align: middle;text-align: center"  data-toggle="modal" data-target="#myModal"> 
                                                    <a  onclick="$('#delete-link').attr('href','<?php echo base_url(); ?>delete/memberreview/<?php echo $data->review_id; ?>')">
                                                        <i class="fa fa-trash" aria-hidden="true" style="color: red;cursor: pointer"  data-toggle="tooltip" title="Remove Data" ></i>
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
                                                <p>Are You Sure Want to Delete Business Review ?</p>
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
            <?php $this->load->view('member/footerscript'); ?>

        </div>
    </body>

</html>