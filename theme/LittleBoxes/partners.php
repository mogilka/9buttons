<?php include('header.php'); ?>
<?php $h24 = get_body_id(); ?>

<body class="<?php echo $h24; ?>">
<?php include('top.php'); ?>
<div id="partners">
    <?php init_day_time($h24) ?>
    
    <div class="content">
            <div id="littleBoxes" class="littleBoxes">
                <div class="bg6" style="background-position:-300px 0;top:0px;left:0px;"></div>
                <div class="bg6" style="background-position:-150px 0;top:0px;left:155px;"></div>
                <div class="boxlink bg1" style="top:0px;left:310px;">
                    <?php $page9b = get_content('partner2'); ?>
                    <a href="" class="custom-lima btn samewin">ReportErr</a>
                    <div class="boxcontent"><p><?php echo $page9b['content'];?></p></div>
                </div>
                <div class="bg6" style="background-position:-450px 0;top:0px;left:465px;"></div>
                <div class="bg6" style="background-position:-600px 0;top:0px;left:620px;"></div>

                <div class="bg6" style="background-position:0 -150px;top:155px;left:0px;"></div>
                <div class="boxlink bg2" style="top:155px;left:155px;">
                    <?php $page9b = get_content('partner7'); ?>
                    <a href="" class="custom-alpha btn samewin">Almaty GTUG</a>
                    <div class="boxcontent"><p><?php echo $page9b['content'];?></p></div>
                </div>
                <div class="bg6" style="background-position:-300px -150px;top:155px;left:310px;"></div>
                <div class="bg6" style="background-position:-450px -150px;top:155px;left:465px;"></div>
                <div class="bg6" style="background-position:-600px -150px;top:155px;left:620px;"></div>

                <div class="boxlink bg4" style="top:310px;left:0px;">
                    <?php $page9b = get_content('partner4'); ?>
                    <a href="" class="samewin custom-november btn">Mblog.kz</a>
                    <div class="boxcontent"><p><?php echo $page9b['content'];?></p></div>
                </div>
                <div class="bg6" style="background-position:-150px -300px;top:310px;left:155px;"></div>
                <div class="bg6" style="background-position:-300px -300px;top:310px;left:310px;"></div>
                <div class="bg6" style="background-position:-450px -300px;top:310px;left:465px;"></div>
                <div class="boxlink bg3" style="top:310px;left:620px;">
                    <?php $page9b = get_content('partner3'); ?>
                    <a href="" class="samewin custom-bravo btn">KazNet Media</a>
                    <div class="boxcontent"><p><?php echo $page9b['content'];?></p></div>
                </div>

                <div class="bg6" style="background-position:0 -450px;top:465px;left:0px;"></div>
                <div class="bg6" style="background-position:-150px -450px;top:465px;left:155px;"></div>
                <div class="bg6" style="background-position:-300px -450px;top:465px;left:310px;"></div>
                <div class="boxlink bg4" style="top:465px;left:465px;">
                    <?php $page9b = get_content('partner6'); ?>
                    <a href="" class="samewin custom-india btn">Vesti.kz</a>
                    <div class="boxcontent"><?php echo $page9b['content'];?></p></div>
                </div>
                <div class="bg6" style="background-position:-600px -450px;top:465px;left:620px;"></div>

                <div class="bg6" style="background-position:0 -600px;top:620px;left:0px;"></div>
                <div class="bg6" style="background-position:-150px -600px;top:620px;left:155px;"></div>
                <div class="boxlink bg5" style="top:620px;left:310px;">
                    <?php $page9b = get_content('partner5'); ?>
                    <a href="" class="samewin custom-alpha btn">Android bricks</a>
                    <div class="boxcontent"><p><?php echo $page9b['content'];?></p></div>
                </div>
                <div class="bg6" style="background-position:-450px -600px;top:620px;left:465px;"></div>
                <div class="bg6" style="background-position:-600px -600px;top:620px;left:620px;">
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
