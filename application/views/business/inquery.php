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
						<li class="active-bre"><a href="#"> My Inquery</a> </li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4 style="text-align: center">My Inquery</h4> 
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
														<th>Email</th>
														<th>Profile Pic</th>
														<th>Title</th>
														<th>Message</th>
													</tr>
												</thead>
												<tbody>
                                                                                                    <?php
                                                                                                        $no = 0 ;
                                                                                                        $inquiry = $this->md->my_select('tbl_inquiry','*',array('business_id'=>$this->session->userdata( 'business' )));
                                                                                                        foreach( $inquiry as $data )
                                                                                                        {
                                                                                                            $no++;
                                                                                                            $user = $this->md->my_select('tbl_register','*',array('register_id'=>$data->register_id))[0];
                                                                                                    ?>
													<tr>
                                                                                                            <td><?php echo $no; ?></td>
                                                                                                            <td><?php echo $user->name; ?></td>
                                                                                                            <td><?php echo $user->email;  ?></td>
                                                                                                            <td>
                                                                                                                <span class="list-img">
                                                                                                                <?php 
                                                                                                                    if(strlen($user->profile_pic) > 0)
                                                                                                                    {
                                                                                                                ?>
                                                                                                                <img src="<?php echo base_url().$user->profile_pic; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $user->name; ?>" style="width: 50px;height: 50px;"/>
                                                                                                                <?php
                                                                                                                    }   
                                                                                                                    else
                                                                                                                    {
                                                                                                                ?>
                                                                                                                <img src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg" style="width: 50px;height: 50px;"/>
                                                                                                                <?php
                                                                                                                    }    
                                                                                                                ?>
                                                                                                                </span>
                                                                                                            </td>
														<td>
                                                                                                                    <span class="list-enq-city"><?php echo $data->title;  ?></span> 
                                                                                                                </td>
														<td>
                                                                                                                    <span class="list-enq-city"><?php echo $data->message;  ?></span> 
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