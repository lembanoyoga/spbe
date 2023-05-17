<?php
class My404 extends CI_Controller {
   function error_404()
   {
       $this->output->set_status_header('404');
       echo "404 - not found";
   }
}