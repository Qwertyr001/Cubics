<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Business -Cubics</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        $this->load->view('hederlink');
        ?>
</head>

<body onload="view_more('<?php echo $this->uri->segment(2); ?>','<?php echo $this->uri->segment(3); ?>',10);">
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--TOP SEARCH SECTION-->
	<?php
            $this->load->view('heder');
        ?>
	<section class="dir-alp dir-pa-sp-top">
		<div class="container">
			<div class="row">
				<div class="dir-alp-tit">
                                    <?php
                                        if( $this->uri->segment(2) == "category" )
                                        {
                                            $name = $this->md->my_select('tbl_category','*',array('category_id'=>$this->uri->segment(3)))[0]->name; 
                                        
                                    ?>
					<h1>View All <?php echo $name; ?></h1>
					<ol class="breadcrumb">
                                            <li><a href="<?php echo base_url(); ?>pages">Home</a> </li>
                                            <li class="active">All <?php echo $name; ?></li>
					</ol>
                                    <?php 
                                        }
                                       else if( $this->uri->segment(2) == "search" )
                                        {    
                                           $value = $this->uri->segment(3);
                                            $search = str_replace("%20", " ", $value);
                
                                    ?>
                                        <h1>View All <?php echo $search; ?></h1>
					<ol class="breadcrumb">
                                            <li><a href="<?php echo base_url(); ?>pages">Home</a> </li>
                                            <li class="active">All Business</li>
					</ol>
                                    <?php
                                        }
                                        else
                                        {    
                                    ?>
                                        <h1>View All Business</h1>
					<ol class="breadcrumb">
                                            <li><a href="<?php echo base_url(); ?>pages">Home</a> </li>
                                            <li class="active">All Business</li>
					</ol>
                                    <?php
                                        }
                                    ?>
				</div>
			</div>
			<div class="row">
				<div class="dir-alp-con" >
                                    <div class="col-md-10 dir-alp-con-right col-md-offset-1" id="business_data">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--FOOTER SECTION-->
	<?php
            $this->load->view('footer');
        ?>
	<!--SCRIPT FILES-->
	<?php
            $this->load->view('footerscript');
         ?>
        
        <script type="text/javascript">
            
            function view_more(action,id,limit)
            {
                $data = { action:action , id:id , limit:limit };
                
                var path = "http://localhost/cubics/backend/view_more/";
                   
                   $.post(path, $data, function (output) {
                       $("#business_data").html(output);
                    });
            }
            
        </script> 
</body>
</html>