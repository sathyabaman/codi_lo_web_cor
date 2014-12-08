<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Upload Image | Lolcorps.com</title>
<meta name="description" content="Upload your funny images to lolcorps">
<meta name="keywords" content="upload image, funny images, funny pics, funny, lol, laugh, lolcorps, laughout loud">
<!--// Mobile Metas //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php $this->load->view('header');?>

<style>

.styled-select {

   height: 29px;
   overflow: hidden;
   width: 61%;
}


#file_browse_wrapper {

width: 61%;
height: 28px;
background-color: #152452;
overflow:hidden;
}

#file_browse_wrapper:hover {
background: url('file_browse_hover.png') 0 0 no-repeat;
}

#file_browse_wrapper:active {
background: url('file_browse_pressed.png') 0 0 no-repeat;
}

#file_browse{
margin-left:-145px;
opacity:0;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
}


</style>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/upload_form_validation.js"></script>

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
                	<h1 class="heading">Upload Your Image</h1>
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

                            <?php 
                            $attributes = array('id' => 'uploadform');
                            echo form_open_multipart('home/do_upload', $attributes);?>


                            <!--
                           <form method="post" action="<?=base_url("home/upload_image");?>" enctype="multipart/form-data">
                           -->
                                 <ul>
                                        <li>
                                            <input type="text" name="username" placeholder="Enter your name" required>
                                        </li>
                                        <li>
                                            <input type="text" name="title" placeholder="Enter image title" required>
                                        </li>
                                                                        
                                        <li> <span id="categoryerror" style="color: red"></span>
                                            <select class="styled-select" name="category" id="category">
                                            
                                              <option value="0">Select a Category</option>
                                              <?php foreach ($category as $categ):?>
                                              <option value="<?php echo $categ->id; ?>"><?php echo $categ->name; ?></option>
                                              <?php endforeach; ?>
                                            </select> 
                                        </li>


                                        
                                        <li> <span id="languageerror" style="color: red"></span>
                                            <select class="styled-select" name="language" id="language">
                                              <option value="0">Select Image Language</option>

                                              <?php foreach ($language as $lang):?>
                                              <option value="<?php echo $lang->id; ?>"><?php echo $lang->name; ?></option>
                                              <?php endforeach; ?>
                                            </select> 
                                        </li>


                                        <li> <span id="countryerror" style="color: red"></span>
                                            <select class="styled-select" name="country" id="country">
                                              <option value="0">Select your Country</option>

                                              <?php foreach ($country as $crty):?>
                                              <option value="<?php echo $crty->id; ?>"><?php echo $crty->name; ?></option>
                                              <?php endforeach; ?>

                                            </select> 
                                        </li>


                                        <li>
                                            <input id="file_browse_wrapper" type="file" name="image" required>
                                        </li>

                                        <li><br/>
                                            <textarea name="description" placeholder="Enter the description" required/></textarea>
                                        </li>
                                        <li>

                                            <input type="submit" name="submit" value="Submit Your Image">
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


                	<div class="box-small">
                    	<h1 class="heading">Contact Info</h1>
                        <div class="box-in">
                        	<!-- Now Playing Start -->
                        	<div class="contact-widget">
                            	<p>
                                	1234 Saint-Ambroise, Suite 000<br />
                                    Montreal, Otawa, Canada<br />
                                    ABC 123<br />
                                </p>
                                <p>
                                	Call: 1.123.456.7891<br />
									Email: <a href="mailto:hello@theband.com">hello@theband.com</a><br />
                                </p>
                                <h4>Aditional info</h4>
                                <p>
                                	Sales: 1.866.924.1420<br />
									Concerts: <a href="mailto:hello@theband.com">hello@theband.com</a><br />
                                </p>
                            </div>
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