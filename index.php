<?php
    abstract class Family {
        public $peopleCount;
        private $age;
        
        public function getPeopleCount() {
            return $this->peopleCount;
        }

        public function setPeopleCount($peopleCount) {
            $this->peopleCount = $peopleCount;
        }

        public function getAge() {
            return $this->age;
        }

        public function setAge($age) {
            $this->age = $age;
        }
    }

    class Father extends Family {
        private $wife;
        
        public function getWife() {
            return $this->wife;
        }

        public function setWife($wife) {
            $this->wife = $wife;
        }

    }

    class Mother extends Family {
        private $husband;
        
        public function getHusband() {
            return $this->husband;
        }

        public function setHusband($husband) {
            $this->husband = $husband;
        }

    }
    
    class Child extends Family {
        private $sex;

        public function getSex() {
            return $this->sex;
        }

        public function setSex($sex) {
            $this->sex = $sex;
        }
    }

    $child = new Child;
    $child->setSex('Мужской');
    $child->setAge(11);

    echo $child->getSex();
    echo '<br>';
    echo $child->getAge();
?>