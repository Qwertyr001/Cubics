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
                                        <a href="<?php echo base_url(); ?>Authorize/dashboard">
                                            <img src="assert/images/icon/zr19.gif" alt=""> Home
                                        </a> 
                                    </li>
                                    <li class="active-bre"><a>Category</a></li>
                                    <li class="active-bre"><a>Main Category</a></li>
                                </ul>
                            </div>

                            <div class="row">
                               <div class="col-md-6">
                                 <?php 
                                    if(isset($editcategory))
                                    {    
                                 ?>
                                 <div class="tz-2 tz-2-admin">
                                <div class="tz-2-com tz-2-main">
                                    <div>
                                        <div class="row">
                                           <div class="col-md-12">
                                                <h4 style="text-align: center">Edit Category</h4>
                                                <section class="panel">
                                                        <header class="panel-heading">
                                                            <div class="panel-actions">
                                                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                            </div>
                                                        </header>
                                                        <div class="panel-body">
                                                            <form id="summary-form" name="category" action="" method="post" enctype="multipart/form-data" class="form-horizontal"> 
                                                            <div class="validation-message">
                                                                <ul></ul>
                                                                <div>
                                                                    <h5>Name</h5>
                                                                    <br/>
                                                                    <input type="text" name="name" class="form-control" value="<?php
                                                                        if (!isset($success) && set_value('state')) {
                                                                            echo set_value('name');
                                                                        }
                                                                        else
                                                                        {
                                                                            echo $editcategory[0]->name;   
                                                                        }   
                                                                    ?>">
                                                                    <p class="error-msg">
                                                                            <?php
                                                                            echo form_error('name');
                                                                            ?>
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-9 " style="margin-left: 15px; margin-top: 10px;">
                                                                    <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                                                                    <button type="reset" class="btn" style="background: #2170e8" value="clear">Clear</button>
                                                                    <a href="<?php echo base_url('manage-state'); ?>" class="btn" style="background: #2170e8" value="clear">CANCEL</a>
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
                                 <?php 
                                    }
                                    else
                                    {    
                                 ?>
                                        <div class="tz-2 tz-2-admin">
                                <div class="tz-2-com tz-2-main">
                                    <div>
                                        <div class="row">
                                           <div class="col-md-12">
                                                <h4 style="text-align: center">Add New Category</h4>
                                                <section class="panel">
                                                        <header class="panel-heading">
                                                            <div class="panel-actions">
                                                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                            </div>
                                                        </header>
                                                        <div class="panel-body">
                                                            <form id="summary-form" name="category" action="" method="post" enctype="multipart/form-data" class="form-horizontal"> 
                                                            <div class="validation-message">
                                                                <ul></ul>
                                                                <div>
                                                                    <h5>Name</h5>
                                                                    <br/>
                                                                    <input type="text" name="name" class="form-control" value="<?php
                                                                        if(!isset($success) && set_value('name'))
                                                                        {
                                                                            echo set_value('name');
                                                                        }    
                                                                    ?>">
                                                                    <p class="error-msg">
                                                                            <?php
                                                                            echo form_error('name');
                                                                            ?>
                                                                        </p>
                                                                </div>
                                                            </div>
                                                            <div style="font-size: 20px;opacity: 0.2;text-align: center;margin: 2em 0;width: 100%;height: 190px">
                                                                
                                                                <div class="file-upload">
                                                                    <div class="image-upload-wrap">
                                                                        <input class="file-upload-input" type='file' name="category" onchange="readURL(this);"  />
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
                                                                    <input  type="submit" class="btn btn-primary" value="ADD" name="add" >
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
                                 <?php 
                                    }
                                 ?>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h4 style="text-align: center">View All  Category</h4>
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
                                                                                        <th>Name</th>
                                                                                        <th>Category</th>
                                                                                        <th>Edit</th>
                                                                                        <th>Remove</th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <?php
                                                                                    $no =0;
                                                                                    foreach ($category as $data)
                                                                                    {  
                                                                                        $no++;
                                                                                        ?>
                                                                                        <tr>                                                             
                                                                                            <td style="vertical-align:middle; text-align: center; width: 15%;"><?php echo $no; ?></td>
                                                                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs"><?php echo $data->name; ?></td>
                                                                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs"><img src="<?php echo base_url().$data->path; ?>"></td>
                                                                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs">
                                                                                                <a href="<?php echo base_url(); ?>edit-category/<?php echo $data->category_id; ?>" data-toggle="tooltip" title="Edit Data" class="fa fa-pencil"></a>
                                                                                            </td>
                                                                                            <td style="vertical-align: middle;text-align: center"  data-toggle="modal" data-target="#myModal">
                                                                                                <a onclick="$('#delete-link').attr('href','<?php echo base_url(); ?>delete/category/<?php echo $data->category_id; ?>')">
                                                                                                    <i class="fa fa-trash" aria-hidden="true" style="color: red;cursor: pointer" class="d-inline-block"
                                                                                                        data-toggle="tooltip" data-placement="top" title="Remove!">
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
                                                                                            <p>Are You Sure Want to Delete Category ?</p>
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

                </div>
            </div>
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
