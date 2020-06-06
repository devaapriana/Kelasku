<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bootstrap/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo base_url('assets/'); ?>css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/fontawesome.min.css')?>">
    <!--//web-fonts-->
    <title><?php echo $title; ?></title>
    <style>
        @font-face {
            font-family: 'courigette';
            src: url('http://localhost/myTraining/Kelasku/assets/font/BubbleBobble-rg3rx.ttf') format('truetype');
        }

        * {
            font-family: 'courigette';
            font-weight: normal;
        }

        .caption {
            position: absolute;
            top: 28%;
            right: 42%;
            font-size: 100px;
            font-family: 'courigette';
            color: snow;
        }

        .btn-grad {
            background-image: linear-gradient(to right, #1FA2FF 0%, #12D8FA 51%, #1FA2FF 100%);
            outline: none;
            width: 100%;
            height: 50px;
            margin: auto;
            border-radius: 40px;
            border: none;
            font-family: 'courigette';
            color: white;
            font-size: 18px;
        }

        h1 {
            color: darkturquoise;

        }



        .kartu {
            padding-top: 20px;
            margin: 10px 0 20px 0;
            background-color: rgba(214, 224, 226, 0.2);
            border-top-width: 0;
            border-bottom-width: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .kartu .kartu-heading {
            padding: 0 20px;
            margin: 0;
        }

        .kartu .kartu-heading.simple {
            font-size: 20px;
            font-weight: 300;
            color: #777;
            border-bottom: 1px solid #e5e5e5;
        }

        .kartu .kartu-heading.image img {
            display: inline-block;
            width: 46px;
            height: 46px;
            margin-right: 15px;
            vertical-align: top;
            border: 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }

        .kartu .kartu-heading.image .kartu-heading-header {
            display: inline-block;
            vertical-align: top;
        }

        .kartu .kartu-heading.image .kartu-heading-header h3 {
            margin: 0;
            font-size: 14px;
            line-height: 16px;
            color: #262626;
        }

        .kartu .kartu-heading.image .kartu-heading-header span {
            font-size: 12px;
            color: #999999;
        }

        .kartu .kartu-body {
            padding: 0 20px;
            margin-top: 20px;
        }

        .kartu .kartu-media {
            padding: 0 20px;
            margin: 0 -14px;
        }

        .kartu .kartu-media img {
            max-width: 100%;
            max-height: 100%;
        }

        .kartu .kartu-actions {
            min-height: 30px;
            padding: 0 20px 20px 20px;
            margin: 20px 0 0 0;
        }

        .kartu .kartu-comments {
            padding: 20px;
            margin: 0;
            background-color: #f8f8f8;
        }

        .kartu .kartu-comments .comments-collapse-toggle {
            padding: 0;
            margin: 0 20px 12px 20px;
        }

        .kartu .kartu-comments .comments-collapse-toggle a,
        .kartu .kartu-comments .comments-collapse-toggle span {
            padding-right: 5px;
            overflow: hidden;
            font-size: 12px;
            color: #999;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .kartu-comments .media-heading {
            font-size: 13px;
            font-weight: bold;
        }

        .kartu.people {
            position: relative;
            display: inline-block;
            width: 170px;
            height: 300px;
            padding-top: 0;
            margin-left: 20px;
            overflow: hidden;
            vertical-align: top;
        }

        .kartu.people:first-child {
            margin-left: 0;
        }

        .kartu.people .kartu-top {
            position: absolute;
            top: 0;
            left: 0;
            display: inline-block;
            width: 170px;
            height: 150px;
            background-color: #ffffff;
        }

        .kartu.people .kartu-top.green {
            background-color: #53a93f;
        }

        .kartu.people .kartu-top.blue {
            background-color: #427fed;
        }

        .kartu.people .kartu-info {
            position: absolute;
            top: 150px;
            display: inline-block;
            width: 100%;
            height: 101px;
            overflow: hidden;
            background: #ffffff;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 40px;
        }

        .kartu.people .kartu-info .title {
            display: block;
            margin: 8px 14px 0 14px;
            overflow: hidden;
            font-size: 40px;
            font-weight: bold;
            line-height: 18px;
            color: #404040;
        }

        .kartu.people .kartu-info .desc {
            display: block;
            margin: 8px 14px 0 14px;
            overflow: hidden;
            font-size: 16px;
            line-height: 16px;
            color: #737373;
            text-overflow: ellipsis;
        }

        .kartu.people .kartu-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            display: inline-block;
            width: 100%;
            padding: 10px 20px;
            line-height: 29px;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .kartu.hovercard {
            position: relative;
            padding-top: 0;
            overflow: hidden;
            text-align: center;
            background-color: rgba(214, 224, 226, 0.2);
        }

        .kartu.hovercard .cardheader {
            background: url("http://localhost/myTraining/Kelasku/assets/img/vek-profile.jpg");
            background-size: cover;
            background-position: center;
            height: 135px;
        }

        .kartu.hovercard .avatar {
            position: relative;
            top: -50px;
            margin-bottom: -50px;
        }

        .kartu.hovercard .avatar img {
            width: 100px;
            height: 100px;
            max-width: 100px;
            max-height: 100px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.5);
        }

        .kartu.hovercard .info {
            padding: 4px 8px 10px;
        }

        .kartu.hovercard .info .title {
            margin-bottom: 4px;
            font-size: 40px;
            line-height: 1;
            color: #262626;
            vertical-align: middle;
        }

        .kartu.hovercard .info .desc {
            overflow: hidden;
            font-size: 16px;
            line-height: 20px;
            color: #737373;
            text-overflow: ellipsis;
        }

        .kartu.hovercard .bottom {
            padding: 0 20px;
            margin-bottom: 17px;
        }

        


        

        @media (max-width: 576px) {
            .caption {
                visibility: hidden;
            }

            .rounded-circle {
                left: 30%;
                width: 200px;
            }

            .navbar-brand {
                visibility: hidden;
            }



        }
    </style>
</head>

<body>

    <!-- Image and text -->
    <nav class="navbar navbar-dark primary-color" style="position: fixed; z-index:2;">
        <a class="navbar-brand" href="<?php echo base_url('user/profile'); ?>">
            <img src="<?php echo base_url('assets/'); ?>img/<?php echo $user['gambar']; ?>" height="30" width="30" class="d-inline-block align-top rounded-circle" alt="mdb logo"> <span style="font-family: courigette"><?php echo $user['name']; ?></span>
        </a>
        <a href="<?php echo base_url('auth/logout') ?>" onclick="return confirm('apakah anda ingin logout?')"><button type="button" class="btn btn-danger" style="position:fixed; padding:5px; right:15px; height:30px; border-radius:30px; font-family:'courigette'; box-shadow:1px 1px 1px black;">logout</button></a>
    </nav>