<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('business/head'); ?>
<head>
	<?php $this->load->view('business/hedar'); ?>
</head>

<body>
    <div style="margin-top: 50px;"></div>
     <?php $this->load->view('business/menu'); ?>
	<div>   
            <div>
                <div class="sb2-2" style="min-height: 1000px;">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
                                            <li><a href="<?php echo base_url('business-dashboard'); ?>"><img src="assert/images/icon/zr19.gif" alt=""></i> Home</a> </li>
						<li class="active-bre"><a href="#"> My Review</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4 style="text-align: center">My Review</h4>
						<!-- Dropdown Structure -->
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp ad-inn-page">
									<div class="tab-inn ad-tab-inn">
										<div class="table-responsive">
											<table class="table table-hover">
												<thead>
													<tr>
														<th>No</th>
														<th>User Name</th>
														<th>Profile Pic</th>
														<th>Review</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
                                                                                                    <?php 
                                                                                                        $review = $this->md->my_select('tbl_review','*',array('business_id'=>$this->session->userdata( 'business' )));
                                                                                                        $no = 0;
                                                                                                        foreach( $review as $data )
                                                                                                        {
                                                                                                            $no++;
                                                                                                            $user = $this->md->my_select('tbl_register','*',array('register_id'=>$data->register_id))[0];
                                                                                                            $business = $this->md->my_select('tbl_business','*',array('business_id'=>$data->business_id))[0];
                                                                                                            
                                                                                                    ?>
													<tr>
														<td style="text-align: center;vertical-align: middle;"><?php echo $no; ?></td>
                                                                                                                <td style="text-align: center;vertical-align: middle;"><?php echo $user->name;?></td>
                                                                                                                <td>
                                                                                                                    <span class="list-img">
                                                                                                                        <?php 
                                                                                                                            if(strlen($user->profile_pic) > 0)
                                                                                                                            {
                                                                                                                        ?>
                                                                                                                        <img src="<?php echo base_url().$user->profile_pic; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $user->name; ?>" style="width: 70px;height: 70px;"/>
                                                                                                                        <?php
                                                                                                                            }   
                                                                                                                            else
                                                                                                                            {
                                                                                                                        ?>
                                                                                                                        <img src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg" style="width: 70px;height: 70px;"/>
                                                                                                                        <?php
                                                                                                                            }    
                                                                                                                        ?>
                                                                                                                    </span>
														</td>
														<td>
                                                                                                                    <?php echo $data->msg; ?>
                                                                                                                </td>
														<td> 
                                                                                                                        <?php
                                                                                                                        if($data->status == 0)
                                                                                                                        {
                                                                                                                    ?>
                                                                                                                    <span class="label label-danger">Pending / Blocked</span>
                                                                                                                    <?php
                                                                                                                        }   
                                                                                                                        else
                                                                                                                        {
                                                                                                                    ?>
                                                                                                                    <span class="label label-success">Active</span>
                                                                                                                    <?php
                                                                                                                        }    
                                                                                                                    ?>
                                                                                                                </td>
													</tr>
                                                                                                    <?php    
                                                                                                        }
                                                                                                    ?>
												</tbody>
											</table>
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
	<?php $this->load->view('business/footerscript'); ?>
</body>
</html>