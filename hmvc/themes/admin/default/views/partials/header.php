<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" /> 
        <?php echo $this->template->metadata() ?>

        <!-- CSS FILES -->
        <link rel="stylesheet" type="text/css" href="<?php echo theme_url('assets/css/reset.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo theme_url('assets/css/style.css'); ?>" />

        <!-- Controller Defined Stylesheets -->
        <?php echo $this->template->stylesheets() ?>

        <script type="text/javascript">
            var ADMIN_PATH = '<?php echo ADMIN_PATH; ?>';
            var ADMIN_URL = '<?php echo site_url(ADMIN_PATH); ?>';
            var THEME_URL = '<?php echo theme_url(); ?>';
        </script>

        <!-- Controller Defined JS Files -->
        <?php echo $this->template->javascripts() ?>

        <script type="text/javascript" src="<?php echo theme_url('assets/js/helpers.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo theme_url('assets/js/superfish.js'); ?>"></script>

        <!-- Google Analytics -->
        <?php //echo $this->template->analytics() ?>
    </head>


    <body>
        <div id="container">

            <!-- Header -->
            