<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, scalable=0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php wp_title('|', true, 'right') ?> <?php bloginfo('name') ?></title>
        
        <!-- Custom styles for this template -->
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">

        <?php wp_head() ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url() ?>"><?php bloginfo("name") ?></a>
                </div>

                <div id="navbar" class="navbar-collapse navbar-right collapse">
                    <nav class="nav navbar-nav">
                        <?php //wp_list_pages( array('title_li' => '', 'exclude' => '4') ); ?> <!--Menu sem o botão "INICIO"-->
                        <?php wp_list_pages( array('title_li' => '') ); ?>
                    </nav>
                </div>
            </div>
        </nav>

        <div class="container">