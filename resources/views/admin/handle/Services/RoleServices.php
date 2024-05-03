<?php


namespace Services;

use connection;
use Models\User;

class RoleServices
{
    private array $list;
    private $n;
    private connection $conn;

    public function __construct()
    {
        $this -> list = array();
        $this -> conn = new connection("meomonk");
        $this -> n = 0;
    }

    public function viewRole(): void
    {
        $this -> list = $this -> conn -> _viewTable("Role");


        if (!empty($this -> list)) {
            foreach ($this -> list as $row) {

            }
        } else {
            echo "<tr><td colspan='5'>Không có người dùng nào trong cơ sở dữ liệu.</td></tr>";
        }
    }

    public function viewDistinctRole(): void
    {
        $this -> list = $this -> conn -> _viewDistinctTable("Role");

        if (!empty($this -> list)) {
            echo '<select name="RoleId" class="form-control">';
            echo '<option value="">Select Role</option>';

            foreach ($this -> list as $row) {
                echo '<option value="' . $row['Id'] . '">' . $row['RoleName'] . '</option>';
            }
            echo '</select>';
        } else {
            echo '<p>Không có dữ liệu vai trò.</p>';
        }
    }


    public function add(User $user)
    {

    }


    // Các phương thức khác
}

