<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('admin/head'); ?>
    <style>
        div.solid {border-style: solid; opacity:0.8}
        .error-msg + p
        {
            color: red;
            font-size: 13px;
        }
    </style>
    <body>
        <div>
            <div>
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>
                <!--== MAIN CONTRAINER ==-->
                <?php $this->load->view('admin/hedar'); ?>
                <!--== BODY CONTNAINER ==-->
                <div class="container-fluid sb2">
                    <div class="row">
                        <?php $this->load->view('admin/menu'); ?>
                        <!--== BODY INNER CONTAINER ==-->
                        <div class="sb2-2" style="min-height: 1000px;">
                            <!--== breadcrumbs ==-->
                            <div class="sb2-2-2">
                                <ul>
                                    <li>
                                        <a href="dashboard.php">
                                            <i class="fa fa-home" aria-hidden="true"></i> Home
                                        </a> 
                                    </li>
                                    <li class="active-bre"><a>Pages</a></li>
                                    <li class="active-bre"><a>Email Subscriber</a></li>
                                </ul>
                            </div>
                            <form action="" method="post" name="email">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 style="text-align: center">View All Subscriber</h4>
                                                        
                                                            <section class="panel">
                                                                <header class="panel-heading">
                                                                    <div class="panel-actions">
                                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                                    </div>
                                                                </header>
                                                                <div class="panel-body">
                                                                    <div class="validation-message">
                                                                        <ul></ul>
                                                                    </div>
                                                                    <div class="form-group">

                                                                        <div class="panel-body" style="margin-top: -38px;">                                                
                                                                            <table id="example" class="table table-striped table-bordered" style="width:105%;">
                                                                                <div class="container"></div>
                                                                                <thead>                                    
                                                                                    <tr>
                                                                                        <th style="vertical-align:middle; text-align: center; width: 15%; "> 
                                                                                            <input id="all" value="all" name="all" style="opacity: 1 !important;position: static !Important;left: 0 !important" type="checkbox">
                                                                                        </th>
                                                                                        <th style="vertical-align:middle; text-align: center;" class="hidden-xs">Email</th>
                                                                                        <th style="vertical-align:middle; text-align: center;" class="hidden-xs">Remove</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <?php
                                                                                    $no = 0;
                                                                                    foreach ($subscriber as $data)
                                                                                    {    
                                                                                        $no++;
                                                                                        ?>
                                                                                        <tr>                                                             
                                                                                            <td style="vertical-align:middle; text-align: center; width: 15%;">
                                                                                                <input  style="opacity: 1 !important;position: static !Important;left: 0 !important" value="<?php echo $data->email; ?>" name="email[]" type="checkbox">
                                                                                            </td>
                                                                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs"><?php echo $data->email; ?></td>
                                                                                            <td style="vertical-align: middle;text-align: center"  data-toggle="modal" data-target="#myModal">
                                                                                                <a onclick="$('#delete-link').attr('href','<?php echo base_url(); ?>delete/subscriber/<?php echo $data->subscriber_id; ?>')">
                                                                                                    <i class="fa fa-trash" aria-hidden="true" style="color: red;cursor: pointer" class=""
                                                                                                        data-toggle="tooltip" title="Remove Data" >
                                                                                                    </i>
                                                                                                </a>
                                                                                            </td>

                                                                                        </tr>
                                                                                        <?php
                                                                                    }
                                                                                    ?>

                                                                                </tbody>
                                                                            </table>
                                                                            <div id="myModal" class="modal fade" role="dialog">
                                                                                <div class="modal-dialog" style="z-index: 9999;">

                                                                                    <!-- Modal content-->
                                                                                    <div class="modal-content" >
                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                            <h4 class="modal-title">Confirmation </h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>Are You Sure Want to Delete Email Subscriber?</p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <a class="btn btn-danger" id="delete-link" style="color: #fff;">Yes, Delete</a>
                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </section>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="col-md-6">
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                            <h4 style="text-align: center">Send Email</h4>
                                                            <section class="panel">
                                                                <header class="panel-heading">
                                                                    <div class="panel-actions">
                                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                                    </div>
                                                                </header>
                                                                <div class="panel-body"style="margin-top: 0px;">
                                                                    <div class="form-group">                                           
                                                                        <label for="subject">subject</label>
                                                                        <input type="text" name="title" class="form-control" id="email" placeholder="subject" value="<?php
                                                                            if(!isset($success)&& set_value('title'))
                                                                            {
                                                                                echo set_value('title');
                                                                            }    
                                                                        ?>">
                                                                        <p class="error-msg">
                                                                            <?php
                                                                                echo form_error('title');
                                                                            ?>
                                                                        </p>

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="review">Write Your Message</label>
                                                                        <textarea class="form-control" name="msg" placeholder="Write Your Message" id="editor1"  style="margin-top:-1px;"><?php
                                                                            if(!isset($success)&& set_value('msg'))
                                                                            {
                                                                                echo set_value('msg');
                                                                            }    
                                                                        ?></textarea>
                                                                    <p class="error-msg">
                                                                            <?php
                                                                                echo form_error('msg');
                                                                            ?>
                                                                        </p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-9 ">
                                                                            <input type="submit" name="send" value="SEND" class="btn btn-primary">
                                                                            <button type="reset" class="btn" style="background: #2170e8">Clear</button>
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
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </section>

                                                        
                                                    </div>          
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                            </form>


                        </div>
                    </div>

                </div>
            </div>
            <!--SCRIPT FILES-->
            <?php $this->load->view('admin/footerscript'); ?>

            <script>
                $('#all').click(function () {
                    $("input[type=checkbox]").prop('checked', $(this).prop('checked'));

                });

                $("#input[type=checkbox]").click(function () {
                    if (!$(this).prop("checked")) {
                        $('#all').prop("checked", false);
                    }
                });


            </script>

            <script src="<?php echo base_url(); ?>admin-assert/ckeditor/ckeditor.js" type="text/javascript"></script>
	    <script src="<?php echo base_url(); ?>admin-assert/ckfinder/ckfinder.js" type="text/javascript"></script>
            <script type="text/javascript">
                var editor = CKEDITOR.replace("editor1");
		CKFinder.setupCKEditor( editor );
            </script>
        </div>
    </body>

</html>
