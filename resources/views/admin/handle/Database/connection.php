<?php

class connection
{
    private $host = "localhost";
    private $username = "root";
    private $password = "123456";
    private $dbname;
    private $ocon;

    public function __construct(string $dbname)
    {
        $this -> dbname = $dbname;

        $this -> ocon = new mysqli($this -> host, $this -> username, $this -> password, $this -> dbname);
        if ($this -> ocon -> connect_error) {
            die("Lỗi kết nối" . $this -> ocon -> connect_error);
        }

    }

    public function _viewTable($tablename)
    {
        $sql = "SELECT * FROM $tablename";
        $result = $this -> ocon -> query($sql);
        $data = array();
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function _viewDistinctTable($tableName): array
    {
        $sql = "SELECT DISTINCT * FROM $tableName";
        $result = $this -> ocon -> query($sql);
        $data = array();
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }


    public function _search_query(string $sql)
    {
        $result = $this -> ocon -> query($sql);
        $data = array();
        if ($result -> num_rows > 0) {
            while ($row = $result -> fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function execute($_query): bool
    {
        if ($this -> ocon -> query($_query) === TRUE)
            return TRUE;
        else
            return FALSE;

    }

    //Kiểm tra kết nối thành công

}


//$db=new access_db("meomonk");
//$arr=$db->_viewTable("attribute");
//
//foreach ($arr as $row) {
//    echo "<tr>";
//    echo "<td>".$row['id']."</td>"; // Thay 'id' bằng tên cột ID của bạn
//    echo "<td>".$row['name']."</td>"; // Thay 'column1' bằng tên cột thực của bạn
//    echo "</tr>";
//}
// var_dump($arr->fetch_assoc());
?>