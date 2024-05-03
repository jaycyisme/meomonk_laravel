<?php
include("../Database/Connect.php");
include("../Models/ProductAttribute.php");

class AttributeServices{
    private $list;
    private int $n;
    private $db;
    public function __construct(){
        $this->list=array();
        $this->db=new access_db("meomonk");
        $this->n=0;
    }
    public function view()
    {
        $tablename="attribute";
        $this->list=$this->db->_viewTable($tablename);
        var_dump($this->list);

    }
    public function add(ProductAttribute $h)
    {
    }
    public function edit(ProductAttribute $h)
    {

    }
    public function del(string $masp)
    {

    }
    public function search(string $masp)
    {

    }
    public function search_query(string $query)
    {

    }

    public function getAllAttributeNames() {
        $tablename="attribute";
        $this->list=$this->db->_viewTable($tablename);
        var_dump($this->list);

        return $this->list;
    }





}

$test = new AttributeServices();

$arr = $test->getAllAttributeNames();
foreach ($arr as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>"; // Thay 'id' bằng tên cột ID của bạn
    echo "<td>".$row['name']."</td>"; // Thay 'column1' bằng tên cột thực của bạn
    echo "</tr>";
}
?>