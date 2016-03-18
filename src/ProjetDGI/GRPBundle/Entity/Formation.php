<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="codeFormation", type="string", length=255, unique=true)
     */
    private $codeFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleFormation", type="string", length=255, unique=true)
     */
    private $libelleFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="caractere", type="string", length=40, unique=true)
     */
    private $caractere;

    /**
     * @var Departement $departement
     *
     * @ORM\ManyToOne(targetEntity="Departement", inversedBy="formations", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="departement_id", referencedColumnName="id")
     * })
     */
    private $departement;

    /**
     * @return Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param Departement $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }


    /**
     * @var ArrayCollection $classes
     *
     * @ORM\OneToMany(targetEntity="Classe", mappedBy="formation", cascade={"persist", "remove", "merge"})
     */
    private $classes;

    /**
     * @param Classe $classe
     */
    public function addClasse(Classe $classe) {
        $classe->setFormation($this);

        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas

        if (!$this->classes->contains($classe)) {
            $this->classes->add($classe);
        }
    }

    /**
     * @return ArrayCollection $classes
     */
    public function getClasses() {
        return $this->classes;
    }

    /**
     * @var ArrayCollection $ues
     *
     * @ORM\OneToMany(targetEntity="UE", mappedBy="formation", cascade={"persist", "remove", "merge"})
     */
    private $ues;

    /**
     * @param UE $ue
     */
    public function addUE(UE $ue) {
        $ue->setFormation($this);

        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas

        if (!$this->ues->contains($ue)) {
            $this->ues->add($ue);
        }
    }

    /**
     * @return ArrayCollection $ues
     */
    public function getUes() {
        return $this->ues;
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
     * Set codeFormation
     *
     * @param string $codeFormation
     * @return Formation
     */
    public function setCodeFormation($codeFormation)
    {
        $this->codeFormation = $codeFormation;

        return $this;
    }

    /**
     * Get codeFormation
     *
     * @return string 
     */
    public function getCodeFormation()
    {
        return $this->codeFormation;
    }

    /**
     * Set libelleFormation
     *
     * @param string $libelleFormation
     * @return Formation
     */
    public function setLibelleFormation($libelleFormation)
    {
        $this->libelleFormation = $libelleFormation;

        return $this;
    }

    /**
     * Get libelleFormation
     *
     * @return string 
     */
    public function getLibelleFormation()
    {
        return $this->libelleFormation;
    }

    /**
     * Set caractere
     *
     * @param string $caractere
     * @return Formation
     */
    public function setCaractere($caractere)
    {
        $this->caractere = $caractere;

        return $this;
    }

    /**
     * Get caractere
     *
     * @return string 
     */
    public function getCaractere()
    {
        return $this->caractere;
    }
}
