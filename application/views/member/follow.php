<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('member/head'); ?>
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
                <?php $this->load->view('member/hedar'); ?>
                <!--== BODY CONTNAINER ==-->
                <div class="container-fluid sb2">
                    <div class="row">
                        <?php $this->load->view('member/menu'); ?>
                        <!--== BODY INNER CONTAINER ==-->
                        <div class="sb2-2" style="min-height: 1000px;">
                            <div class="row">
                                <br/>
                                <!--== breadcrumbs ==-->
                                    <div class="sb2-2-2">
                                        <ul>
                                            <li><a href="<?php echo base_url('member-dashboard'); ?>">
						    <img src="assert/images/icon/zr19.gif" alt="">Home</a> </li>
                                            <li class="active-bre"><a> My Following</a> </li>
                                        </ul>
                                    </div>
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center; ">View My Following</h4>

                            <div style="padding: 15px;">

                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Business</th>
                                            <th>Logo</th>
                                            <th>View Details</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 
                                                $follow = $this->md->my_select('tbl_follow','*',array('register_id'=>$this->session->userdata('user')));
                                                $no = 0;
                                                foreach( $follow as $data )
                                                {
                                                    $no++;
                                                    $name = $this->md->my_select('tbl_business','*',array('business_id'=>$data->business_id))[0]->name;
                                                    $img = $this->md->my_select('tbl_business','*',array('business_id'=>$data->business_id))[0]->profile_pic;
                                            ?>
                                            <tr>
                                                <td style="text-align: center;vertical-align: middle;"><?php echo $no; ?></td>
                                                <td style="text-align: center;vertical-align: middle;"><?php echo $name; ?></td>
                                                <td style="text-align: center;vertical-align: middle;"><img height="40px;" src="<?php echo base_url().$img; ?>" /></td>
                                                <td style="text-align: center;vertical-align: middle;">
                                                    <a href="<?php echo base_url() ?>view-business-details/<?php echo $data->business_id; ?>" target="_new">View Details</a>
                                                </td>
                                                <td style="vertical-align: middle;text-align: center"  data-toggle="modal" data-target="#myModal">
                                                    <a onclick="$('#delete-link').attr('href','<?php echo base_url(); ?>delete/follow/<?php echo $data->follow_id; ?>')" >
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
                                                <p>Are You Sure Want to Delete Follow ?</p>
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



                        </div>
                    </div>

                </div>
            </div>
            <!--SCRIPT FILES-->
            <?php $this->load->view('member/footerscript'); ?>

        </div>
    </body>

</html>
