<?php
class Customer
{
  private $id;
  private $firstName;
  private $lastName;
  private $email;
  public function __construct($id,$firstName,$lastName,$email)
  {
    $this->id = $id;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
  }
   public function __toString()
   {
    return "Customer ID:{$this->id},<br>
    Name:{$this->firstName}{$this->lastName},<br>
    Email:{$this->email}<br>";
   }
   public function getId()
    {
        return $this->id;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

   public function __get($property)
   {
    if(property_exists($this,$property))
    {
        return $this->$property;
    }
   }
   public function __set($property,$value)
   {
    if(property_exists($this,$property))
    {
        $this->$property=$value;
    }
   }
   
    
  
}
?>