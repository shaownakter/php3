<?php


namespace App\classes;


use mysql_xdevapi\Statement;

class operator
{

  public $x;
  public $y;
  protected $z;

  public function index()
  {

      $this->x = 10;
      $this->y = 20;
      $this->z = 30;

//      ==========Statement=============
////      /*
//           *single line statement
//             *conditional Statement
//               *if
//                *if else
//                 *if else if
//                 *switch
//           *Repeated statement
//               *for
//                *WHTLE
//                 *DO WHTLE
//                    *FOREACH
//                   *ARRAY

//      if($this->x > $this->y)
//      {
//          echo 'Its true';
//      }else{
//          echo 'False';
//      }
//      if($this->x < $this->y)
//      {
//          echo 'Its true';
//      }else{
//          echo 'False';
//      }
//
//      if($this->x > $this->y)
//      {
//          echo 'hello bitm';
//      }else{
//          echo 'bye';
//      }

//      if($this->x < $this->y)
//      {
//          echo 'hello bitm';
//      }
//       else if($this->y < $this->z)
//       {
//           echo 'hello dhaka';
//       }
//      else if($this->z > $this->x)
//  {
//      echo 'hello shaown';
//  }
//      else{
//          echo 'bye';
//      }

      switch ($this->y)
      {
          case 10:
              echo "hellon world";
              break;
          case 20:
              echo "hello bitm";
              break;
          case 30:
              echo "hello bbbb";
              break;
          default:
              echo 'Bye';
      }





//      echo ($this->x > $this->y) || ($this->y > $this->z);
//      echo '<br/>.....<br/>';
//      echo ($this->x > $this->y) || ($this->y < $this->z);
//      echo '<br/>.....<br/>';
//      echo ($this->x < $this->y) || ($this->y > $this->z);
//      echo '<br/>.....<br/>';
//      echo ($this->x < $this->y) || ($this->y < $this->z);
//      echo '<br/>.....<br/>';


//      echo $this->x += $this->y; //$x = $x+$y=30
//      echo '<br/>';
//      echo $this->x -= $this->y; //$x = $x-$y=3 (30-20)=10
//      echo '<br/>';
//      echo $this->x *= $this->y; //$x = $x*$y=3 (10*20)=200
//      echo '<br/>';
//      echo $this->x /= $this->y;
//      echo '<br/>';
//      echo $this->x %= $this->y;
//      echo '<br/>';
//      echo $this->x .= $this->y;
//      echo '<br/>';

//      echo $this->x++;
//      echo '<br/>';
//      echo $this->x--;
//      echo '<br/>';
//      echo ++$this->x;
//      echo '<br/>';
//      echo --$this->x;
//      echo '<br/>';


  }
}