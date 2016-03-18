<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EC
 *
 * @ORM\Table(name="ec")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\ECRepository")
 */
class EC extends Element
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
     * @var int
     *
     * @ORM\Column(name="coefEC", type="integer")
     */
    private $coefEC;


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
     * Set coefEC
     *
     * @param integer $coefEC
     * @return EC
     */
    public function setCoefEC($coefEC)
    {
        $this->coefEC = $coefEC;

        return $this;
    }

    /**
     * Get coefEC
     *
     * @return integer 
     */
    public function getCoefEC()
    {
        return $this->coefEC;
    }
}
