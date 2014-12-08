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
        <td> <div align="center">
          <h1>Hi <?php echo $this->session->userdata('username');?>! Have a good Day</h1>
        </div>
        
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <?php $this->load->view('admin/admin_footer'); ?>
  </tr>
</table>
</body>
</html>
