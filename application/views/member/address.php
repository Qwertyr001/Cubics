<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('member/head'); ?>
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
                <?php $this->load->view('member/hedar'); ?>
                <!--== BODY CONTNAINER ==-->
                <div class="container-fluid sb2">
                    <div class="row">
                        <?php $this->load->view('member/menu'); ?>
                        <!--== BODY INNER CONTAINER ==-->
                        <div class="sb2-2" style="min-height: 1000px;">
                            <div class="row">
                                <!--== breadcrumbs ==-->
                                    <div class="sb2-2-2">
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>Member/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Home</a> </li>
                                            <li class="active-bre"><a>Address</a> </li>
                                        </ul>
                                    </div>
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                                            <div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <form id="selects-form"  method="post">
                                                            <h4 style="text-align: center">Add My Address</h4>
                                                            <section class="panel">
                                                                <header class="panel-heading">
                                                                    <div class="panel-actions">
                                                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                                                    </div>
                                                                </header>
                                                                <div class="panel-body"style="margin-top: 0px;">

                                                                    <div class="col-md-4">
                                                                        <label for="State">Country</label>
                                                                        <select id="" name="state" class="form-control input-sm">
                                                                            <option value="">Select Country</option>
                                                                        </select>
                                                                    </div>
                                                                       <div class="col-md-4">
                                                                        <label for="State">State</label>
                                                                        <select id="" name="state" class="form-control input-sm">
                                                                            <option value="">Select State</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="State">City</label>
                                                                        <select id="" name="state" class="form-control input-sm">
                                                                            <option value="">Select City</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="State">Address</label>
                                                                        <textarea rows="4" cols="52"></textarea>
                                                                    </div>
                                                                      <div class="row">
                                                                        <div class="col-sm-9" style="padding: 20px">
                                                                            <input class="btn" name="add" type="submit" value="ADD" style="background: #2170e8">
                                                                            <button type="reset" class="btn" style="background: #2170e8">Clear</button>
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
                            <div class="row">
                                <br/>
                                    <div class="tz-2 tz-2-admin">
                                        <div class="tz-2-com tz-2-main">
                            <h4 style="text-align: center; ">View All Contacts</h4>

                            <div style="padding: 15px;">

                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nubmber</th>
                                            <th>Contury</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Edit</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                <td style="text-align: center;vertical-align: middle;"></td>
                                                <td style="text-align: center;vertical-align: middle;"></td>
                                                <td style="text-align: center;vertical-align: middle;"></td>
                                                <td style="text-align: center;vertical-align: middle;">City</td>
                                                <td style="text-align: center;vertical-align: middle;"><i class="fa fa-pencil"></i></td>
                                                <td style="text-align: center;vertical-align: middle;"><i class="fa fa-trash"></i></td>
                                                
                                            </tr>
                                            
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
                                                <p>Are You Sure Want to Delete Contact ?</p>
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
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
            <!--SCRIPT FILES-->
            <?php $this->load->view('member/footerscript'); ?>

        </div>
    </body>

</html>
