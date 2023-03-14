<!DOCTYPE html>
<html lang="tr">
<head>
    <?php $this->load->view("includes/head"); ?>
    <?php $this->load->view("{$viewFolder}/{$subViewFolder}/page_style"); ?>
    <link rel="stylesheet" href="<?php echo base_url("assets");?>/assets/css/iziToast.min.css">
</head>

<body class="simple-page">
<!--============= start main area -->

    <!-- APP MAIN ==========-->
        <?php $this->load->view("{$viewFolder}/{$subViewFolder}/content"); ?>
    <!--========== END app main -->

</body>
<script src="<?php echo base_url("assets"); ?>/assets/js/iziToast.min.js"></script>

<?php $this->load->view("includes/alert"); ?>
</html>