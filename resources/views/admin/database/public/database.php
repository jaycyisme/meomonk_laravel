<?php    
    class access_db
    {
        private $host="localhost"; #Địa chỉ ip máy chủ
        private $username="root";
        private $password="123456";
        private $dbname;
        private $ocon;
        public $connected;

        public function __construct(string $dbname)
        {
            $this->dbname=$dbname;
            $this->ocon=new mysqli($this->host,$this->username,$this->password,$this->dbname);
            if($this->ocon->connect_error)
            {
                die( "Lỗi kết nối".$this->ocon->connect_error);
            }
        }
        
        public function _viewTable($tablename)
        {
            $sql="SELECT * FROM $tablename";
            $result=$this->ocon->query($sql);
            $data = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        
        public function _search_query(string $sql)
        {
            $result=$this->ocon->query($sql);
            return $result->fetch_assoc();
        }
        
        public function excute($_query)
        {
            if($this->ocon->query($_query)===TRUE)
                return TRUE;
            else
                return FALSE;
        }
    }
    
    $db = new access_db("meomonk");

?>
