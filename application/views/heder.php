
<section>
    <div class="v3-top-menu">
        <div class="container">
            <div class="row">
                <div class="v3-menu">
                    <div class="v3-m-1">
                        <a href="<?php echo base_url(); ?>pages">
                            <img src="<?php echo base_url(); ?>assert/images/1.png" alt="" style="width: 125px;margin-top: -1pxs " > 
                        </a>
                    </div>
                    
                    <div class="text-right">
                        <?php 
                            if( $this->session->userdata('user') )
                            {
                        ?>
                        <div class="v3-top-ri v32-top-ri">
                            <ul style="list-style: none"> 
                                <li><a href="<?php echo base_url(); ?>member-logout" class="v3-menu-sign"><i class="fa fa-lock"></i> Logout </a> </li>
                                <li><a href="<?php echo base_url(); ?>member-dashboard" ><i class="fa fa-plus" aria-hidden="true"></i> My Profile</a> </li>
                                <li><a href="<?php echo base_url(); ?>business-register-1" ><i class="fa fa-plus" aria-hidden="true"></i> List Your Business</a> </li>
                            </ul>
                        </div>
                        <?php
                            }  
                            else
                            {
                        ?>
                            <div class="v3-top-ri v32-top-ri">
                                <ul style="list-style: none"> 
                                    <li><a href="<?php echo base_url(); ?>login" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Login </a> </li>
                                    <li><a href="<?php echo base_url(); ?>register" ><i class="fa fa-plus" aria-hidden="true"></i> Register</a> </li>
                                    <li><a href="<?php echo base_url(); ?>business-register-1" ><i class="fa fa-plus" aria-hidden="true"></i> List Your Business</a> </li>
                                </ul>
                            </div>
                        <?php
                            }    
                        ?>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>