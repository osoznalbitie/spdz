<?php
class User {
    private $id;
    private $name;
    private $age;
    private $password;
    private $adress;
    private  $role = 1;
    function __construct($id,$name,$age,$password,$adress,$role) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->password = $password;
        $this->adress = $adress;
        $this->role = $role;
    }
    public function getName()  {
        return $this->name;
    }
    public function getRole() {
        return $this->role;
    }
    public function getAge() {
        return $this->age;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getAdress() {
        return $this->adress;
    }
    public function getID() {
        return $this->id;
    }
}
?>