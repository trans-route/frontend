<!DOCTYPE html>
<html lang="en">
	

	<?php
     $this->load->view('general/headtag');
     ?>

  <body>
      <?php $this->load->view('general/aside'); ?>
        <section class="content">
	  <?php $this->load->view('general/header'); ?>
	<?php 
    //side bar function
      if (isset($page_layout)){
       $this->view($page_layout);
      }
  $this->load->view('general/footer');
 
?>
</section>
<?php   $this->load->view('general/foottag'); ?>

</body>
</html>


