<?php
class Role {
    private $id;
    private $code;
    private $roleName;

    public function __construct() {
  
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function getRoleName() {
        return $this->roleName;
    }

    // Setter methods
    public function setId($id) {
        $this->id = $id;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setRoleName($roleName) {
        $this->roleName = $roleName;
    }
}
?>
