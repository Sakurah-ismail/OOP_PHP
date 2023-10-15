<?php
class Books{
    public $isbn;
    public $title;
    public $author;
    public $available;
 public function __construct(int $isbn, string $title, string $author,int $available) {
$this->isbn = $isbn;
$this->title = $title;
$this->author = $author;
$this->available = $available;
}

public function addCopy($num):bool
 {
    if($num>0)
    {
        $this->available+=$num;
        return true;
    }
    else
    {
        return false;
    }
 }

public function get_copy():bool
{
  if($this->available<1)
  {
    return false;
  }
  else
  {
    return true;
  }
}
public function __toString()
{
    return "ISBN:{$this->isbn},<br>
    Title:{$this->title},<br>
    Author:{$this->author},<br>
    Available Copies:{$this->available}<br>";
}
public function getIsbn()
    {
        return $this->isbn;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getAvailable()
    {
        return $this->available;
    }
public function __get($property)
   {
    if(property_exists($this,$property))
    {
        return $this->$property;
    }
   }
   public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}
?>