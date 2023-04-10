<?php 
namespace Reflection;

require "BookInterface.php"; 

class Book implements BookInterface {

     private $title;

     private $author;

     private $description;

     private $createdAt;

     private $isAvaliable;

     private $category;

     public function getTitle()
     {
       return $this->title;
     }

     public function setTitle($tittle)
     {
        $this->title = $tittle;
     }

     public function getAuthor()
     {
       return $this->author;
     }

     public function setAuthor($author)
     {
        $this->author = $author ;
     }
     public function getDescription()
     {
       return $this->description;
     }
     public function setDescription($description)
     {
        $this->description = $description;
     }
     public function getCreatedAt()
     {
       return $this->createdAt;
     }
     public function setCreatedAt($createdAt)
     {
        $this->createdAt = $createdAt;
     }
     public function getIsAvaliable()
     {
       return $this->isAvaliable;
     }
     public function setIsAvaliable($isAvaliable)
     {
        $this->isAvaliable= $isAvaliable;
     }
     public function getCategory()
     {
       return $this->category;
     }
     public function setCategory($category)
     {
        $this->category = $category;
     }

}