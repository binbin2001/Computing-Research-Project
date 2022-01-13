<?php 
require_once "Laptop.php";

class LaptopModel {
   public function getLaptopList() {
      // khởi tạo array chứa danh sách laptop
      $laptopList = array(
         //array index (laptop name) => array element (Laptop object)
         "Dell XPS 13" => new Laptop("Dell XPS 13", "Dell", 1234.5, "Silver", 2021),
         "Macbook Air M1" => new Laptop("Macbook Air M1", "Apple", 1345.6, "White", 2020),
         "LG Gram 15" => new Laptop("LG Gram 15", "LG", 1111.3, "Black", 2022),
      );
      return $laptopList;
   }
   public function getLaptopDetail($name) {
      $laptops = $this->getLaptopList();
      return $laptops[$name];
   }  
}
?>