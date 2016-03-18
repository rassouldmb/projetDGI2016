<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Element
 *
 * @ORM\Table(name="element")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\ElementRepository")
 */
class Element
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
     * @ORM\Column(name="codeElement", type="string", length=255, unique=true)
     */
    private $codeElement;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleElement", type="string", length=255, unique=true)
     */
    private $libelleElement;

    /**
     * @var UE $ue
     *
     * @ORM\ManyToOne(targetEntity="UE", inversedBy="elements", cascade={"persist", "merge"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="ue_id", referencedColumnName="id")
     * })
     */
    private $ue;

    /**
     * @return UE
     */
    public function getUE()
    {
        return $this->ue;
    }

    /**
     * @param UE $ue
     */
    public function setUE($ue)
    {
        $this->ue = $ue;
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
     * Set codeElement
     *
     * @param string $codeElement
     * @return Element
     */
    public function setCodeElement($codeElement)
    {
        $this->codeElement = $codeElement;

        return $this;
    }

    /**
     * Get codeElement
     *
     * @return string 
     */
    public function getCodeElement()
    {
        return $this->codeElement;
    }

    /**
     * Set libelleElement
     *
     * @param string $libelleElement
     * @return Element
     */
    public function setLibelleElement($libelleElement)
    {
        $this->libelleElement = $libelleElement;

        return $this;
    }

    /**
     * Get libelleElement
     *
     * @return string 
     */
    public function getLibelleElement()
    {
        return $this->libelleElement;
    }
}
