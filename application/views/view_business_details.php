<?php
$wh['business_id'] = $this->uri->segment(2);
$detail = $this->md->my_select('tbl_business', '*', $wh)[0];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $detail->name; ?> - Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        $this->load->view('hederlink');
        ?>
        <link href="<?php echo base_url(); ?>assert/css/star-rating.min.css" rel="stylesheet" type="text/css"/>
        
    </head>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <!--TOP SEARCH SECTION-->
        <?php
        $this->load->view('heder');
        ?>
        <!--LISTING DETAILS-->
        <section class="pg-list-1">
            <div class="container">
                <div class="row">
                    <div class="pg-list-1-left"> <a href="#"><h3><?php echo $detail->name; ?></h3></a>

                        <div class="list-rat-ch"> 

                            <?php
                            $totalrate = $this->md->my_query("SELECT SUM(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=" . $detail->business_id)[0]->rate;
                            $totalrecord = $this->md->my_query("SELECT COUNT(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=" . $detail->business_id)[0]->rate;

                            if ($totalrate == "") {
                                $avg = 0;
                            } else {
                                $avg = round($totalrate / $totalrecord);
                            }

                            for ($i = 1; $i <= $avg; $i++) {
                                ?>
                                <i class="fa fa-star" aria-hidden="true"></i> 
                                <?php
                            }
                            $blank = 5 - $avg;
                            for ($i = 1; $i <= $blank; $i++) {
                                ?>
                                <i class="fa fa-star-o" aria-hidden="true"></i> 
                                <?php
                            }
                            ?>
                            <span><?php echo $avg; ?></span>
                        </div>
                        <?php
                        $city = $detail->location_id;
                        $ctt = $this->md->my_query("SELECT ct.`name` AS 'city' , s.`name` AS  'state' FROM `tbl_location` AS ct , `tbl_location` AS s WHERE  s.`location_id` = ct.`parent_id` AND ct.`location_id` = $city")[0];
                        ?>
                        <h4><?php echo $ctt->city; ?>, <?php echo $ctt->state; ?></h4>
                        <p><b>Address:</b> <?php echo $detail->address; ?></p>
                        <div class="list-number pag-p1-phone">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo $detail->contact_no; ?>"><?php echo $detail->contact_no; ?></a></li>
                                <li><i class="fa fa-envelope"></i> <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=<?php echo $detail->email; ?>" target="_blank" ><?php echo $detail->email; ?></a></li>
                                <li><i class="fa fa-user" aria-hidden="true"></i> <?php echo $detail->owner_name; ?></li>
				<li><i class="fa fa-link" aria-hidden="true"></i> <a href="https://<?php echo $detail->website; ?>"><?php echo $detail->website; ?></a></li>
				
                            </ul>
                        </div>
                    </div>
                    <div class="pg-list-1-right">
                        <div class="list-enqu-btn pg-list-1-right-p1">
                            <ul>
                                <li><a href="#review-form"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                <li><a target="_new" href="https://api.whatsapp.com/send?phone=91<?php echo $detail->contact_no; ?>&text=How%20May%20I%20Help%20You%20%F0%9F%99%82"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</a> </li>
                                <li><a href="#inq"><i class="fa fa-phone" aria-hidden="true"></i> Inquiry Now</a> </li>
                                <li id="followbtn">
                                    <?php
                                    if ($this->session->userdata('user')) {
                                        $follow['register_id'] = $this->session->userdata('user');
                                        $follow['business_id'] = $detail->business_id;

                                        $count = count($this->md->my_select('tbl_follow', '*', $follow));

                                        if ($count == 0) {
                                            ?>
                                            <a style="cursor: pointer" onclick="add_follow(<?php echo $detail->business_id; ?>);"><i class="fa fa-plus-square" aria-hidden="true"></i> Follow</a> 
                                            <?php
                                        } else {
                                            ?>
                                            <a style="cursor: pointer" data-dismiss="modal" title="Following!"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Following!</a> 
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <a href="<?php echo base_url('login'); ?>"><i class="fa fa-plus" aria-hidden="true"></i> Follow</a> 
                                        <?php
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-pg-bg">
            <div class="container">
                <div class="row">
                    <div class="com-padd">
                        <div class="list-pg-lt list-page-com-p">
                            <!--LISTING DETAILS: LEFT PART 1-->
                            <div class="pglist-p1 pglist-bg pglist-p-com" id="ld-abour">
                                <div class="pglist-p-com-ti">
                                    <h3><span>About</span> <?php echo $detail->name; ?></h3> </div>
                                <div class="list-pg-inn-sp">
                                    <p><?php echo $detail->description; ?></p>

                                </div>
                            </div>
                            <!--END LISTING DETAILS: LEFT PART 1-->
                            <!--LISTING DETAILS: LEFT PART 3-->
                            <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-gal">
                                <div class="pglist-p-com-ti">
                                    <h3><span>Photo</span> Gallery</h3> </div>
                                <div class="list-pg-inn-sp">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <?php
                                                $c=0;
                                                $wh['business_id'] = $this->uri->segment(2);
                                                $photo = $this->md->my_select('tbl_gallary','*',$wh);
                                                foreach($photo as $data)
                                                {
                                                    $c++;
                                            ?>
                                            <div class="item <?php if( $c==1 ){ echo "active"; } ?>"> 
                                                <img src="<?php echo base_url().$data->path; ?>" alt="Los Angeles"> 
                                            </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left list-slider-nav" aria-hidden="true"></i> </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right list-slider-nav list-slider-nav-rp" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!--END LISTING DETAILS: LEFT PART 3-->
                            <!--END 360 DEGREE MAP: LEFT PART 8-->
                            <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-vie">
                                <div class="pglist-p-com-ti">
                                    <h3><span>Our </span> Location</h3> </div>
                                <div class="list-pg-inn-sp list-360">
                                    <iframe src="<?php echo $detail->iframe; ?>" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!--END 360 DEGREE MAP: LEFT PART 8-->
                            
                            <!--LISTING DETAILS: LEFT PART 4-->
                            <?php
                            if ($this->session->userdata('user')) {
                                $ins['register_id'] = $this->session->userdata('user');
                                $ins['business_id'] = $detail->business_id;

                                $count = count($this->md->my_select('tbl_recent_view', '*', $ins));

                                if ($count == 0) {
                                    $this->md->my_insert('tbl_recent_view', $ins);
                                }
                                ?>
                                <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-roo">
                                    <div class="pglist-p-com-ti">
                                        <h3><span>Recent</span> View Business</h3> </div>
                                    <div class="list-pg-inn-sp">
                                        <?php
                                        $wee['register_id'] = $this->session->userdata('user');
                                        $wee['business_id !='] = $detail->business_id;
                                        $recent = $this->md->my_select('tbl_recent_view', '*', $wee);
                                        foreach ($recent as $single) {

                                            $data = $this->md->my_select('tbl_business', '*', array('business_id' => $single->business_id))[0];
                                            ?>
                                            <div class="home-list-pop list-spac list-spac-1 list-room-mar-o">
                                                <!--LISTINGS IMAGE-->
                                                <div class="col-md-3"> 
                                                    <img src="<?php echo base_url() . $data->profile_pic; ?>" alt="" /> 
                                                </div>
                                                <!--LISTINGS: CONTENT-->
                                                <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> 
                                                    <a href="<?php echo base_url(); ?>view-business-details/<?php echo $data->business_id; ?>">
                                                        <h3><?php echo $data->name; ?></h3>
                                                    </a>
                                                    <h4>
                                                        <?php
                                                        $city = $data->location_id;
                                                        $ctt = $this->md->my_query("SELECT ct.`name` AS 'city' , s.`name` AS  'state' FROM `tbl_location` AS ct , `tbl_location` AS s WHERE  s.`location_id` = ct.`parent_id` AND ct.`location_id` = $city")[0];
                                                        ?>
                                                        <?php echo $ctt->city; ?> , <?php echo $ctt->state; ?>
                                                    </h4>
                                                    <p><b>Address:</b> <?php echo $data->address; ?></p>
                                                    <div class="list-number">
                                                        <ul>
                                                            <li><img src="<?php echo base_url(); ?>assert/images/icon/phone.png" alt=""><?php echo $data->contact_no; ?></li>
                                                            <li><img src="<?php echo base_url(); ?>assert/images/icon/mail.png" alt=""><?php echo $data->email; ?></li>
                                                        </ul>
                                                    </div>  <?php 
                                        $totalrate = $this->md->my_query("SELECT SUM(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=".$data->business_id)[0]->rate;
                                        $totalrecord = $this->md->my_query("SELECT COUNT(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=".$data->business_id)[0]->rate;
                                            if( $totalrate == "" )
                                            {
                                                $avg = 0;
                                            }   
                                            else
                                            {   
                                                $avg = round($totalrate/$totalrecord);
                                            }

                                    ?>
                                    <span class="home-list-pop-rat"><?php echo $avg; ?></span>
						    
                                                    <div class="list-enqu-btn">
                                                        <ul>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li class="right"><a href="<?php echo base_url(); ?>view-business-details/<?php echo $data->business_id; ?>"><i class="" aria-hidden="true"></i> View Detail</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <!--LISTING DETAILS: LEFT PART 6-->
                            <?php
                            if ($this->session->userdata('user')) {
                                $user = $this->md->my_select('tbl_register', '*', array('register_id' => $this->session->userdata('user')))[0];
                                ?>
                                <div class="pglist-p3 pglist-bg pglist-p-com" id="review-form">
				    <form>
                                    <div class="pglist-p-com-ti">
                                        <h3><span>Write Your</span> Reviews</h3> 
                                    </div>
                                    <div class="list-pg-inn-sp">
                                        <div class="list-pg-write-rev">
                                            <div></div>

                                            <p>Writing great reviews may help others discover the places that are just apt for them. Here are a few tips to write a good review:</p>
                                            <div class="row" style="margin-left: 1px;">
                                                <div> 
                                                    <?php
                                                    if (strlen($user->profile_pic) > 0) {
                                                        ?>
                                                        <img src="<?php echo base_url() . $user->profile_pic; ?>" style="width: 100px;height: 100px;border-radius: 100px;"/>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg" style="width: 100px;height: 100px;border-radius: 100px;"/>
                                                        <?php
                                                    }
                                                    ?>
                                                    <br><br>
                                                    <h5 style="text-transform: capitalize"><?php echo $user->name; ?></h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12">
                                                    <input id="input-id" name="rating" type="text" class="rating rating-loading" data-min="0" data-max="5">
                                                </div>
                                            </div>
					    
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea style="min-height: 90px;" id="review" class="materialize-textarea"></textarea>
                                                   <label for="re_msg">Write review</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <button type="submit" onclick="add_review(<?php echo $detail->business_id; ?>);"class="btn btn-primary col-md-12"> Submit Review</button>
                                                <p style="color: red;font-size: 13px;margin-left: 1px;" id="review-error"></p>
                                                <p style="color: green;font-size: 13px;margin-left: 1px;" id="review-success"></p>
                                            </div>

                                        </div>
                                    </div>
				    </form>
                                </div>
                                <?php
                            }
                            ?>
                            <!--END LISTING DETAILS: LEFT PART 6-->
                            <!--LISTING DETAILS: LEFT PART 5-->
                            <div class="pglist-p3 pglist-bg pglist-p-com" id="ld-rer">
                                <div class="pglist-p-com-ti">
                                    <h3><span>User</span> Reviews</h3> </div>
                                <div class="list-pg-inn-sp">
                                    <div class="lp-ur-all">
                                        <div class="lp-ur-all-left">
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Excellent</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13"></div>
                                                </div>
                                            </div>
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Good</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13 lp-ur-all-left-Good"></div>
                                                </div>
                                            </div>
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Satisfaction</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13 lp-ur-all-left-satis"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="lp-ur-all-left-1">
                                                <div class="lp-ur-all-left-11">Below Average</div>
                                                <div class="lp-ur-all-left-12">
                                                    <div class="lp-ur-all-left-13 lp-ur-all-left-poor"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lp-ur-all-right">
                                            <h5>Overall Ratings</h5>
                                            <?php
                                            $totalrate = $this->md->my_query("SELECT SUM(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=" . $detail->business_id)[0]->rate;
                                            $totalrecord = $this->md->my_query("SELECT COUNT(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=" . $detail->business_id)[0]->rate;

                                            if ($totalrate == "") {
                                                $avg = 0;
                                            } else {
                                                $avg = round($totalrate / $totalrecord);
                                            }
                                            ?>
                                            <p><span> <?php echo $avg; ?> <i class="fa fa-star" aria-hidden="true"></i></span> based on <?php echo $totalrecord; ?> reviews</p>
                                        </div>
                                    </div>
                                    <div class="lp-ur-all-rat">
                                        <h5>Reviews</h5>
                                        <ul>
                                            <?php
                                            $review = $this->md->my_select('tbl_review', '*', array('status' => 1, 'business_id' => $detail->business_id));
                                            foreach ($review as $data) {
                                                $user = $this->md->my_select('tbl_register', '*', array('register_id' => $data->register_id))[0];
                                                ?>
                                                <li>
                                                    <div class="lr-user-wr-img"> 
                                                        <?php
                                                        if (strlen($user->profile_pic) > 0) {
                                                            ?>
                                                            <img src="<?php echo base_url() . $user->profile_pic; ?>" style="width: 40px;height: 40px;"/>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <img src="<?php echo base_url(); ?>member-assert/images/blackuser.jpg" style="width: 40px;height: 40px;"/>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="lr-user-wr-con">
                                                        <h6><?php echo $user->name; ?> <span><?php echo $data->rating; ?> <i class="fa fa-star" aria-hidden="true"></i></span></h6> <span class="lr-revi-date"><?php echo date('d-m-Y h:i:s', strtotime($data->date)); ?></span>
                                                        <p><?php echo $data->msg; ?></p>

                                                    </div>
                                                </li>

                                                <?php
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--END LISTING DETAILS: LEFT PART 5-->
                        </div>
                        <div class="list-pg-rt">
                            <!--LISTING DETAILS: LEFT PART 7-->

                            <!--END LISTING DETAILS: LEFT PART 7-->
                            <!--LISTING DETAILS: LEFT PART 9-->
                            <div class="pglist-p3 pglist-bg pglist-p-com">
                                <div class="pglist-p-com-ti pglist-p-com-ti-right">
                                    <h3><span>Other</span> Informations</h3> </div>
                                <div class="list-pg-inn-sp">
                                    <div class="list-pg-oth-info">
                                        <ul>
                                            <?php
                                                $time = strtolower($detail->open_closing_time);
                                                $tt = explode("to", $time);
                                            ?>
                                            <li>Open Time <span><?php echo $tt[0]; ?></span> </li>
                                            <li>Close Time <span><?php echo $tt[1]; ?></span> </li>
                                            <?php
                                                $day = explode(",",$detail->weekday);
                                                
                                                if(in_array("monday", $day) )
                                                {
                                                    echo '<li>Monday <span class="green-bg">Open</span> </li>';
                                                }
                                                else
                                                {
                                                    echo '<li>Monday <span class="red-bg" style="background: red;color:#fff;" >Closed</span> </li>';
                                                }
                                                
                                                if(in_array("tuesday", $day) )
                                                {
                                                    echo '<li>Tuesday <span class="green-bg">Open</span> </li>';
                                                }
                                                else
                                                {
                                                    echo '<li>Tuesday <span class="red-bg" style="background: red;color:#fff;" >Closed</span> </li>';
                                                }
                                                
                                                if(in_array("wedenesday", $day) )
                                                {
                                                    echo '<li>Wednesday <span class="green-bg">Open</span> </li>';
                                                }
                                                else
                                                {
                                                    echo '<li>Wednesday <span class="red-bg" style="background: red;color:#fff;" >Closed</span> </li>';
                                                }
                                                
                                                if(in_array("thursday", $day) )
                                                {
                                                    echo '<li>Thursday <span class="green-bg">Open</span> </li>';
                                                }
                                                else
                                                {
                                                    echo '<li>Thursday <span class="red-bg" style="background: red;color:#fff;" >Closed</span> </li>';
                                                }
                                                
                                                if(in_array("friday", $day) )
                                                {
                                                    echo '<li>Friday <span class="green-bg">Open</span> </li>';
                                                }
                                                else
                                                {
                                                    echo '<li>Friday <span class="red-bg" style="background: red;color:#fff;" >Closed</span> </li>';
                                                }
                                                
                                                if(in_array("saturday", $day) )
                                                {
                                                    echo '<li>Saturday <span class="green-bg">Open</span> </li>';
                                                }
                                                else
                                                {
                                                    echo '<li>Saturday <span class="red-bg" style="background: red;color:#fff;" >Closed</span> </li>';
                                                }
                                                
                                                if(in_array("sunday", $day) )
                                                {
                                                    echo '<li>Sunday <span class="green-bg">Open</span> </li>';
                                                }
                                                else
                                                {
                                                    echo '<li>Sunday <span class="red-bg" style="background: red;color:#fff;" >Closed</span> </li>';
                                                }
                                            ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--END LISTING DETAILS: LEFT PART 9-->
                            <div class="pglist-p3 pglist-bg pglist-p-com" id="inq">
                                <div class="pglist-p-com-ti pglist-p-com-ti-right">
                                    <h3><span>Inquery</span> Now</h3> </div>
				<form>
                                <div class="list-pg-inn-sp" style="margin: 20px;">
                                    <div class="list-pg-guar" style="margin: -30px;">
                                        <div style="margin: 15px;">
                                            <input id="name" type="text" placeholder="Name" style="padding: 10px;font-size: 13px;">
                                        </div>
                                        <div style="margin: 15px;">
                                            <input id="email" type="email" placeholder="Email"  style="padding: 10px;font-size: 13px;">
                                        </div>
                                        <div style="margin: 15px;">
                                            <input id="sub" type="text" placeholder="Subject"  style="padding: 10px;font-size: 13px;">
                                        </div>
                                        <div style="margin: 15px;">
                                            <textarea id="msgg" placeholder="Message"  style="padding: 10px;font-size: 13px;border: 2px solid #636363;outline: none;box-shadow: none; "></textarea>
                                        </div>
                                        <button type="submit" onclick="add_inq(<?php echo $detail->business_id; ?>);" class="waves-effect waves-light btn-large full-btn list-pg-btn">Quick Inquiry</button> 
                                        <p style="color: red;font-size: 13px;margin-left: 1px;" id="inq-error"></p>
                                        <p style="color: green;font-size: 13px;margin-left: 1px;" id="inq-success"></p>
                                    </div>
                                </div>
				    </form>
                            </div>
                            <!--LISTING DETAILS: LEFT PART 10-->
                            <div class="list-mig-like">
                                <div class="list-ri-spec-tit">
                                    <h3><span>Related</span> Business</h3> 
                                </div>
                                <?php
                                $we['category_id'] = $detail->category_id;
                                $related = $this->md->my_select('tbl_business', '*', $we);
                                $city = $detail->location_id;
                                $ctt = $this->md->my_query("SELECT ct.`name` AS 'city' , s.`name` AS  'state' FROM `tbl_location` AS ct , `tbl_location` AS s WHERE  s.`location_id` = ct.`parent_id` AND ct.`location_id` = $city")[0];
                                foreach ($related as $reala) {
                                    ?>
                                    <a href="<?php echo base_url(); ?>view-business-details/<?php echo $reala->business_id; ?>" > 
                                        <div class="list-mig-like-com">
                                            <div class="list-mig-lc-img"> 
                                                <img height="100px" src="<?php echo base_url() . $reala->profile_pic; ?>" alt="" />
                                            </div>
                                            <div class="list-mig-lc-con">
                                                <div class="list-rat-ch list-room-rati"> 
                                                    <?php
                                                    $totalrate = $this->md->my_query("SELECT SUM(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=" . $detail->business_id)[0]->rate;
                                                    $totalrecord = $this->md->my_query("SELECT COUNT(`rating`) AS rate FROM `tbl_review` WHERE `business_id`=" . $detail->business_id)[0]->rate;

                                                    if ($totalrate == "") {
                                                        $avg = 0;
                                                    } else {
                                                        $avg = round($totalrate / $totalrecord);
                                                    }

                                                    for ($i = 1; $i <= $avg; $i++) {
                                                        ?>
                                                        <i class="fa fa-star" aria-hidden="true"></i> 
                                                        <?php
                                                    }
                                                    $blank = 5 - $avg;
                                                    for ($i = 1; $i <= $blank; $i++) {
                                                        ?>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i> 
                                                        <?php
                                                    }
                                                    ?>
                                                    <span><?php echo $avg; ?></span>
                                                </div>
                                                <h5><?php echo $reala->name; ?></h5>
                                                <p><?php echo $ctt->city ?> , <?php echo $ctt->state ?></p>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                                ?>

                            </div>
                            <!--END LISTING DETAILS: LEFT PART 10-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FOOTER SECTION-->
        <?php
        $this->load->view('footer');
        ?>

        <?php
        $this->load->view('footerscript');
        ?>

        <script type="text/javascript">

            function add_follow(id)
            {
                $data = {id: id};

                var path = 'http://localhost/cubics/backend/add_follow/';

                $.post(path, $data, function (output) {

                    if (output == 1)
                    {
                        $("#followbtn").html('<a style="cursor: pointer" data-dismiss="modal" title="Following!"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Following!</a> ');
                    }
                });
            }
        </script>
        <script src="<?php echo base_url(); ?>assert/js/star-rating.min.js" type="text/javascript"></script>
        <script>
            function add_review(id)
            {
                $("#input-id").rating();

                var rate = $("#input-id").val();
                var msg = $("#review").val();

                if (rate == "" || msg == "")
                {
                    $("#review-error").html('..Please Enter Details Properly.');
                } else
                {
                    var data = {id: id, rate: rate, msg: msg};
                    var path = "http://localhost/cubics/backend/add_review/";

                    $.post(path, data, function (output) {


                        if (output == "0")
                        {
                            $("#review-error").html('Someting Went Wrong. Try Again.');
                        }
                        if (output == "1")
                        {
                            $("#review-success").html('..Thank You for Giving Review.');
                        }

                    });
                }

            }
            
            function add_inq(id)
            {
                var name = $("#name").val();
                var email = $("#email").val();
                var sub = $("#sub").val();
                var msg = $("#msgg").val();
                
                if( name == "" || email == "" || sub == "" || msg == "" )
                {
                    $("#inq-error").html('Please Enter Details Properly.');
                }    
                else
                {
                    var data = {id: id, name: name, email: email, sub: sub,msg: msg };
                    var path = "http://localhost/cubics/backend/add_inq/";
                   
                   $.post(path, data, function (output) {


                        if (output == "0")
                        {
                            $("#inq-error").html('Someting Went Wrong. Try Again.');
                        }
                        if (output == "1")
                        {
                            $("#inq-success").html('Thank You for Inquery.');
                        }

                    });
                   
                }    
                
            }
        </script>

    </body>
</html>