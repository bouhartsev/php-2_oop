<?php
    class ParentClass{
        protected $name='Parent Name';
        private $age=40;
        
        public function setName(string $name)
        {
            $this->name=$name;
            //self::$name=$name; // use this to change default value in all classes
        }
        
        public function getName()
        {
            return $this->name;
        }

        public function getAge()
        {
            return $this->age;
        }
        
        public function sayHello(){
            echo 'Привет! Меня зовут '.$this->name.'.';
        }
    }

    class ChildClass extends ParentClass
    {
        protected $name='Child Name';
        private $age=20;
        
        public function getName()
        {
            return parent::getName();
        }

        public function getAge()
        {
            return parent::getAge();
        }
    }

    $parent1=new ParentClass();
    $child1 = new ChildClass();
    
    echo 'We need protected to change default values'.'<br>';
    echo $parent1->getName().'<br>';
    echo $child1->getName().'<br>';
    echo "It's not working with private".'<br>';
    echo $parent1->getAge().'<br>';
    echo $child1->getAge().'<br>';
?>