<?php

namespace ProjetDGI\GRPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Semestre
 *
 * @ORM\Table(name="semestre")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRPBundle\Repository\SemestreRepository")
 */
class Semestre
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
     * @ORM\Column(name="codeSemestre", type="string", length=255, unique=true)
     */
    private $codeSemestre;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleSemestre", type="string", length=255)
     */
    private $libelleSemestre;


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
     * Set codeSemestre
     *
     * @param string $codeSemestre
     * @return Semestre
     */
    public function setCodeSemestre($codeSemestre)
    {
        $this->codeSemestre = $codeSemestre;

        return $this;
    }

    /**
     * Get codeSemestre
     *
     * @return string 
     */
    public function getCodeSemestre()
    {
        return $this->codeSemestre;
    }

    /**
     * Set libelleSemestre
     *
     * @param string $libelleSemestre
     * @return Semestre
     */
    public function setLibelleSemestre($libelleSemestre)
    {
        $this->libelleSemestre = $libelleSemestre;

        return $this;
    }

    /**
     * Get libelleSemestre
     *
     * @return string 
     */
    public function getLibelleSemestre()
    {
        return $this->libelleSemestre;
    }
}
