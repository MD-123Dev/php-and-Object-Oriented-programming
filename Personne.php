<?php

 require 'abstractclass.php';

  class Personne extends abstract_personne
  {

    private  $_id;
    private  $_nom ='';
    private  $_prenom = '';


    
    public function __construct(){}
    
   
   public function get_id()
    {
      return $this->_id ;
    }

   public function set_id($id)
    {  
      $this->_id = $id;
    }
  public function get_nom()
  {
    return $this->_nom;
  }

  public function set_nom($nom)
  {
    $this->_nom = $nom;
  }
  public function get__prenom()
  {
    return $this->_prenom;
  }

  public function set__prenom($prenom)
  {
    $this->_prenom = $prenom;
  }

  ///**methode from abstract class */
  public function getNomPrenom():string{
       
    return  "prenom :".$this->_prenom . "Nom : " . $this->_nom;
    
  }

  }



?>