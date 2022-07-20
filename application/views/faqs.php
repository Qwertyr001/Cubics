<!DOCTYPE html>
<html lang="en">
 <head>
        <title>FAQS-Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAV ICON(BROWSER TAB ICON) -->
        <?php
              $this->load->view('hederlink');
        ?>
<!--        <script>
            $("p").on("click", function () {
                $(this).show();
            });
        </script>-->
        <style>

            .faq-section {
                background: #fdfdfd;
                min-height: 100vh;
                padding: 10vh 0 0;
            }
            .faq-title h2 {
                position: relative;
                margin-bottom: 45px;
                display: inline-block;
                font-weight: 600;
                line-height: 1;
            }
            .faq-title h2::before {
                content: "";
                position: absolute;
                left: 50%;
                width: 60px;
                height: 2px;
                background: #E91E63;
                bottom: -25px;
                margin-left: -30px;
            }
            .faq-title p {
                padding: 0 190px;
                margin-bottom: 10px;
            }

            .faq {
                background: #FFFFFF;
                box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
                border-radius: 4px;
            }

            .faq .card {
                border: none;
                background: none;
                border-bottom: 1px dashed #CEE1F8;
            }

            .faq .card .card-header {
                padding: 0px;
                border: none;
                background: none;
                -webkit-transition: all 0.3s ease 0s;
                -moz-transition: all 0.3s ease 0s;
                -o-transition: all 0.3s ease 0s;
                transition: all 0.3s ease 0s;
            }

            .faq .card .card-header:hover {
                background: rgba(57, 168, 198, 0.1);
                padding-left: 10px;
            }
            .faq .card .card-header .faq-title {
                width: 100%;
                text-align: left;
                padding: 0px;
                padding-left: 30px;
                padding-right: 30px;
                font-weight: 400;
                font-size: 15px;
                letter-spacing: 1px;
                color: #3B566E;
                text-decoration: none !important;
                -webkit-transition: all 0.3s ease 0s;
                -moz-transition: all 0.3s ease 0s;
                -o-transition: all 0.3s ease 0s;
                transition: all 0.3s ease 0s;
                cursor: pointer;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .faq .card .card-header .faq-title .badge {
                display: inline-block;
                width: 20px;
                height: 20px;
                line-height: 14px;
                float: left;
                -webkit-border-radius: 100px;
                -moz-border-radius: 100px;
                border-radius: 100px;
                text-align: center;
                background: #E91E63;
                color: #fff;
                font-size: 12px;
                margin-right: 20px;
            }

            .faq .card .card-body {
                padding: 30px;
                padding-left: 35px;
                padding-bottom: 16px;
                font-weight: 400;
                font-size: 16px;
                color: #6F8BA4;
                line-height: 28px;
                letter-spacing: 1px;
                border-top: 1px solid #F3F8FF;
            }

            .faq .card .card-body p {
                margin-bottom: 14px;
            }

            @media (max-width: 991px) {
                .faq {
                    margin-bottom: 30px;
                }
                .faq .card .card-header .faq-title {
                    line-height: 26px;
                    margin-top: 10px;
                }
            }
        </style>
    </head>
    <body>
        <!--PRE LOADING-->
        <!--        <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>-->
        <!--BANNER AND SERACH BOX-->
        <?php
             $this->load->view('heder');
        ?>
        <section class="inn-page-bg">
            <div class="container">
                <div class="row">
                    <div class="inn-pag-ban">
                        <h2>FAQS</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq-section">
            <div class="container">
                <div class="row">
                    <!-- ***** FAQ Start ***** -->
                    <div class="col-md-10" style="margin-top: -1px;margin-left: 50px">

                        <div class="faq-title text-center pb-3">
                            <h2 style="text-align: center">FAQ</h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge" style="padding: 3px 6px; background: #2170e8;" >1</span>How do I login?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="" aria-labelledby="faqHeading-1" data-parent="#accordion" >
                                    <div class="card-body">
                                        <p>You can click on the Login Button present on the top right corner of the CS Shop page.
                                            In the popup that appears, enter your mobile number and the appropriate password.
                                            You can also login from our Homepage. Click on the Login link present at the top right corner.
                                            In the popup that appears, enter your mobile number and the appropriate password.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge" style="padding: 3px 6px; background: #2170e8;">2</span> How do I change my account details after logging in?

                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You can change the account details from the 'My Account' section.
                                            To access this, click on the down arrow beside your name present at the top right corner and click on 'My Account'.
                                            You could edit your details through the user profile setting section from the new page that opens up.</p>
                                    </div>
                                </div>
                            </div>
                           <!-- <div class="card">
                                <div class="card-header" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge" style="padding: 3px 6px; background: #2170e8;">3</span>How do I save my delivery addresses?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Every time you place an order which is to be delivered to a unique delivery address, we automatically save the address.</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card">
                                <div class="card-header" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge" style="padding: 3px 6px; background: #2170e8;">3</span>How do I change the pre selected city?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>You can change the city from the top left section.</p>
                                    </div>
                                </div>
                            </div>
                            
                           <!-- <div class="card">
                                <div class="card-header" id="faqHeading-6">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                            <span class="badge"style="padding: 3px 6px; background: #2170e8;">6</span> How do I know the shop I've bought the product from?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We send out the details of the vendor through SMS / Email as soon as you place an order with them through Cubics.</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card">
                                <div class="card-header" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge" style="padding: 3px 6px; background: #2170e8;">4</span>  Who will provide me the invoice for my product?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>The vendor from whom you purchased the product will provide you with the invoice for your product.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--FOOTER FILES-->
        <?php
            $this->load->view('footer');
        ?>
        <!--SCRIPT FILES-->
        <?php
            $this->load->view('footerscript');
        ?>

    </body>

</html>

