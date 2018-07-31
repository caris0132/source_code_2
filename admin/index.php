<?php
session_start();
error_reporting(0);
@define ( '_template' , './templates/');
@define ( '_source' , './sources/');
@define ( '_lib' , './lib/');

include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."database.class.php";
include_once _source."router.php";
include_once _source."admin_js_css.php";
if($source!="") include _source.$source.".php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <?php foreach ($css_file as $item): ?>
        <link rel="stylesheet" type="text/css" href="<?= $item ?>">
    <?php endforeach ?>
    <!-- Jquery Core Js -->
    <script>var base_url = "<?= $config_url ?>";  </script>

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <title>Administrator</title>
</head>
<body class="theme-red">
	
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <?php include _template . 'header_tpl.php'; ?>
    </nav>
    <!-- #Top Bar -->

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <?php include _template . 'left_tpl.php' ; ?>
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <?php include _template . 'right_tpl.php' ; ?>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <?php include _template . $template . '_tpl.php' ; ?>
    </section>

    

    <?php foreach ($js_file as $item): ?>
        <script type="text/javascript" src="<?= $item ?>"></script>
    <?php endforeach ?>
    <?php include _source . 'admin_script.php'; ?>

</body>
</html>