<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ProjetDGI\GRHBundle\Entity\Etudiant;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\GroupeRepository")
 */
class Groupe
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
     * @var Classe $classe
     *
     * @ORM\ManyToOne(targetEntity="Classe", inversedBy="groupes", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     * })
     */
    private $classe;

    /**
     * @return Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param Classe $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    /**
     * @var ArrayCollection $etudiants
     *
     * @ORM\OneToMany(targetEntity="ProjetDGI\GRHBundle\Entity\Etudiant", mappedBy="groupe", cascade={"persist", "remove", "merge"})
     */
    private $etudiants;

    /**
     * @param Etudiant $etudiant
     */
    public function addEtudiant(Etudiant $etudiant) {
        $etudiant->setGroupe($this);

        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas

        if (!$this->etudiants->contains($etudiant)) {
            $this->etudiants->add($etudiant);
        }
    }

    /**
     * @return ArrayCollection $etudiants
     */
    public function getEtudiants() {
        return $this->etudiants;
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
}
