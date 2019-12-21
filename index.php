<?php 
    //echo "Putin huylo!!";
//    $age = 27;
//    $name = 'Fedor';

interface UserInterface {
    public function getName();
    public function setName();
    public function getPassword();
    public function setPassword();
    public function saveData ();
}

interface AdminInterface extends UserInterface{
    public function delete();
}

interface GuestInterface extends UserInterface{
    public function pay();
}

    class UserAdmin implements AdminInterface{
        private $name;
        private $age;
        
        public function delete();
        public function getPassword();
        public function setPassword();
        public function __construct($nameValue,$ageValue) {
            $this->name = $nameValue;
            $this->age = $ageValue;
        }
        public function getName() {
            return $this->name . '  ' . $this->age;
        }
        public function setName($nameValue) {
            $this->name = $nameValue;
        }
        public function saveData() {
            var_dump($this->age . ' ' . $this->name);
        }
    }

   class UserGuest implements GuestInterface{
        private $name;
        private $age;
        
        public function pay();
        public function getPassword();
        public function setPassword();
        public function __construct($nameValue,$ageValue) {
            $this->name = $nameValue;
            $this->age = $ageValue;
        }
        public function getName() {
            return $this->name . '  ' . $this->age;
        }
        public function setName($nameValue) {
            $this->name = $nameValue;
        }
        public function saveData() {
            var_dump($this->age . ' ' . $this->name);
        }
    }