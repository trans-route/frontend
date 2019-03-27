<?php
class Pages extends CI_Controller {

		public function index($page = NULL)
        {
       
            $data= array(''); 
            $data['title'] = ucfirst($page); // Capitalize the first letter 
            $data['page_layout']='pages/payment_gateway/dashboard/index';    
            $this->load->view('page_layout', $data);
        }

        public function view($page = NULL)
        {
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_layout']='pages/payment_gateway/'.$page;    
         $this->load->view('page_layout', $data);
        }

        public function pg_reports($page = NULL)
        {
        $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_layout']='pages/payment_gateway/report/index';    
         $this->load->view('page_layout', $data);
        }


        function contact($page = 'contact')
        {
            $data= array(''); 
        $data['title'] = ucfirst($page); // Capitalize the first letter 
         $data['page_layout']='pages/contact';    
         $this->load->view('page_layout', $data);

        }




        function page_not_found(){
         $data['page_layout']='pages/404';    
         $this->load->view('page_layout', $data);

        }
      
    }
?>