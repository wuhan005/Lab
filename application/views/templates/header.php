<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
        John's Lab · 一个奇怪的实验室
    </title>

    <link href="https://fonts.cat.net/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link href="../static/assets/css/toolkit-inverse.css" rel="stylesheet">
    <link href="../static/assets/css/application.css" rel="stylesheet">
    
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="../static/assets/js/tether.min.js"></script>
    <script src="../static/assets/js/chart.js"></script>
    <script src="../static/assets/js/tablesorter.min.js"></script>
    <script src="../static/assets/js/toolkit.js"></script>
    <script src="../static/assets/js/application.js"></script>

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar">
                <nav class="sidebar-nav">
                    <div class="sidebar-header">
                        <button class="nav-toggler nav-toggler-md sidebar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="sr-only">Toggle nav</span>
            </button>
                    <div class="sidebar-brand" href="#" data-toggle="modal" data-target="#loginBox">
					
                    </div>
            </div>               
                    <div class="collapse nav-toggleable-md" id="nav-toggleable-md">
                        
                        <ul class="nav nav-pills nav-stacked flex-column">
                            <li class="nav-header">Main Menu</li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $nowType=="mainpage"?'active':'';?>" href="../index.php"><span class="icon icon-address"></span>Main Page</a>
                            </li>
                            <li class="nav-item">
                            	
                            <li class="nav-header">Tools</li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $nowType=="music"?'active':'';?>" href="../index.php/music"><span class="icon icon-beamed-note"></span>Music Hunter</a>
                            </li>
                            <li class="nav-item">

                            <li class="nav-header">About</li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $nowType=="setting"?'active':'';?>" href="">Settings</a>
                            </li>
                            
                        </ul>
                        <hr class="visible-xs mt-3">
                    </div>
                </nav>
            </div>
            
            <div class="col-md-9 content">