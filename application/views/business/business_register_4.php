<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Business-Register-4 - Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('business/hederlink'); ?>
        <style>
            .select-wrapper .caret{
                display: none !important;
            }
            .select-dropdown
            {
                display: none !important;
            }
            .check
            {
                cursor: pointer;
                position: relative;
                margin: auto;
                width: 18px;
                height: 18px;
                -webkit-tap-highlight-color: transparent;
                transform: translate3d(0,0,0);
            }
            &:before
            {
                content: "";
                position: absolute;
                top: -15px;
                left: -15px;
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: rgba(#223254,.03);
                opacity: 0;
                transition: opacity .2s ease;
            }
            svg
            {
                position: relative;
                z-index: 1;
                fill: none;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke: #C8CCD4;
                stroke-width: 1.5;
                transform: translate3d(0,0,0);
                transition: all .2s ease;
            }
            path
            {
                stroke-dasharray: 60;
                stroke-dashoffset: 0;
            }

            polyline 
            {
                stroke-dasharray: 22;
                stroke-dashoffset: 66;
            }
            &:hover, 
            &:before
            {
                opacity: 1;
            }
            svg
            {
                stroke: #4285F4;
            }

        </style>
        <style>
            div.solid {border-style: solid; opacity:0.8}
            .error-msg + p
            {
                color: red;
                font-size: 13px;
            }
        </style>
    </head>

    <body data-ng-app="">
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--TOP SEARCH SECTION-->
        <?php $this->load->view('business/heder'); ?>
        <section class="tz-register">
            <div class="log-in-pop" style="width: 73%">
                <div class="log-in-pop-left" style="padding: 19% 7%;" >
                    <h1>Hello... <span></span></h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes.</p>
                    <h4></h4>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>login" style="background-color: #2170e8;" ><i></i> Login Business</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">

                    <h4>Welcome, <?php echo $this->session->userdata('name'); ?></h4>
                    <form class="s12" action="" name="rigister--4" enctype="multipart/form-data" method="post">

                        <input type="file" name="profile" id="profile" style="display: none;" />
                        <label for="profile" style="width: 100%;">
                            <div style="background: #ddd;border: 1px solid #000;padding: 50px 30px;cursor: pointer">
                                <h3 id="text" style="color: #000;text-align: center">Click To Upload Logo</h3>
                                <img id="blah" />
                            </div>
                        </label>
                        <p class="error-msg">
                            <?php
                                if(isset($photo_err))
                                {
                                    echo $photo_err;
                                }    
                            ?>
                        </p>
                        <div>
                            <div class="input-field s4 left-align" >
                                <a href="<?php echo base_url('business-register-3'); ?>" style="color: black" class="btn btn-primary col-md-6"> < Previous</a> 
                            </div>
                            <div class="input-field s4 right-align" >
                                <input class="btn col-md-6" style="background: #337ab7;width: 50%;height: 37px; border-radius: 10px 10px 10px 10px;color: black" type="submit" name="add" value="Go To Business Panel">
                            </div>
                            
                        </div>
                    </form>    
                </div>
            </div>    
        </section>

        <!--FOOTER SECTION-->
        <?php $this->load->view('business/footer'); ?>
        <!--SCRIPT FILES-->

        <?php $this->load->view('business/footerscript'); ?>
        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $("#text").html('');
                        $('#blah').attr('src', e.target.result).css('width:150px');
                    }

                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

            $("#profile").change(function () {
                readURL(this);
            });
        </script>
    </body>

</html>