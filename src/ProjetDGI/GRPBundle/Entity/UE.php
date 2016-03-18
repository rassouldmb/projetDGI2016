<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UE
 *
 * @ORM\Table(name="ue")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\UERepository")
 */
class UE
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
     * @ORM\Column(name="codeUE", type="string", length=255, unique=true)
     */
    private $codeUE;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleUE", type="string", length=255, unique=true)
     */
    private $libelleUE;

    /**
     * @var int
     *
     * @ORM\Column(name="coefUE", type="integer")
     */
    private $coefUE;

    /**
     * @var string
     *
     * @ORM\Column(name="typeUE", type="string", length=255)
     */
    private $typeUE;



    /**
     * @var Formation $formation
     *
     * @ORM\ManyToOne(targetEntity="Formation", inversedBy="ues", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     * })
     *
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
     * @var ArrayCollection $elements
     *
     * @ORM\OneToMany(targetEntity="Element", mappedBy="ue", cascade={"persist", "remove", "merge"})
     */
    private $elements;

    /**
     * @param Element $element
     */
    public function addElement(Element $element) {
        $element->setUE($this);

        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas

        if (!$this->elements->contains($element)) {
            $this->elements->add($element);
        }
    }

    /**
     * @return ArrayCollection $elements
     */
    public function getElements() {
        return $this->elements;
    }


    /**
     * Get id
     *
     * @return integer
     *
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codeUE
     *
     * @param string $codeUE
     * @return UE
     *
     */
    public function setCodeUE($codeUE)
    {
        $this->codeUE = $codeUE;

        return $this;
    }

    /**
     * Get codeUE
     *
     * @return string 
     */
    public function getCodeUE()
    {
        return $this->codeUE;
    }

    /**
     * Set libelleUE
     *
     * @param string $libelleUE
     * @return UE
     *
     */
    public function setLibelleUE($libelleUE)
    {
        $this->libelleUE = $libelleUE;

        return $this;
    }

    /**
     * Get libelleUE
     *
     * @return string
     *
     */
    public function getLibelleUE()
    {
        return $this->libelleUE;
    }

    /**
     * Set coefUE
     *
     * @param integer $coefUE
     * @return UE
     */
    public function setCoefUE($coefUE)
    {
        $this->coefUE = $coefUE;

        return $this;
    }

    /**
     * Get coefUE
     *
     * @return integer 
     */
    public function getCoefUE()
    {
        return $this->coefUE;
    }

    /**
     * Set typeUE
     *
     * @param string $typeUE
     * @return UE
     */
    public function setTypeUE($typeUE)
    {
        $this->typeUE = $typeUE;

        return $this;
    }

    /**
     * Get typeUE
     *
     * @return string 
     */
    public function getTypeUE()
    {
        return $this->typeUE;
    }
}