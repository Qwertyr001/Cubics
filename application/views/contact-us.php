<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us - Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('hederlink'); ?>
        <style>
            .error-msg +p
            {
                color: red;
                font-size: 13px;
            }    
        </style>

    </head>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <?php $this->load->view('heder'); ?>
        <section>
            <div class="con-page">
                <div class="con-page-ri">
                    <div class="con-com" style="padding-bottom: 35px;">
                        <h4 class="con-tit-top-o">Address & Contact Info</h4>
                        <p>Vrajbhumi 2 Chikuwadi, Post. Chala, Taluka. Vapi, Dist-Valsad-396191, Gujarat.</p> <span><img src="<?php echo base_url(); ?>assert/images/icon/phone.png" alt="" /><a href="tel:+919429646472"> Phone: +91 9429646472</a></span> <span><img src="<?php echo base_url(); ?>assert/images/icon/mail.png" alt="" /><a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=Cubics247@gmail.com" target="_blank"> Email: Cubics247@gmail.com</a></span>
                        <h4>Follow us on</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Content here</p>
                        <div class="foot-social ul li i">
                            <ul>
                                <li><a target="_new" href="https://www.facebook.com/cubics24/"><i class="fa fa-facebook" aria-hidden="true" ></i></a> </li>
                                <li><a target="_new" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=Cubics247@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a> </li>
                                <li><a target="_new" href="https://twitter.com/cubics24"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="con-com">
                        <div class="cpn-pag-form">
                            <form action="" method="post" name="contact">
                                <h3>Contact Us </h3>
                                <p>Fill The Following Form We Will You Connect With In 24/Hours Via Email Or Mobile  </p>
                                <div>
                                    <div class="input-field col s12">
                                        <input id="gfc_name" type="text" class="validate" name="name" value="<?php
                                        if (!isset($success) && set_value('name')) {
                                            echo set_value('name');
                                        }
                                        ?>">
					<p class="error-msg" style="margin-bottom: 1px; padding-top: 1px;"> 
                                            <?php echo form_error('name') ?>
                                        </p>

                                       

                                        <label for="gfc_name">Name</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input id="gfc_mob" type="text" class="validate" name="mobile" value="<?php
                                        if (!isset($success) && set_value('number')) {
                                            echo set_value('number');
                                        }
                                        ?>">

                                        <p class="error-msg" style="margin-bottom: 1px; padding-top: 1px;"> 
                                            <?php echo form_error('mobile') ?>
                                        </p>

                                        <label for="gfc_mob">Mobile</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input id="gfc_mob" type="text" class="validate" name="subject" value="<?php
                                        if (!isset($success) && set_value('subject')) {
                                            echo set_value('subject');
                                        }
                                        ?>">
                                       <p class="error-msg" style="margin: 0px 0px;"> 
                                            <?php echo form_error('subject') ?>
                                        </p>
                                        <label for="gfc_mob">Subject</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input id="gfc_mail" type="email" class="validate" name="email" value="<?php
                                        if (!isset($success) && set_value('email')) {
                                            echo set_value('email');
                                        }
                                        ?>">
                                      <p class="error-msg" style="margin: 0px 0px;"> 
                                            <?php echo form_error('email') ?>
                                        </p>
                                        <label for="gfc_mail">Email</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <textarea id="gfc_msg" class="validate" name="message"><?php
                                            if (!isset($success) && set_value('message')) {
                                                echo set_value('message');
                                            }
                                            ?></textarea>
                                        <p class="error-msg" style="margin: 0px 0px;"> 
                                            <?php echo form_error('message') ?>
                                        </p>
                                        <label for="gfc_msg">Message</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="input-field col s12">
                                        <input type="submit" name="add" value="SUBMIT" class="waves-effect waves-light btn-large full-btn list-red-btn" style="background: #2170e8"> </div>
                                </div>
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
                            </form>
                        </div>
                    </div>
                    <div class="con-com con-pag-map con-com-mar-bot-o">
                        <h4 class="con-tit-top-o">Touch with us</h4>

                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.700064320929!2d72.89287211472006!3d20.395252986344964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0d0217c226c55%3A0x65770ddd848a7ca3!2sIDBI%20Bank!5e0!3m2!1sen!2sin!4v1647467173257!5m2!1sen!2sin" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--MOBILE APP-->
        <?php $this->load->view('footer'); ?>
        <!--SCRIPT FILES-->
        <?php $this->load->view('footerscript'); ?>
    </body>
</html> 