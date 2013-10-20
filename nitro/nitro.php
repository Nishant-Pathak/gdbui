<?php

include_once("include/nitro_response.php");

session_start();

$request_uri = $_SERVER["REQUEST_URI"];

$obj = new nitro();

call_user_func_array(array($obj,"processReq"), array());

class nitro{

   private $response = null;

   public function __construct(){
      $this->response = new nitro_response();
   }

   public function processReq(){
      $this->send_response();
   }


   private function send_response(){
      header("Content-type: application/json; charset=utf-8");
      print $this->response->to_string();
   }
}
?>
