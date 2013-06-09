<?php

namespace Kafe\ArmureManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResistancesElementaires
 *
 * @ORM\Table(name="resistances_elementaires")
 * @ORM\Entity
 */
class ResistancesElementaires
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
}
