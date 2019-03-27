
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/pace.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/chat/moment-2.2.1.js"></script>

        <!-- Counter-up -->
        <script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>


        <!-- jQuery Flot Chart-->
        <script src="<?php echo base_url();?>assets/plugins/rickshaw-chart/vendor/d3.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/rickshaw-chart/vendor/d3.layout.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/rickshaw-chart/rickshaw.min.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/flot-chart/jquery.flot.resize.js"></script>

        <!-- sparkline --> 
        <script src="<?php echo base_url();?>assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/sparkline-chart/chart-sparkline.js"></script> 

        <!-- sweet alerts -->
        <script src="<?php echo base_url();?>assets/plugins/sweet-alert/sweet-alert.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/sweet-alert/sweet-alert.init.js"></script>

        <script src="<?php echo base_url();?>assets/js/jquery.app.js"></script>
        <!-- Chat -->
        <script src="<?php echo base_url();?>assets/js/jquery.chat.js"></script>
        <!-- Dashboard -->
        <script src="<?php echo base_url();?>assets/js/jquery.dashboard2.js"></script>

        <!-- Todo -->
        <script src="<?php echo base_url();?>assets/js/jquery.todo.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>


        <script>
        /* ==============================================
             Counter Up
             =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
<script type="text/javascript">
     function register_account(){
         dataString = $("#register_account").serialize();
              $.ajax({
           type: "POST",
           url: "https://transroutewebapi20190318031230.azurewebsites.net/api/Account/Register",
           // dataType: "json",
           data: dataString,          
  
           success:function(response){
                 var response = JSON.parse(response);
                    console.log(response);
                    if($.isEmptyObject(response.error)){
                    
                }
                else{
                   
                    $('#response_msg').append('<div class="alert alert-danger" role="alert">'+ response.error +'</div>');
                }
                
            }
           });

     }

 $("#register_account").submit(function(){
        register_account();
        return false;
     })
</script>