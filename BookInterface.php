<?php 
namespace Reflection;

interface BookInterface {


    public function getTitle();
    

    public function setTitle($tittle);
    

    public function getAuthor();
    

    public function setAuthor($author);
    
    public function getDescription();
    
    public function setDescription($description);
    
    public function getCreatedAt();
    
    public function setCreatedAt($createdAt);
    
    public function getIsAvaliable();
    
    public function setIsAvaliable($isAvaliable);
    
    public function getCategory();
    
    public function setCategory($category);
    
}