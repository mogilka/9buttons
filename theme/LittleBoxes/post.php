<?php include('header.php'); ?>
<?php $h24 = get_body_id(); ?>

<body class="<?php echo $h24; ?>">
<?php include('top.php'); ?>

<div id="<?php get_page_slug(); ?>">
    <?php init_day_time($h24) ?>

    <div class="content">
        <div id="littleBoxes" class="littleBoxes">
            <div class="boxlink bg1" style="top:0px;left:0px;">
                <a href="javascript:history.back();" class="custom-alpha btn"><?php get_page_title(); ?></a>
                    <div class="boxcontent"><p><?php get_page_content(); ?></p></div>
            </div>            
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
