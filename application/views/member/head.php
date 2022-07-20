<html>
    <head>
        <title>Member Department-Cubics</title>
        
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FAV ICON(BROWSER TAB ICON) -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assert/images/fav1.ico" type="image/x-icon">

        <!-- GOOGLE FONT -->
        <link href="<?php echo base_url(); ?>assert/fonts/fonts.css" rel="stylesheet">

        <!-- FONTAWESOME ICONS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assert/css/font-awesome.min.css">

        <!-- ALL CSS FILES -->
        <link href="<?php echo base_url(); ?>assert/css/materialize.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assert/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assert/css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
        <link href="<?php echo base_url(); ?>assert/css/responsive.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assert/DataTables/datatables.min.css"/>



        <style>

            /* width */
            ::-webkit-scrollbar {
                width: 8px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey; 
                border-radius: 8px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #0485b3; 
                border-radius: 8px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #b30000; 
            }
        </style>
        <style>
            .file-upload {
                background-color: #ffffff;

            }

            .file-upload-btn {
                width: 100%;
                margin: 0;
                color: #fff;
                background: #1FB264;
                border: none;
                padding: 10px;
                border-radius: 4px;
                border-bottom: 4px solid #15824B;
                transition: all .2s ease;
                outline: none;
                text-transform: uppercase;
                font-weight: 700;
            }

            .file-upload-btn:hover {
                background: #1AA059;
                color: #ffffff;
                transition: all .2s ease;
                cursor: pointer;
            }

            .file-upload-btn:active {
                border: 0;
                transition: all .2s ease;
            }

            .file-upload-content {
                display: none;
                text-align: center;
            }

            .file-upload-input {
                position: absolute;
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                outline: none;
                opacity: 0;
                cursor: pointer;
            }

            .image-upload-wrap {
                margin-top: 20px;
                border: 4px dashed #1FB264;
                position: relative;
            }

            .image-dropping,
            .image-upload-wrap:hover {
                background-color: #1FB264;
                border: 4px dashed #ffffff;
            }

            .image-title-wrap {
                padding: 0 15px 15px 15px;
                color: #222;
            }

            .drag-text {
                text-align: center;
            }

            .drag-text h3 {
                font-weight: 100;
                text-transform: uppercase;
                color: #15824B;
                padding: 60px 0;
            }

            .file-upload-image {
                max-height: 200px;
                max-width: 200px;
                margin: auto;
                padding: 20px;
            }
        </style>
    </head>
</html>