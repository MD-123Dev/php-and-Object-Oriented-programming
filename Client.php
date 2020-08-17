<?php

   
  require 'Personne.php';
   require 'interface_Client.php';

  class Client extends Personne implements Client_interface
  {

    private  $_idClient;
   

    
    public function __construct(){}
    
   
   public function get_idClient()
    {
      return $this->_idClient ;
    }

   public function set_id($idClient)
    {  
      $this->_idClient = $idClient;
    }

    //***methode implements  */
  public function getClient()
  {
    echo "Clients : " . $this->get__prenom() ." "; 
  }


  
  }
?>