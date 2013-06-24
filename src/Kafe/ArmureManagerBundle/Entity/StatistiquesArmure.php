<?php

namespace Kafe\ArmureManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResistancesElementaires
 *
 * @ORM\Table(name="statistiques_armure")
 * @ORM\Entity
 */
class StatistiquesArmure
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var String
     * 
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="defense_minimale", type="integer")
     */
    private $defenseMinimale;
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="defense_maximale", type="integer")
     */
    private $defenseMaximale;
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="rarete", type="integer")
     */
    private $rarete;

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance_feu", type="integer")
     */
    private $resistanceFeu;

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance_eau", type="integer")
     */
    private $resistanceEau;

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance_glace", type="integer")
     */
    private $resistanceGlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance_foudre", type="integer")
     */
    private $resistanceFoudre;

    /**
     * @var integer
     *
     * @ORM\Column(name="resistance_dragon", type="integer")
     */
    private $resistanceDragon;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set nom
     *
     * @param string $nom
     * @return StatistiquesArmure
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set defenseMinimale
     *
     * @param integer $defenseMinimale
     * @return StatistiquesArmure
     */
    public function setDefenseMinimale($defenseMinimale)
    {
        $this->defenseMinimale = $defenseMinimale;
    
        return $this;
    }

    /**
     * Get defenseMinimale
     *
     * @return integer 
     */
    public function getDefenseMinimale()
    {
        return $this->defenseMinimale;
    }

    /**
     * Set defenseMaximale
     *
     * @param integer $defenseMaximale
     * @return StatistiquesArmure
     */
    public function setDefenseMaximale($defenseMaximale)
    {
        $this->defenseMaximale = $defenseMaximale;
    
        return $this;
    }

    /**
     * Get defenseMaximale
     *
     * @return integer 
     */
    public function getDefenseMaximale()
    {
        return $this->defenseMaximale;
    }

    /**
     * Set resistanceFeu
     *
     * @param integer $resistanceFeu
     * @return ResistancesElementaires
     */
    public function setResistanceFeu($resistanceFeu)
    {
        $this->resistanceFeu = $resistanceFeu;
    
        return $this;
    }

    /**
     * Get resistanceFeu
     *
     * @return integer 
     */
    public function getResistanceFeu()
    {
        return $this->resistanceFeu;
    }

    /**
     * Set resistanceEau
     *
     * @param integer $resistanceEau
     * @return ResistancesElementaires
     */
    public function setResistanceEau($resistanceEau)
    {
        $this->resistanceEau = $resistanceEau;
    
        return $this;
    }

    /**
     * Get resistanceEau
     *
     * @return integer 
     */
    public function getResistanceEau()
    {
        return $this->resistanceEau;
    }

    /**
     * Set resistanceGlace
     *
     * @param integer $resistanceGlace
     * @return ResistancesElementaires
     */
    public function setResistanceGlace($resistanceGlace)
    {
        $this->resistanceGlace = $resistanceGlace;
    
        return $this;
    }

    /**
     * Get resistanceGlace
     *
     * @return integer 
     */
    public function getResistanceGlace()
    {
        return $this->resistanceGlace;
    }

    /**
     * Set resistanceFoudre
     *
     * @param integer $resistanceFoudre
     * @return ResistancesElementaires
     */
    public function setResistanceFoudre($resistanceFoudre)
    {
        $this->resistanceFoudre = $resistanceFoudre;
    
        return $this;
    }

    /**
     * Get resistanceFoudre
     *
     * @return integer 
     */
    public function getResistanceFoudre()
    {
        return $this->resistanceFoudre;
    }

    /**
     * Set resistanceDragon
     *
     * @param integer $resistanceDragon
     * @return ResistancesElementaires
     */
    public function setResistanceDragon($resistanceDragon)
    {
        $this->resistanceDragon = $resistanceDragon;
    
        return $this;
    }

    /**
     * Get resistanceDragon
     *
     * @return integer 
     */
    public function getResistanceDragon()
    {
        return $this->resistanceDragon;
    }

    /**
     * Set rarete
     *
     * @param integer $rarete
     * @return StatistiquesArmure
     */
    public function setRarete($rarete)
    {
        $this->rarete = $rarete;
    
        return $this;
    }

    /**
     * Get rarete
     *
     * @return integer 
     */
    public function getRarete()
    {
        return $this->rarete;
    }
}