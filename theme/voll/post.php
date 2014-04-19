<?php include('header.php'); ?>
<?php $h24 = get_body_id(); ?>

<body class="<?php echo $h24; ?>">
<?php include('top.php'); ?>

<div id="<?php get_page_slug(); ?>">
    <?php init_day_time($h24) ?>

    <div class="container_6 content">
        <div class="item border-shadowed rounded6" id="index">
            <h1 class="grid_6"><?php get_page_title(); ?></h1>
            <div class="clear"></div>
            <div class="grid_6">
                <?php get_page_content(); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
