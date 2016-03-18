<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Batiment
 *
 * @ORM\Table(name="batiment")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\BatimentRepository")
 */
class Batiment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBatiment", type="string", length=255, unique=true)
     */
    private $nomBatiment;


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
     * Set nomBatiment
     *
     * @param string $nomBatiment
     * @return Batiment
     */
    public function setNomBatiment($nomBatiment)
    {
        $this->nomBatiment = $nomBatiment;

        return $this;
    }

    /**
     * Get nomBatiment
     *
     * @return string 
     */
    public function getNomBatiment()
    {
        return $this->nomBatiment;
    }
}
