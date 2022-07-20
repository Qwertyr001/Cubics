<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Search Your Business In Cubics - Sector Of Business.</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        $this->load->view('hederlink');
        ?>
        
    </head>
    <body>
        <?php
        $this->load->view('heder');
        
        $banner = $this->md->my_select('tbl_banner')[0]->path;
        ?>
        
        <section id="background1" class="dir1-home-head" style="background: url('<?php echo base_url().$banner; ?>') no-repeat !important;">
            <div class="container dir-ho-t-sp">
                <div class="row">
                    <div class="dir-hr1">
                        <div class="dir-ho-t-tit dir-ho-t-tit-2">
                            <h1>Connect with the right Service Experts</h1> 
                            <p>Find B2B & B2C businesses contact addresses, phone numbers,<br> user ratings and reviews.</p>
                        </div>
                            <div class="input-field col-md-7">
                                <input type="text" id="select-search" class="autocomplete">
                                <label for="select-search" class="search-hotel-type" style="margin-left: 30px;margin-top: 5px;">Search</label>
                            </div>
                            <div class="input-field col-md-3">
                                <input type="submit" onclick="main_search();" value="search" class="waves-effect waves-light tourz-sear-btn"> 
                            </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!--FIND YOUR SERVICE-->
        <section class="cat-v2-hom com-padd mar-bot-red-m30">
            <div class="container">
                <div class="row">
                    <div class="com-title">
                        <h2>Find your <span>Services</span></h2>
                        <p>Explore some of the best business from around the world from our partners and friends.</p>
                    </div>
                    <div class="cat-v2-hom-list">
                        <ul>
                            <?php 
                                $categorydata =$this->md->my_select('tbl_category','*');
                                foreach( $categorydata as $data )
                                {    
                            ?>
                            <li>
                                <a href="<?php echo base_url(); ?>view-business/category/<?php echo $data->category_id; ?>"><img src="<?php echo base_url().$data->path; ?>" alt=""> <?php echo $data->name; ?></a>
                            </li>
                            <?php 
                                }
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--BEST THINGS-->
        <section class="com-padd com-padd-redu-bot1">
            <div class="container dir-hom-pre-tit">
                <div class="row">
                    <div class="com-title">
                        <h2>Recently Arrival  <span>Business</span></h2>
                        <p>Explore some of the best tips from around the world from our partners and friends.</p>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <?php 
                                $business = $this->md->my_query("SELECT b.* FROM `tbl_business` AS b , `tbl_category` AS c WHERE b.`category_id` AND c.`category_id` = 1 AND b.status = 1 ORDER BY b.`business_id` DESC LIMIT 0,5");
                                foreach( $business as $data )
                                {
                            ?>
                            <!--POPULAR LISTINGS-->
                            <div class="home-list-pop">
                                <!--POPULAR LISTINGS IMAGE-->
                                <div class="col-md-3"> <img src="<?php echo base_url().$data->profile_pic; ?>" alt="" /> </div>
                                <!--POPULAR LISTINGS: CONTENT-->
                                <div class="col-md-9 home-list-pop-desc"> <a href=""><h3><?php echo $data->name; ?></h3></a>
                                    <?php 
                                        $city = $data->location_id;
                                        $ctt = $this->md->my_query("SELECT ct.`name` AS 'city' , s.`name` AS  'state' FROM `tbl_location` AS ct , `tbl_location` AS s WHERE  s.`location_id` = ct.`parent_id` AND ct.`location_id` = $city")[0];
                                    ?>
                                                                                        
                                    <h4><?php echo $ctt->city; ?> , <?php echo $ctt->state; ?></h4>
                                    <p><?php echo $data->address; ?></p> 
                                    <?php 
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
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <?php 
                                $business = $this->md->my_query("SELECT b.* FROM `tbl_business` AS b , `tbl_category` AS c WHERE b.`category_id` AND c.`category_id` = 1 AND b.status = 1 ORDER BY b.`business_id` DESC LIMIT 5,5");
                                foreach( $business as $data )
                                {
                            ?>
                            <!--POPULAR LISTINGS-->
                            <div class="home-list-pop">
                                <!--POPULAR LISTINGS IMAGE-->
                                <div class="col-md-3"> <img src="<?php echo base_url().$data->profile_pic; ?>" alt="" /> </div>
                                <!--POPULAR LISTINGS: CONTENT-->
                                <div class="col-md-9 home-list-pop-desc"> <a href=""><h3><?php echo $data->name; ?></h3></a>
                                    <?php 
                                        $city = $data->location_id;
                                        $ctt = $this->md->my_query("SELECT ct.`name` AS 'city' , s.`name` AS  'state' FROM `tbl_location` AS ct , `tbl_location` AS s WHERE  s.`location_id` = ct.`parent_id` AND ct.`location_id` = $city")[0];
                                    ?>
                                                                                        
                                    <h4><?php echo $ctt->city; ?> , <?php echo $ctt->state; ?></h4>
                                    <p><?php echo $data->address; ?></p> 
                                    <?php 
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
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--FOOTER SECTION-->
    <?php
    $this->load->view('footer');
    ?>
    <!--QUOTS POPUP-->
    <section>
        <!-- GET QUOTES POPUP -->
        <div class="modal fade dir-pop-com" id="list-quo" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header dir-pop-head">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Get a Quotes</h4>
                        <!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
                    </div>
                    <div class="modal-body dir-pop-body">
                        <form method="post" class="form-horizontal">
                            <!--LISTING INFORMATION-->
                            <div class="form-group has-feedback ak-field">
                                <label class="col-md-4 control-label">Full Name *</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="fname" placeholder="" required> </div>
                            </div>
                            <!--LISTING INFORMATION-->
                            <div class="form-group has-feedback ak-field">
                                <label class="col-md-4 control-label">Mobile</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="mobile" placeholder=""> </div>
                            </div>
                            <!--LISTING INFORMATION-->
                            <div class="form-group has-feedback ak-field">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="email" placeholder=""> </div>
                            </div>
                            <!--LISTING INFORMATION-->
                            <div class="form-group has-feedback ak-field">
                                <label class="col-md-4 control-label">Message</label>
                                <div class="col-md-8 get-quo">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <!--LISTING INFORMATION-->
                            <div class="form-group has-feedback ak-field">
                                <div class="col-md-6 col-md-offset-4">
                                    <input type="submit" value="SUBMIT" class="pop-btn"> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SCRIPT FILES-->
    <?php
    $this->load->view('footerscript');
    ?>
    <script type="text/javascript">
        function main_search()
        {
            var search_val = document.getElementById('select-search').value;
            window.location.href = "http://localhost/cubics/view-business/search/"+search_val; 
        }
    </script>
</body>

</html>