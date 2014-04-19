<?php include('header.php'); ?>
<?php $h24 = get_body_id(); ?>

<body class="<?php echo $h24; ?>">
<?php include('topmain.php'); ?>
<div id="index">
    <?php init_day_time($h24) ?>
    
    <div class="container_6 content">
        <div class="item border-shadowed rounded6" id="portfolio">
            <?php $portfolio = get_content('portfolio'); ?>
            <h1 class="grid_6"><?php echo $portfolio['title'];?></h1>
            <div class="clear"></div>
            <?php echo $portfolio['content'];?>
            <div class="clear"></div>
            <?php get_component('os'); ?>
        </div>
        
        <div class="item border-shadowed rounded6 item-notmain" id="contacts">
            <?php $contacts = get_content('contacts'); ?>
            <h1 class="grid_6"><?php echo $contacts['title'];?></h1>
            <div class="clear"></div>
            <div class="grid_4">
                <?php
                    echo $contacts['content'];
                    $p01contact = new P01contact();
                    echo $p01contact->parse('(% contact : message %)');
                ?>
                <script type='text/javascript'>initContacts();</script>
            </div>
            <div class="grid_2">
                <?php $sidebar = gst_getsidebar('contacts'); ?>
                <?php echo $sidebar['content'];?>
            </div><!-- /.grid_2 -->
            <div class="clear"></div>
        </div>
        
        <div class="item border-shadowed rounded6 item-notmain" id="partners">
            <?php $partners = get_content('partners'); ?>
            <h1 class="grid_6"><?php echo $partners['title'];?></h1>
            <div class="clear"></div>
            <?php $columns =  gst_childpages('partners'); ?>
            <?php $i = 0; 
                foreach($columns as $column):?>
                    <div class="grid_2">
                        <?php echo $column['content'];?>
                    </div>
                    <?php if (3 == ++$i): ?>
                        <div class="clear"></div>
                    <?php endif; ?>
                <?php endforeach;?>
            <div class="clear"></div>
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
