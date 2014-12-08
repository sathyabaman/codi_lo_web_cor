<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Report Image | Lolcorps.com</title>
<meta name="description" content="Report a violent image">
<meta name="keywords" content="report, funny images, funny pics, funny, lol, laugh, lolcorps, laughout loud">
<!--// Mobile Metas //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php $this->load->view('header');?>

<style>

.styled-select {

   height: 29px;
   overflow: hidden;
   width: 61%;
}


.button, button, input[type="submit"], input[type="button"] {
    height: 35px;
    color: rgba(176, 5, 5, 1) !important;
    width: 363px;
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
                    <li><?php echo anchor('../home/upload_image', 'Upload Your Image', array('class' => 'active'));?></li>
                </ul>
            </div>
            <!-- Second Level Navigation End -->

            <!-- Sub Page Banner End -->
            <div class="clear"></div>
        	<!-- Container Start -->
            <br/>
            <div class="container row">

            	<div class="two-thirds column left">
                	<h1 class="heading">Report This Image</h1>
                    <!-- Contact Us Start -->
                    <div class="in-sec">
                        <div class="contact-us">

 <h3 align="center" style="color : red;"><br/>
        <?php
        $errormessage = $this->session->userdata('error_message');
        if ($errormessage) { echo $errormessage;}else{}
        $this->session->unset_userdata('error_message');
        ?>
        </h3>


      <h3 align="center" style="color : green;"><br/>
        <?php
        $sucessmessage = $this->session->userdata('sucess_message');
        if ($sucessmessage) { echo $sucessmessage;}else{}
        $this->session->unset_userdata('sucess_message');
        ?>
 </h3>

                            <div class="clear"></div>
                            <!-- Quick Inquary Start -->
                            <div class="quickinquiry">

                            <img style="width:60%" src="<?php echo base_url(); ?>assets/uploaded_image/<?php echo $img_details[0]->image; ?>"
                             alt="<?php echo $img_details[0]->title; ?>" />
                             

                            <?php echo form_open_multipart('report/image_report');?>
                                <br/>
                                 <ul>
                                        <li><input type="hidden" name="image_id" value="<?php echo $img_details[0]->id; ?>"></li>
                                        <li>
                                            <select class="styled-select" name="category">
                                              <option value="0">Select a Category</option>

                                              <?php foreach ($category as $categ):?>
                                              <option value="<?php echo $categ->id; ?>"><?php echo $categ->name; ?></option>
                                              <?php endforeach; ?>
                                            </select> 
                                        </li>

                                        <li>
                                            <textarea name="description" style="width: 61%" placeholder="Enter your reason" required/></textarea>
                                        </li>
                                        <li>
                                            <input type="submit" name="submit" value="Report This Image">
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <!-- Quick Inquary End -->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- Contact Us End -->
                </div>
                <div class="one-third column left">

                    <div class="box-small">
                        <div class="box-in">
                            <!-- Now Playing Start -->
                            <!--facebook like box-->
                            <div class="fb-like-box" data-href="https://www.facebook.com/pages/LOL-Corps/1545824795629112" data-width="260" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                            <!--facebook like box end-->
                            <!-- Now Playing End -->
                            <div class="clear"></div>
                        </div>
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