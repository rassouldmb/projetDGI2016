<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="codeDepartement", type="string", length=10, unique=true)
     */
    private $codeDepartement;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleDepartement", type="string", length=255, unique=true)
     */
    private $libelleDepartement;

    /**
     * @var ArrayCollection $formations
     *
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="departement", cascade={"persist", "remove", "merge"})
     */
    private $formations;

    /**
     * @param Formation $formation
     */
    public function addFormation(Formation $formation) {
        $formation->setDepartement($this);

        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas

        if (!$this->formations->contains($formation)) {
            $this->formations->add($formation);
        }
    }

    /**
     * @return ArrayCollection $formations
     */
    public function getFormations() {
        return $this->formations;
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
     * Set codeDepartement
     *
     * @param string $codeDepartement
     * @return Departement
     */
    public function setCodeDepartement($codeDepartement)
    {
        $this->codeDepartement = $codeDepartement;

        return $this;
    }

    /**
     * Get codeDepartement
     *
     * @return string 
     */
    public function getCodeDepartement()
    {
        return $this->codeDepartement;
    }

    /**
     * Set libelleDepartement
     *
     * @param string $libelleDepartement
     * @return Departement
     */
    public function setLibelleDepartement($libelleDepartement)
    {
        $this->libelleDepartement = $libelleDepartement;

        return $this;
    }

    /**
     * Get libelleDepartement
     *
     * @return string 
     */
    public function getLibelleDepartement()
    {
        return $this->libelleDepartement;
    }
}
