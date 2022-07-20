
<footer id="colophon" class="site-footer clearfix">
    <div id="quaternary" class="sidebar-container " role="complementary">
        <div class="sidebar-inner">
            <div class="widget-area clearfix">
                <div id="azh_widget-2" class="widget widget_azh_widget">
                    <div data-section="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5 col-md-3 foot-logo">
                                    <h4>About Cubics</h4>
                                    <!--<img widt src="images/1.png" alt="logo">-->
                                    <p class="hasimg" style="text-align: justify">Welcome to Cubics, your 'one stop shop' where you are assisted with day-to-day and exclusive planning and purchasing activities. We take pride in our iconic customer support number, 9429646472 and the fact that we own a strong</p><a href="<?php echo base_url(); ?>about-us.php" style="color: #ffffff" >Read More</a>
                                </div>
                                <div class="col-sm-5 col-md-3">
                                    <h4>Support & Help</h4>
                                    <ul class="two-columns">
                                        <li> <a href="<?php echo base_url(); ?>about-us">About Us</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>contact-us">Contact Us</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>feedback">Feedback</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>register">Register</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>login">Login</a> </li>
                                        <li> <a href="<?php echo base_url(); ?>faqs">FAQ'S</a> </li>
                                         <li> <a href="<?php echo base_url(); ?>terms_and_condtion">Terms&Condition</a> </li>
                                        
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <h4>Our Services</h4>
                                    <ul class="two-columns">
                                        <?php 
                                            $categorydata =$this->md->my_select('tbl_category','*');
                                            foreach( $categorydata as $data )
                                            {    
                                        ?>
                                        <li> <a href="<?php echo base_url(); ?>view-business/category/<?php echo $data->category_id; ?>"><?php echo $data->name; ?></a> </li>
                                        <?php 
                                            }
                                        ?>
                                        
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.700064320929!2d72.89287211472006!3d20.395252986344964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0d0217c226c55%3A0x65770ddd848a7ca3!2sIDBI%20Bank!5e0!3m2!1sen!2sin!4v1647467173257!5m2!1sen!2sin" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-section="section" class="foot-sec2">
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-4">
                                    <h4>Address</h4>
                                    <p>Vrajbhumi 2 Chikuwadi, Post. Chala, Taluka. Vapi, Dist-Valsad-396191, Gujarat.</p>
                                    <p> <span class="strong">Phone: </span> <span style="color: #a0a0a0"><a href="tel:+919429646472" >+91 9429646472</a></span> </p>
                                    <p> <span class="strong">Email: </span> <span style="color: #a0a0a0"><a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=Cubics247@gmail.com" target="_blank" style="color: #fff">Cubics247@gmail.com</a></span> </p>
                                    
                                </div>
                                <div class="col-sm-5 foot-social">
                                    <h4>Follow with us</h4>
                                    <p>Follow us in following account for more updates and open </p>
                                    <ul>
                                         <li><a target="_new" href="https://www.facebook.com/cubics24/"><i class="fa fa-facebook" aria-hidden=></i></a> </li>
                                        <li><a target="_new" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=Cubics247@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a> </li>
                                        <li><a target="_new" href="https://twitter.com/cubics24"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        
                                        <li><a target="_new" href="https://api.whatsapp.com/send?phone=919429646472&app=facebook&entry_point=page_cta"><i class="fa fa-whatsapp" style="background: green !important" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .widget-area -->
        </div>
        <!-- .sidebar-inner -->
    </div>
    <!-- #quaternary -->
</footer>
<!--COPY RIGHTS-->
<section class="copy">
    <div class="container">
       <p>Copyrights © <?php echo date('Y'); ?> Cubics. All rights reserved. Design by : <a target="_blank" href="https://www.instagram.com/cubics7/" style="color: #fff">Rajdeep Singh</a> </p>
    </div>
</section>