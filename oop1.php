<?php

//class

class User
{
  //public $email;
  //public $name;
  private $email;
  private $name;

  public function __construct($name, $email)
  {
    $this->email = $email;
    $this->name = $name;
  }

  public function login()
  {
    //echo 'The User has logged in ';
    echo $this->name . ' logged in';
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    if (is_string($name) && strlen($name) > 1) {
      $this->name = $name;
      return "Name has been updated to $name";
    } else {
      return 'Not a valid name';
    }
  }
}

//$userOne = new User();

//$userOne->login();
//echo $userOne->name;

$userTwo = new User('Yoshi', 'yoshi@netninja.co.uk');
//echo $userTwo->name;
//echo $userTwo->email;
$userTwo->login();
echo $userTwo->getName();
echo $userTwo->setName(50);
echo $userTwo->setName('Barry');
echo $userTwo->getName();
