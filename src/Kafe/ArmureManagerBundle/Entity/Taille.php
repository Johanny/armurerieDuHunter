<?php

namespace Kafe\ArmureManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taille
 *
 * @ORM\Table(name="armure_taille")
 * @ORM\Entity(repositoryClass="Kafe\ArmureManagerBundle\Entity\TailleRepository")
 */
class Taille
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
     * @ORM\OneToOne(targetEntity="Kafe\ArmureManagerBundle\Entity\StatistiquesArmure", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $statistiquesArmure;
    
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
     * Set statistiquesArmure
     *
     * @param \Kafe\ArmureManagerBundle\Entity\StatistiquesArmure $statistiquesArmure
     * @return Taille
     */
    public function setStatistiquesArmure(\Kafe\ArmureManagerBundle\Entity\StatistiquesArmure $statistiquesArmure)
    {
        $this->statistiquesArmure = $statistiquesArmure;
    
        return $this;
    }

    /**
     * Get statistiquesArmure
     *
     * @return \Kafe\ArmureManagerBundle\Entity\StatistiquesArmure 
     */
    public function getStatistiquesArmure()
    {
        return $this->statistiquesArmure;
    }
}