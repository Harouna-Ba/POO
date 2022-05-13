<?php

namespace App\Models;
class Etudiant extends User{
    protected string $maticule;
    private \DateTime $dateNaiss;

    public function __construct(){
    parent::$role="ROLE_ETUDIANT";
        
    }

    
    //un etudiant peut s'inscrire plusieurs fois
    public function Inscriptions():array
    {
        return[];
    }
    public static  function selectAll(){
        $sql="select *  from ? where role like ? ";
        return parent::database()->executeSelect($sql,[parent::$table, parent::$role]);
    }

    public function insert(){
       $sql="INSERT INTO ? (`matricule`,`dateNaiss`)
            VALUES (?,?);";
       return parent::database()->executeUpdate($sql,[
                       parent::$table,
                       $this->matricule,$this->dateNais,
                       parent::$role]);
  }


    /**
     * Get the value of dateNaiss
     */ 
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set the value of dateNaiss
     *
     * @return  self
     */ 
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get the value of maticule
     */ 
    public function getMaticule()
    {
        return $this->maticule;
    }

    /**
     * Set the value of maticule
     *
     * @return  self
     */ 
    public function setMaticule($maticule)
    {
        $this->maticule = $maticule;

        return $this;
    }
}