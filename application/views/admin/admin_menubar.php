      <table width="200" border="1">
      <tr>
        <td><h3>Hi <?php echo $this->session->userdata('username');?>!<h3></td>
      </tr>
      <tr>
        <td><?php echo anchor('admin404500_corps/image_approval', 'Approve Images');?></td>
      </tr>
      <tr>
        <td>Edit Title</td>
      </tr>
      <tr>
        <td>Edit category</td>
      </tr>
      <tr>
        <td>Edit Description</td>
      </tr>
      <tr>
        <td>Deactivate Images</td>
      </tr>
      <tr>
        <td><?php echo anchor('admin404500_corps/reported_image', 'See Reported Images');?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?php echo anchor('admin404500_corps/logout', 'Logout');?></td>
      </tr>
    </table>