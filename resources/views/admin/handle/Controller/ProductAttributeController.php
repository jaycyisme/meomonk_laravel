<?php
//include("../Database/connection.php"); // Import file access_db.php để sử dụng class access_db

include("../handle/Services/ProductAttributeServices.php");

class AttributeController
{
    private $productAttributeServices;

    public function __construct()
    {
        $this -> productAttributeServices = new ProductAttributeServices(); // Khởi tạo đối tượng của lớp ProductAttributeServices
    }

    public function viewAttributes()
    {
        $this -> productAttributeServices -> view(); // Gọi phương thức view() của lớp ProductAttributeServices
    }

    public function getAllAttributeValue()
    {
        $this -> productAttributeServices -> getAllAttributeValues();
    }

    public function getAllProductName()
    {
        $this -> productAttributeServices -> getAllProductName();
    }
}

?>
