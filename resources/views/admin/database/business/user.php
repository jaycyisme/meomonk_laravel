<?php
//
//
//    class list_mathang{
//        private $list;
//        private $n;
//        private $db;
//
//        public function __construct(){
//            $this->list=array();
//            $this->db=new access_db("meomonk");
//            $this->n=0;
//        }
//
//        public function view() {
//            $this->list = $this->db->_viewTable("Users");
//
//
//            // Kiểm tra nếu danh sách không rỗng
//            if (!empty($this->list)) {
//                // Duyệt qua từng dòng trong danh sách và hiển thị thông tin người dùng
//                foreach ($this->list as $row) {
//                    echo "<tr>";
//                    echo "<td>";
//                    echo "<div class='user-name'>";
//                    echo "<span>" . $row['Username'] . "</span>"; // Giả sử có trường Address trong cơ sở dữ liệu
//                    echo "</div>";
//                    echo "</td>";
//
//                    echo "<td>";
//                    echo "<div class='user-name'>";
//                    echo "<span>" . $row['Name'] . "</span>"; // Giả sử có trường Address trong cơ sở dữ liệu
//                    echo "</div>";
//                    echo "</td>";
//
//                    echo "<td>" . $row['PhoneNumber'] . "</td>";
//                    echo "<td>" . $row['Email'] . "</td>";
//
//                    echo "<td>";
//                    echo "<ul>";
//                    echo "<li><a href='order-detail.html'><i class='ri-eye-line'></i></a></li>";
//                    echo "<li><a href='javascript:void(0)'><i class='ri-pencil-line'></i></a></li>";
//                    echo "<li><a href='javascript:void(0)' data-bs-toggle='modal' data-bs-target='#exampleModalToggle'><i class='ri-delete-bin-line'></i></a></li>";
//                    echo "</ul>";
//                    echo "</td>";
//
//                    echo "</tr>";
//                }
//            } else {
//                // Hiển thị thông báo nếu không có người dùng nào trong cơ sở dữ liệu
//                echo "<tr><td colspan='5'>Không có người dùng nào trong cơ sở dữ liệu.</td></tr>";
//            }
//        }
//
//
//        public function add(User $user) {
//            $username = $this->ocon->real_escape_string($user->getUsername());
//            $email = $this->ocon->real_escape_string($user->getEmail());
//            $name = $this->ocon->real_escape_string($user->getName());
//            $phoneNumber = $this->ocon->real_escape_string($user->getPhoneNumber());
//            $password = $this->ocon->real_escape_string($user->getPassword());
//            $roleId = $user->getRoleId();
//
//            // Xây dựng câu lệnh SQL INSERT
//            $sql = "INSERT INTO Users ( Username, Email, Name, PhoneNumber, Password, RoleId) VALUES
//            ('$username', '$email', '$name', '$phoneNumber', '$password', $roleId)";
//
//            // Thực thi câu lệnh SQL INSERT
//            return $this->execute($sql);
//        }
//
//        // Các phương thức khác
//    }
//
//    $l1=new list_mathang();
//    $l1->view();
//?>
