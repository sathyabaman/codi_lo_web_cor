<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $img_details[0]->title; ?> | lolcorps.com</title>
<meta name="description" content="<?php echo $img_details[0]->description; ?>">
<meta name="keywords" content="
<?php echo $img_details[0]->title; ?>,
<?php echo $img_details[0]->name; ?>,
<?php echo $img_details[0]->user_name; ?>,
<?php echo $img_details[0]->country; ?>">
<meta name="author" content="<?php echo $img_details[0]->user_name; ?>">

<!--// Mobile Metas //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<?php $this->load->view('header');?>


<style>


.blog-desc{
    font-size-adjust: 0.68;
}

p {
    margin: 0px;
    font-size: 15px;
}
.availble_report {
    width: 224px;
    float: left;
    margin-right: 63px;
}

.availble_report2 {
    width: 224px;
    float: left;
    margin-left: 34px;
}
</style>

</head>
<body>

<!--facebook like widgard javascript code start-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--facebook like widgard javascript code end-->




<!-- Outer Wrapper Start -->
<div id="outer-wrapper">
	<div class="inner">
    	<!-- Header Start -->
    	<div id="header" class="nomarg">
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




<br/>
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
            </div>
            <!-- Sub Page Banner End -->
            <div class="clear"></div>
        	<!-- Container Start -->
            <div class="container row">

            	<div class="two-thirds column left">
                	<h1 class="heading"><?php echo substr($img_details[0]->title, 0, 50); ?></h1>
                    <!-- Album Detail Start -->


                    <div class="in-sec">
                        <div class="album-opts">

                            <?php if($previous_image):?>
                             <div class="availble">
                                <a class="button" href="
                                <?php echo base_url(); ?>view/image/<?php echo $previous_image[0]->id;?>/<?php echo $previous_image[0]->title;?>">
                                Previous Image</a>
                            </div>
                            <?php endif; ?> 
                                                
                            <div class="share-album">
                                <a href="#"><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/"></div></a>
                                <a href="#"> | Views(<?php echo $img_details[0]->views; ?>)</a>
                            </div>

                           <?php if($next_image):?>
                            <a class="button" href="<?php echo base_url(); ?>view/image/<?php echo $next_image[0]->id;?>/<?php echo $next_image[0]->title; ?>">
                                Next Image</a>
                            <?php endif; ?> 

                            <div class="clear"></div>
                        </div>
                    </div>


                    <!-- Blog Post Start -->
                    <div class="in-sec">

                        <div class="blog-detail">
                            <a href="blog-detail.html" class="thumb"><img src="<?php echo base_url(); ?>assets/uploaded_image/<?php echo $img_details[0]->image; ?>" alt="<?php echo $img_details[0]->title; ?>" /></a>

                            <div class="blog-desc">
                                <p class="txt">
                                    <?php echo $img_details[0]->description; ?>
                            </div>

                        </div>
                    </div>
                    <!-- Blog Post End -->

                  

                    <div class="in-sec">



                        <div class="album-opts">

                            
                             <div class="availble_report">
                                <h5><a href="#">Uploaded by : <?php echo $img_details[0]->user_name; ?></a></h5>
                                <p class="txt">
                                    Country : <?php echo $img_details[0]->country; ?>
                                </p>
                            </div>
                          
                                                
                         

                            <div class="availble_report2">
                                <a href="<?php echo base_url(); ?>report/image/<?php echo base64_encode($img_details[0]->id); ?>">
                                <img style="float: right" src="<?php echo base_url(); ?>assets/images/report.png" alt="" />
                                </a>
                            </div>

                          

                            <div class="clear"></div>
                        </div>

                  
                    </div>


                    <!-- Comments Start -->
                    <!--
                    <div class="comments">
                    	<h1 class="heading">comments</h1>
                        <ul>
                        	<li>
                            	<div class="avatar">
                                	<a href="#"><img src="images/avatar1.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                	<div class="desc-in">
                                        <span class="pointer">&nbsp;</span>
                                        <div class="text-desc">
                                            <h5><a href="#">Mike Miller</a></h5>
                                            <p class="ago">23 Hours Ago</p>
                             
                                            <p class="txt">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in magna ipsum. Nunod, nisi ac 
                                            </p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                            	<div class="avatar">
                                	<a href="#"><img src="images/avatar2.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                	<div class="desc-in">
                                        <span class="pointer">&nbsp;</span>
                                        <div class="text-desc">
                                            <h5><a href="#">Mike Miller</a></h5>
                                            <p class="ago">23 Hours Ago</p>
                          
                                            <p class="txt">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in magna ipsum. Nunod, nisi ac 
                                            </p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
             
   
                            <li>
                            	<div class="avatar">
                                	<a href="#"><img src="images/avatar5.gif" alt="" /></a>
                                </div>
                                <div class="desc">
                                	<div class="desc-in">
                                        <span class="pointer">&nbsp;</span>
                                        <div class="text-desc">
                                            <h5><a href="#">Mike Miller</a></h5>
                                            <p class="ago">23 Hours Ago</p>
                         
                                            <p class="txt">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in magna ipsum. Nunod, nisi ac 
                                            </p>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    -->
                    <!-- Comments End -->
                    <!-- Leave a Reply Start -->
                    <!--
                    <div class="leavereply">
                    	<h1 class="heading">Write your comments</h1>
                        <form class="forms">
                        <ul>
                        	<li>
                            	<input name="" value="Enter Your Name"
                                onfocus="if(this.value=='Enter Name') {this.value='';}"
                                onblur="if(this.value=='') {this.value='Enter Name';}" type="text" />
                            </li>
        
                            <li>
                            	<textarea rows="" cols=""
                                onfocus="if(this.value=='Enter Massage') {this.value='';}"
                                onblur="if(this.value=='') {this.value='Enter Massage';}" />Enter Massage</textarea>
                            </li>
                            <li>
                            	<button>Submit Comment</button>
                            </li>
                        </ul>
                        </form>
                    </div>
                    -->
                    <!-- Leave a Reply End -->
                </div>


                <!-- Album Detail End -->
                <div class="one-third column left">
                	
                    <div class="box-small">
                        <div class="box-in">
                            <!-- Now Playing Start -->
                            <!--facebook like box-->
                            <div class="fb-like-box" data-href="https://www.facebook.com/pages/LOL-Corps/1545824795629112" data-width="260" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                            <!--facebook like box end-->

                            </a>
                            <!-- Now Playing End -->
                            <div class="clear"></div>
                        </div>
                    </div>


                    
                    <div class="box-small">
                        <h1 class="heading">Top Categories</h1>
                        <div class="box-in">
                            <!-- Now Playing Start -->
                            <div class="widget-links">

                                <ul>

                                <?php foreach ($top_categry as $tp_category): ?>

                                <li><a href="<?php echo base_url(); ?>category/<?php echo $tp_category->url_name;?>">
                                <span><?php echo $tp_category->name;?></span><span><?php echo $tp_category->total;?>
                                </span></a>
                                </li>

                                <?php endforeach; ?>

                            </ul>
                            </div>
                            <!-- Now Playing End -->
                            <div class="clear"></div>
                        </div>
                    </div>

                   
                    <div class="box-small">
                       
                        <div class="clear"></div>
                    </div>





                </div>
            </div>



            <div class="clear"></div>
            <div class="container row hidemobile">
                <div class="sixteen columns">
                    <!-- Albums Start -->
                    <div class="prod-sec">
                        <div class="prod-head">
                            <h1>You may also like</h1>
                    
                            <div class="clear"></div>
                        </div>
                        <ul class="prod-list">
                        <?php foreach ($u_may_like as $um_like): ?>
                            <li>
                                <a href="<?php echo base_url(); ?>view/image/<?php echo $um_like->id;?>/<?php echo $um_like->title;?>" class="thumb">
                                <img src="<?php echo base_url(); ?>assets/uploaded_image/<?php echo $um_like->image; ?>" alt="<?php echo $um_like->title; ?>" width="208px" height="198px" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="<?php echo base_url(); ?>view/image/<?php echo $um_like->id;?>/<?php echo $um_like->title;?>"><?php echo substr($um_like->title, 0, 20); ?>......</a></h4>
                                <p>Category : <?php echo $um_like->name; ?></p>
                                <div class="prod-opts">
                                    <h6>Views : <?php echo $um_like->views; ?></h6>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- Albums End -->
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