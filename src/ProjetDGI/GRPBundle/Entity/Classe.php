<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\ClasseRepository")
 */
class Classe
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
     * @ORM\Column(name="codeClasse", type="string", length=255, unique=true)
     */
    private $codeClasse;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleClasse", type="string", length=255, unique=true)
     */
    private $libelleClasse;


    /**
     * @var Formation $formation
     *
     * @ORM\ManyToOne(targetEntity="Formation", inversedBy="classes", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     * })
     */
    private $formation;

    /**
     * @return Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param Formation $formation
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
    }

    /**
     * @var ArrayCollection $groupes
     *
     * @ORM\OneToMany(targetEntity="Groupe", mappedBy="classe", cascade={"persist", "remove", "merge"})
     */
    private $groupes;

    /**
     * @param Groupe $groupe
     */
    public function addGroupe(Groupe $groupe) {
        $groupe->setClasse($this);

        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas

        if (!$this->groupes->contains($groupe)) {
            $this->groupes->add($groupe);
        }
    }

    /**
     * @return ArrayCollection $groupes
     */
    public function getGroupes() {
        return $this->groupes;
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
     * Set codeClasse
     *
     * @param string $codeClasse
     * @return Classe
     */
    public function setCodeClasse($codeClasse)
    {
        $this->codeClasse = $codeClasse;

        return $this;
    }

    /**
     * Get codeClasse
     *
     * @return string 
     */
    public function getCodeClasse()
    {
        return $this->codeClasse;
    }

    /**
     * Set libelleClasse
     *
     * @param string $libelleClasse
     * @return Classe
     */
    public function setLibelleClasse($libelleClasse)
    {
        $this->libelleClasse = $libelleClasse;

        return $this;
    }

    /**
     * Get libelleClasse
     *
     * @return string 
     */
    public function getLibelleClasse()
    {
        return $this->libelleClasse;
    }
}
