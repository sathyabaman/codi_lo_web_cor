<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $cate_name[0]->name; ?> | Lolcorps.com</title>
<meta name="description" content="View all funny images in <?php echo $cate_name[0]->name; ?> category">
<meta name="keywords" content="<?php echo $cate_name[0]->name; ?>, funny images, funny pics, funny, lol, laugh, lolcorps, laughout loud">
<!--// Mobile Metas //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php $this->load->view('header');?>

</head>
<body>
<!-- Outer Wrapper Start -->
<div id="outer-wrapper">
    <div class="inner">
        <!-- Header Start -->
        <div id="header">
            <span class="topbar">&nbsp;</span>
            <!-- Container Start -->
            <div class="container">
                <!-- Logo Start -->
                <div class="five columns left">
                    <?php $this->load->view('logo');?>
                </div>
                <!-- Logo End -->
                <div class="eleven columns right">
            
                    <?php $this->load->view('top_navigation');?>

                <div class="clear"></div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Header End -->
        <div class="clear"></div>
        <div class="inner shadow">
            <!-- Second Level Navigation Start -->
            <div class="second-nav">
                <ul>
                    <li><?php echo anchor('../home/most_recent', 'Most Recent');?></li>
                    <li><?php echo anchor('../home/most_popular', 'Most Popular');?></li>
                    <li><?php echo anchor('../category/', 'All Categories');?></li>
                    <li><?php echo anchor('../category/facebook_comments', 'Facebook Comment');?></li>
                    <li><?php echo anchor('../home/upload_image', 'Upload Your Image');?></li>
                </ul>
            </div>
            <!-- Second Level Navigation End -->
            <div class="clear"></div>
            <!-- Sub Page Banner Start -->
            
            <div id="sub-banner" class="row">
                <!--<a href="#"><img src="images/sub-banner2.jpg" alt="" /></a>-->
                <div class="sub-caption">
                    <h1></h1>
                    <h1>OUR <span class="colr">BAND</span></h1>
                </div>
            </div>

            <!-- Sub Page Banner End -->
            <div class="clear"></div>
            <!-- Container Start -->
            <div class="container row">
                <div class="sixteen columns left">

                    <h1 class="heading"><?php echo $cate_name[0]->name; ?></h1>

                    <!-- Album Detail Start -->
                    <div class="in-sec nopad-bot">
                        <div id="tab-rock">
                                    <ul class="prod-list">

                                    <?php foreach ($category as $image): ?>
                                        <li>
                                            <a href="<?php echo base_url(); ?>view/image/<?php echo $image->id;?>/<?php echo $image->title;?>" class="thumb">
                                            <img src="<?php echo base_url(); ?>assets/uploaded_image/<?php echo $image->image; ?>" alt="<?php echo $image->title; ?>" width="208px" height="198px" /><span>&nbsp;</span></a>
                                            <h4 class="title"><a href="<?php echo base_url(); ?>view/image/<?php echo $image->id;?>/<?php echo $image->title;?>"><?php echo substr($image->title, 0, 20); ?>......</a></h4>
                                            <p>Category : <?php echo $image->name; ?></p>
                                            <div class="prod-opts">
                                                <h6>Views : <?php echo $image->views; ?></h6>
                                            </div>
                                        </li>
                                    <?php endforeach;?>

                                    </ul>
                                    <div class="clear"></div>
                                </div>
                        <div class="clear"></div>
                    </div>
                    <!-- Tabs Section End -->
                    <div class="clear"></div>
                    <div class="in-sec">
                        <ul class="pagination">

                            <li><?php echo $this->pagination->create_links();?></li>

                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <?php $this->load->view('footer');?>

        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- Outer Wrapper End -->
</body>
</html>


