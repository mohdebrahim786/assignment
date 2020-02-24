<?php
class factory
{
    private $carname;
    private $year;
    private $price;
    public function __construct($name)
    {
        $this->carname=$name;
        if($this->carname=="baleno")
        {
            $this->year= 2019;
            $this->price="15 lakhs ";
        }
        elseif($this->carname=="hyndai i10")
        {
            $this->year=2015;
            $this->price="7 lakh   ";
        }
        elseif($this->carname=="KUV")
        {
            $this->year=2017;
            $this->price="7 laks   ";
        }
        elseif($this->carname=="alto")
        {
            $this->year=2018;
            $this->price=" 4 lakhs ";
        }
   }
   public function display()
   {
       echo "\n car name :".$this->carname;
       echo "\n Build year: ".$this->year;
       echo "\n Price :".$this->price;
   }
}
class carFactory
{
    public static function create($name)
    {
        return new factory($name);
    } 
}
$test=carFactory::create("swift");
$test1=carFactory::create("alto");
$test2=carFactory::create("baleno");
$test3=carFactory::create("KUV");
print($test->display());
echo"\n";
print($test1->display());
echo"\n";
print($test2->display());
echo"\n";
print($test3->display());
?>