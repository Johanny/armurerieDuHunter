<?php

namespace Kafe\ArmureManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bras
 *
 * @ORM\Table(name="armure_bras")
 * @ORM\Entity(repositoryClass="Kafe\ArmureManagerBundle\Entity\BrasRepository")
 */
class Bras
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
     * @var string
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
     * @ORM\OneToOne(targetEntity="Kafe\ArmureManagerBundle\Entity\ResistancesElementaires", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $resistancesElementaires;

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
     * @return Bras
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
     * @return Bras
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
     * @return Bras
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
     * Set resistancesElementaires
     *
     * @param \Kafe\ArmureManagerBundle\Entity\ResistancesElementaires $resistancesElementaires
     * @return Bras
     */
    public function setResistancesElementaires(\Kafe\ArmureManagerBundle\Entity\ResistancesElementaires $resistancesElementaires)
    {
        $this->resistancesElementaires = $resistancesElementaires;
    
        return $this;
    }

    /**
     * Get resistancesElementaires
     *
     * @return \Kafe\ArmureManagerBundle\Entity\ResistancesElementaires 
     */
    public function getResistancesElementaires()
    {
        return $this->resistancesElementaires;
    }
}