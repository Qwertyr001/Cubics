<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('admin/head'); ?>

    <body>
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
                                <a href="<?php echo base_url(); ?>Authorize/dashboard">
                                    <img src="assert/images/icon/zr19.gif" alt=""> Home
                                </a> 
                            </li>
                            <li class="active-bre"><a>Pages</a></li>
                            <li class="active-bre"><a>Banner</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tz-2 tz-2-admin">
                                <div class="tz-2-com tz-2-main">
                                    <div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 style="text-align: center">Add New Banner</h4>
                                                    <section class="panel">
                                                    
                                                        <header class="panel-heading">
                                                            <div class="panel-actions">
                                                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                            </div>
                                                        </header>
                                                        <div class="panel-body">
                                                            <form id="" name="banner" enctype="multipart/form-data" action="" method="post" class="">    
                                                            <div class="validation-message">
                                                                <ul></ul>
                                                            </div>
                                                            <div style="font-size: 20px;opacity: 0.2;text-align: center;margin: 2em 0;width: 100%;height: 190px">
                                                                <div class="file-upload">
                                                                    <div class="image-upload-wrap">
                                                                        <input name="banner" id="banner" class="file-upload-input" type='file' onchange="readURL(this);"  />
                                                                        <div class="drag-text">
                                                                            <h3>Drop a file </h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="file-upload-content">
                                                                        <img class="file-upload-image" src="#" alt="your image" />
                                                                        <div class="image-title-wrap">
                                                                            <span class="image-title">Uploaded Image</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                               <div class="row">
                                                                <div class="col-sm-9 " style="margin-left: 15px; margin-top: 10px;">
                                                                    <input type="submit" class="btn btn-primary" style="background: #2170e8" name="add" value="ADD">
                                                                    <button type="reset" onclick="removeUpload()" class="remove-image btn button" style="background: #2170e8">Clear</button>
                                                                   <?php 
                                                                            if (isset($photo_err)) 
                                                                            {
                                                                    ?>
                                                                            <br><br>
                                                                            <div class="alert alert-danger alert-dismissable" role="alert">
                                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                                                <strong>Oops !</strong> <?php echo $photo_err; ?>
                                                                            </div>
                                                                    <?php
                                                                            }
                                                                            if (isset($success)) 
                                                                            {
                                                                    ?>
                                                                            <br><br>
                                                                            <div class="alert alert-success alert-dismissable" role="alert">
                                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                                                <strong>OK !</strong> <?php echo $success; ?>
                                                                            </div>
                                                                    <?php
                                                                            }
                                                                    ?>
                                                                </div>
                                                            </div>

                                                           </form>
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
                                                <h4 style="text-align: center">View All Banner</h4>
                                                <form id="summary-form" action="" method="post" class="form-horizontal">
                                                    <section class="panel">
                                                        <header class="">
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

                                                                <div class="panel-body" style="margin-top: -28px;">                                                
                                                                    <table id="example" class="table table-striped table-bordered" style="width:105%;">
                                                                        <div class="container"></div>
                                                                        <thead>                                    
                                                                            <tr>
                                                                                <th>Number</th>
                                                                                <th>Banner</th>
                                                                                <th>Remove</th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <?php
                                                                            $no = 0;
                                                                            foreach ($banner as $data)
                                                                            {    
                                                                            $no++;
                                                                                ?>
                                                                                <tr>                                                             
                                                                                    <td style="vertical-align:middle; text-align: center; width: 15%;">
                                                                                        <?php echo $no; ?>
                                                                                    </td>
                                                                                    <td style="vertical-align:middle; text-align: center;" class="center hidden-xs"><img style="height: 100px;" src="<?php echo base_url().$data->path; ?>"></td>
                                                                                    <td style="vertical-align: middle;text-align: center"  data-toggle="modal" data-target="#myModal">
                                                                                        <a onclick="$('#delete-link').attr('href','<?php echo base_url(); ?>delete/Banner/<?php echo $data->banner_id; ?>')">
                                                                                            <i class="fa fa-trash" aria-hidden="true" style="color: red;cursor: pointer" class=""data-toggle="tooltip"title="Remove Data" title=""></i>
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
                                                                                    <p>Are You Sure Want to Delete Banner ?</p>
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
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!--SCRIPT FILES-->
        <?php $this->load->view('admin/footerscript'); ?>

        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {

                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.image-upload-wrap').hide();

                        $('.file-upload-image').attr('src', e.target.result);
                        $('.file-upload-content').show();

                        $('.image-title').html(input.files[0].name);
                    };

                    reader.readAsDataURL(input.files[0]);

                } else {
                    removeUpload();
                }
            }

            function removeUpload() {
                $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                $('.file-upload-content').hide();
                $('.image-upload-wrap').show();
            }
            $('.image-upload-wrap').bind('dragover', function () {
                $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function () {
                $('.image-upload-wrap').removeClass('image-dropping');
            });




        </script>
    </div>
</body>
</html>
