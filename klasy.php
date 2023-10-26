<?php
class Fruit{
    public $name;
    public $color;
    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }

}
class Strawberry extends Fruit{
    public function message(){
        echo "Jestem {$this->name}";
    }
}
$strawberry=new Strawberry("Truskawka","czerwona");
$strawberry->message();
// $strawberry->intro();

?>