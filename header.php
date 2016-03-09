<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="description" content="Professional wedding and events video">
    <meta name="keywords" content="video, wedding, proffesional, camera, videoblesk, Andrei Shaikouski, videographer, modern, classic ">
    <meta name="author" content="Andrei Shaikouski">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <title><?php wp_title('|',1,'right'); ?></title>

<!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

</head>
<body>

<!-- Navigation ------------------------------------------------------>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand"  href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div><!-- ENDS navbar-header -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                 <?php wp_list_pages(array('title_li' => '')); ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
