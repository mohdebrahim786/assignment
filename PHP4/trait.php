<?php 
trait f
{
  public function demo()
    {
      echo("1st printed");
    }
}
trait s
{
  public function demo2()
    {
      echo("2nd printed");
    }
}
trait t
{
  public function demo3()
    {
      echo("3rd printed");
    }
}

class c
{
  use f,s,t;
} {

   $o=new c;
   $o->demo();
   $o->demo2();
   $o->demo3();
  }
class c2
{
  use f,s,t;
  public function demo()
   { 
   echo"function overloaded";
    
}
}
$obj1= new c2();
$obj1->demo();
$obj1->demo2();
$obj1->demo3();
?>