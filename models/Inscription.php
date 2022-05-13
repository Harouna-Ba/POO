<?php
namespace App\Models;
class Inscription{
    private \DateTime $dateInscription;
    private \DateTime $anneeInscription;


    // Un objet de type inscription est associe a un seul onjet de type classe
    public function classe(): Classe{
        return new Classe;

    }

    
    // un objet de type inscription est associe a un seul objet de type etudiant
    public function etudiant(): Etudiant{
        return new Etudiant;

    }


    /**
     * Get the value of dateInscription
     */ 
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */ 
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get the value of anneeInscription
     */ 
    public function getAnneeInscription()
    {
        return $this->anneeInscription;
    }

    /**
     * Set the value of anneeInscription
     *
     * @return  self
     */ 
    public function setAnneeInscription($anneeInscription)
    {
        $this->anneeInscription = $anneeInscription;

        return $this;
    }
}