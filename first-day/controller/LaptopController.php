<?php
require_once "model\LaptopModel.php";

class LaptopController {
   public $model;

   public function __construct()
   {
      $this->model = new LaptopModel();
   }

   public function viewLaptop() {
      //TH1: view toàn bộ laptop
      if (!isset($_GET['name'])) {
         //lấy laptop list từ LaptopModel
         $laptops = $this->model->getLaptopList();
         //render view
         require_once "view\LaptopList.php";
      }
      //TH2: view 1 laptop theo tên (name)
      else {
         $laptop = $this->model->getLaptopDetail($_GET['name']);
         require_once "view\LaptopDetail.php";
      }
   }
}
?>