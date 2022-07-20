<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Feedback - Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('hederlink'); ?>
        <style type="text/css">
            .error-msg + p
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

                    <div class="con-com">
                        <div class="cpn-pag-form">
                            <form action="" method="post" name="feedback">
                                <h3>Feedback Form</h3>
                                <div>
                                    <div class="input-field col s12">
                                        <input id="gfc_name" type="text" class="validate" name="name" value="<?php 
                                        if (!isset($success) && set_value('feedback'))
                                        {
                                            echo set_value('feedback');
                                        }
                                        ?>">
                                        <p class="error-msg">
                                            <?php
                                                echo form_error('name');
                                            ?>
                                        </p>
                                        <label for="gfc_name">Name</label>
                                    </div>
                                </div>

                                <div>
                                    <div class="input-field col s12">
                                        <textarea id="gfc_msg" class="validate" name="message"><?php 
                                        if (!isset($success) && set_value('feedback'))
                                        {
                                            echo set_value('feedback');
                                        }
                                        ?></textarea>
                                        <p class="error-msg">
                                            <?php
                                            echo form_error('message');
                                            ?>
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

                </div>
            </div>
        </section>
        <!--MOBILE APP-->
        <?php $this->load->view('footer'); ?>
        <!--SCRIPT FILES-->
        <?php $this->load->view('footerscript'); ?>
    </body>
</html>