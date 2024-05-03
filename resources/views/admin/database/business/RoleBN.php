<?php


    class RoleBN{
        private $list;
        private $n;
        private $db;
        
        public function __construct(){
            $this->list=array();
            $this->db=new access_db("test");
            $this->n=0;
        }
        
        public function view() {
            $this->list = $this->db->_viewTable("role");

        
            // Kiểm tra nếu danh sách không rỗng
            if (!empty($this->list)) {
                // Duyệt qua từng dòng trong danh sách và hiển thị thông tin người dùng
                foreach ($this->list as $row) {
                 
                }
            } else {
                // Hiển thị thông báo nếu không có người dùng nào trong cơ sở dữ liệu
                echo "<tr><td colspan='5'>Không có người dùng nào trong cơ sở dữ liệu.</td></tr>";
            }
        }
        
        public function viewCombobox() {
            $this->list = $this->db->_viewTable("Role");
        
            // Kiểm tra nếu danh sách không rỗng
            if (!empty($this->list)) {
                echo '<select name="RoleId" class="form-control">';
                echo '<option value="">Chọn vai trò</option>';
                // Duyệt qua từng dòng trong danh sách và tạo các option trong combobox
                foreach ($this->list as $row) {
                    echo '<option value="' . $row['Id'] . '">' . $row['RoleName'] . '</option>';
                }
                echo '</select>';
            } else {
                // Hiển thị thông báo nếu không có dữ liệu
                echo '<p>Không có dữ liệu vai trò.</p>';
            }
        }
        
        
        public function add(User $user) {
          
        }
        


        // Các phương thức khác
    }

?>
