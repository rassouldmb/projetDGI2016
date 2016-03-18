<?php

namespace ProjetDGI\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PER
 *
 * @ORM\Table(name="per")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRHBundle\Repository\PERRepository")
 */
class PER extends Enseignant
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
     * @ORM\Column(name="typePER", type="string", length=255)
     */
    private $typePER;


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
     * Set typePER
     *
     * @param string $typePER
     * @return PER
     */
    public function setTypePER($typePER)
    {
        $this->typePER = $typePER;

        return $this;
    }

    /**
     * Get typePER
     *
     * @return string 
     */
    public function getTypePER()
    {
        return $this->typePER;
    }
}
