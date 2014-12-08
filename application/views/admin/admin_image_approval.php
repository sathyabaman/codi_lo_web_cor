<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lolcorps - Admin Pannel</title>
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td height="63" colspan="3"><h1 align="center">Welcome to LolCoprs - Admin Pannel</h1></td>
  </tr>
  <tr>
    <td width="173">
        <?php $this->load->view('admin/admin_menubar');?>
    </td>
        <td width="100%" colspan="2"><table width="100%" border="1">
      <tr>
        <td> 
          <table width="100%" border="1">
            <tr>
              <td colspan="3"><h2>Image approval</h2></td>
            </tr>
            <?php foreach($images_approval as $image_apl): ?>
           
            <tr>
              <td width="20%">
              	<img style="width:300px" src="<?php echo base_url(); ?>assets/uploaded_image/<?php echo $image_apl->image; ?>"/>         
              </td>
              <td width="40%">
              	Image ID	: <?php echo $image_apl->id; ?><br/>
              	Title 		: <?php echo $image_apl->title; ?><br/>
              	Image name  : <?php echo $image_apl->image;?><br/>
              	Category 	: <?php echo $image_apl->category_name; ?><br/>
              	Country  	: <?php echo $image_apl->country_name;?><br/>
              	User name 	: <?php echo $image_apl->user_name; ?><br/>
 
               </td>
              <td width="20%" align="center">
              	<?php echo anchor('admin404500_corps/approve_iamge/'.$image_apl->id, 'Approve'); ?> <br/>
              	<?php echo anchor('admin404500_corps/deactivate_iamge/'.$image_apl->id, 'Deactivate'); ?><br/>
              	<?php echo anchor('admin404500_corps/delete_image/'.$image_apl->id, 'Delete'); ?>
              	

              </td>
            </tr>
       		 <?php endforeach; ?>
          </table>
        
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <?php $this->load->view('admin/admin_footer'); ?>
  </tr>
</table>
</body>
</html>
