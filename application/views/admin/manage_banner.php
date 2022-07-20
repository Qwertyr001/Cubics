<!doctype html>
<html class="fixed">

    <?php
    require_once ('headerlink.php');
    ?>
    <body>
        <section class="body">

            <!-- start: header -->
            <?php
            require_once ('header.php');
            ?>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <?php
                require_once ('menu.php');
                ?>
                <!-- end: sidebar -->

                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Manage Banner</h2>

                        <div class="right-wrapper pull-right" style="margin-right: 25px;">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="dashboard.php">
                                        <i class="fa fa-home" style="font-size: 16px !important;"></i>
                                    </a>
                                </li>
                                <li><span>Pages</span></li>
                                <li><span>Banner</span></li>
                            </ol>


                        </div>
                    </header>

                    <!-- start: page -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                            </div>

                            <h2 class="panel-title">Add New Banner</h2>
                        </header>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">                                           
                                    <label for="subject">Title</label>
                                    <input type="text" class="form-control" id="email" placeholder="Title" required="">
                                </div>
                                <div class="form-group">
                                    <label for="review">Subtitle</label>
                                    <input class="form-control" placeholder="Subtitle" id="exampleFormControlTextarea1" rows="2" style="resize: none">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form action="http://preview.oklerthemes.com/upload" class="dropzone dz-square" id="dropzone-example">
                                    <div class="dz-default dz-message" style="margin-top:10px;">
                                        <span >Drop files here to upload</span>
                                    </div>
                                </form>

                            </div>
                            <div class="row">
                                <div class="col-sm-9 " style="margin-left: 15px; margin-top: 10px;">
                                    <button class="btn button">Add</button>
                                    <button type="reset" class="btn btn-default">Clear                      </button>
                                </div>
                            </div>
                        </div>
                       
                    </section>

                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-actions">
                                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                            </div>

                            <h2 class="panel-title">View All Banner</h2>
                        </header>
                        <div class="panel-body">
                            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                <div class="container">
                                    <thead>                                    
                                    <div  class="row">
                                        <tr >
                                            <th style="vertical-align:middle; text-align: center;">No. </th>
                                            <th style="vertical-align:middle; text-align: center;">Title</th>
                                            <th style="vertical-align:middle; text-align: center;" class="hidden-xs">Subtitle</th>
                                            <th style="vertical-align:middle; text-align: center;" class="hidden-xs">Banner</th>
                                            <th style="vertical-align:middle; text-align: center;" class="hidden-xs">Remove</th>
                                        </tr>
                                    </div>
                                    </thead>
                                </div>
                                <tbody>
                                    <?php
                                    for ($i = 1; $i <= 57; $i++) {
                                        ?>
                                    <div  class="row">
                                        <tr>
                                            <td style="vertical-align:middle; text-align: center;">1</td>
                                            <td style="vertical-align:middle; text-align: center;">offer</td>
                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs">diwali offer</td>
                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs"><img src="assets/images/chirag.jpg" style="width: 60px; height: 30px;"  class="img-rectangel" ></td>
                                            <td style="vertical-align:middle; text-align: center;" class="center hidden-xs"><a href="#" data-toggle="tooltip" title="Remove Data" class="fa fa-trash" style="color: red;"></a></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                            </table>

                        </div>


                    </section>


                    <!-- end: page -->
                </section>
            </div>


        </section>

        <!-- Vendor -->
        <?php
        require_once ('footerscript.php');
        ?>
    </body>

</html>