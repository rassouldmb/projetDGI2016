<?php

namespace ProjetDGI\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsabilite
 *
 * @ORM\Table(name="responsabilite")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRHBundle\Repository\ResponsabiliteRepository")
 */
class Responsabilite
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
     * @ORM\Column(name="libelleResponsabilite", type="string", length=255, unique=true)
     */
    private $libelleResponsabilite;


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
     * Set libelleResponsabilite
     *
     * @param string $libelleResponsabilite
     * @return Responsabilite
     */
    public function setLibelleResponsabilite($libelleResponsabilite)
    {
        $this->libelleResponsabilite = $libelleResponsabilite;

        return $this;
    }

    /**
     * Get libelleResponsabilite
     *
     * @return string 
     */
    public function getLibelleResponsabilite()
    {
        return $this->libelleResponsabilite;
    }
}
