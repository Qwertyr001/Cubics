<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('business/head'); ?>

    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!--== MAIN CONTRAINER ==-->
        <?php $this->load->view('business/hedar'); ?>
        <!--== BODY CONTNAINER ==-->
        <div class="container-fluid sb2">
            <div class="row">
               <?php $this->load->view('business/menu'); ?>
                <!--== BODY INNER CONTAINER ==-->
                <div class="sb2-2" style="min-height: 1000px;">
                    <!--== breadcrumbs ==-->
                    <div class="sb2-2-2">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>business-dashboard"><img src="assert/images/icon/zr19.gif" alt=""></i> Home</a> </li>
                            <li class="active-bre"><a> My Gallery</a> </li>
                        </ul>
                    </div>
                    <div class="tz-2 tz-2-admin">
                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center">Manage Gallery</h4>
                            <div class="tz-2-main-com bot-sp-20">
                                <?php
                                    $gallary = $this->md->my_select('tbl_gallary','*',array('business_id'=>$this->session->userdata( 'business' )));
                                    foreach( $gallary as $data )
                                    {
                                ?>
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div class="tz-2-main-2"> 
                                        <img src="<?php echo base_url().$data->path; ?>" height="300px" alt="">
                                        <table>
                                            <tr>
                                                <td style="vertical-align: middle;text-align: center"  data-toggle="modal" data-target="#myModal">
                                                    
                                                    <a onclick="$('#delete-link').attr('href','<?php echo base_url(); ?>delete/gallary/<?php echo $data->gallary_id; ?>')">
                                                         <button class="btn btn-danger" data-toggle="tooltip"title="Remove Data" title="">Remove!</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                      
                                        
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                                <form name="gallery" action="" method="post" enctype="multipart/form-data" class="form-horizontal">    
                                <div class="tz-2-main-1 tz-2-main-admin">
                                    <div style="height: 323px;" class="tz-2-main-2">
                                        <div style="font-size: 20px;opacity: 0.2;text-align: center;margin: 2em 0;width: 100%;height: 190px">
                                                                
                                        <div class="file-upload">
                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" type='file' name="category" onchange="readURL(this);"  />
                                                <div class="drag-text">
                                                    <i class="fa fa-plus fa-5x"></i>
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
                                        <div class="col-md-10 col-md-offset-1" style="bottom: 15px;">
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
                                                    
                                            ?>
                                        </div>
                                    </div>
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog" style="z-index: 9999;">

                                                <!-- Modal content-->
                                                <div class="modal-content" >
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Confirmation </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are You Sure Want to Delete Photos ?</p>
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
                                </form>    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--SCRIPT FILES-->
            <?php $this->load->view('business/footerscript'); ?>
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
    </body>

</html>