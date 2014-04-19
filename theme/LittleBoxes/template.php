<?php include('header.php'); ?>
<?php $h24 = get_body_id(); ?>

<body class="<?php echo $h24; ?>">
<?php include('top.php'); ?>
<div id="index">
    <?php init_day_time($h24) ?>
    
    <div class="content">
            <div id="littleBoxes" class="littleBoxes">
                <div class="boxlink bg1" style="top:0px;left:0px;">
                    <?php $page9b = get_content('portfolio'); ?>
                    <a href="http://9buttons.kz/?id=<?php echo $page9b['url'];?>" class="custom-november btn newin"><?php echo $page9b['title'];?></a>
                    <div class="boxcontent"><p></p></div>
                </div>
                <div class="bg6" style="background-position:-150px 0;top:0px;left:155px;"></div>
                <div class="bg6" style="background-position:-300px 0;top:0px;left:310px;"></div>
                <div class="bg6" style="background-position:-450px 0;top:0px;left:465px;"></div>
                <div class="bg6" style="background-position:-600px 0;top:0px;left:620px;"></div>

                <div class="bg6" style="background-position:0 -150px;top:155px;left:0px;"></div>
                <div class="boxlink bg2" style="top:155px;left:155px;">
                    <?php $page9b = get_content('partners'); ?>
                    <a href="http://9buttons.kz/?id=<?php echo $page9b['url'];?>" class="custom-lima btn newin"><?php echo $page9b['title'];?></a>
                    <div class="boxcontent"><p></p></div>
                </div>
                <div class="bg6" style="background-position:-300px -150px;top:155px;left:310px;"></div>
                <div class="bg6" style="background-position:-450px -150px;top:155px;left:465px;"></div>
                <div class="bg6" style="background-position:-600px -150px;top:155px;left:620px;"></div>

                <div class="bg6" style="background-position:0 -300px;top:310px;left:0px;"></div>
                <div class="bg6" style="background-position:-150px -300px;top:310px;left:155px;"></div>
                <div class="boxlink bg3" style="top:310px;left:310px;">
                    <?php $page9b = get_content('review'); ?>
                    <a href="" class="samewin custom-alpha btn"><?php echo $page9b['title'];?></a>
                    <div class="boxcontent"><p><?php echo $page9b['content'];?></div>
                </div>
                <div class="bg6" style="background-position:-450px -300px;top:310px;left:465px;"></div>
                <div class="bg6" style="background-position:-600px -300px;top:310px;left:620px;"></div>

                <div class="bg6" style="background-position:0 -450px;top:465px;left:0px;"></div>
                <div class="bg6" style="background-position:-150px -450px;top:465px;left:155px;"></div>
                <div class="bg6" style="background-position:-300px -450px;top:465px;left:310px;"></div>
                <div class="boxlink bg4" style="top:465px;left:465px;">
                    <?php $page9b = get_content('contacts'); ?>
                    <a href="" class="samewin custom-bravo btn" id="contact-link"><?php echo $page9b['title'];?></a>
                    <div class="boxcontent"><p>
                        <?php get_component('contact_form'); ?>
                        <br /><br />
                        <div class="mini-block">
                            <?php $page9b = get_content('contactus'); ?>
                            <?php echo $page9b['content'];?>
                        </div>
                    </div>
                </div>
                <div class="bg6" style="background-position:-600px -450px;top:465px;left:620px;"></div>

                <div class="bg6" style="background-position:0 -600px;top:620px;left:0px;"></div>
                <div class="bg6" style="background-position:-150px -600px;top:620px;left:155px;"></div>
                <div class="bg6" style="background-position:-300px -600px;top:620px;left:310px;"></div>
                <div class="bg6" style="background-position:-450px -600px;top:620px;left:465px;"></div>
                <div class="boxlink bg5" style="top:620px;left:620px;">
                    <a href="" class="samewin custom-golf btn">Общение</a>
                    <div class="boxcontent"><?php get_component('pixelstudio_footer'); ?></div>
                </div>
            </div>
        <script>$('.post-image').poshytip({
            className: 'tip-twitter',
            showTimeout: 1,
            alignTo: 'target',
            alignX: 'center',
            offsetY: 5,
            allowTipHover: false
        }); </script>
    </div>
</div>
<?php include('footer.php'); ?>
