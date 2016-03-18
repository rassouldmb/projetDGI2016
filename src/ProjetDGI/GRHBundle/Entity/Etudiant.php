<?php

namespace ProjetDGI\GRHBundle\Entity;

use ProjetDGI\GRPBundle\Entity\Groupe;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRHBundle\Repository\EtudiantRepository")
 */
class Etudiant extends Personne
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
     * @ORM\Column(name="numEtudiant", type="string", length=255, unique=true)
     */
    private $numEtudiant;


    /**
     * @var Groupe $groupe
     *
     * @ORM\ManyToOne(targetEntity="ProjetDGI\GRPBundle\Entity\Groupe", inversedBy="etudiants", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="groupe_id", referencedColumnName="id")
     * })
     */
    private $groupe;

    /**
     * @return Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * @param Groupe $groupe
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
    }

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
     * Set numEtudiant
     *
     * @param string $numEtudiant
     * @return Etudiant
     */
    public function setNumEtudiant($numEtudiant)
    {
        $this->numEtudiant = $numEtudiant;

        return $this;
    }

    /**
     * Get numEtudiant
     *
     * @return string 
     */
    public function getNumEtudiant()
    {
        return $this->numEtudiant;
    }
}
