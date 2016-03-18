<?php

namespace ProjetDGI\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grade
 *
 * @ORM\Table(name="grade")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRHBundle\Repository\GradeRepository")
 */
class Grade
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
     * @ORM\Column(name="libelleGrade", type="string", length=255, unique=true)
     */
    private $libelleGrade;

    /**
     * @var int
     *
     * @ORM\Column(name="quotaVH", type="integer")
     */
    private $quotaVH;


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
     * Set libelleGrade
     *
     * @param string $libelleGrade
     * @return Grade
     */
    public function setLibelleGrade($libelleGrade)
    {
        $this->libelleGrade = $libelleGrade;

        return $this;
    }

    /**
     * Get libelleGrade
     *
     * @return string 
     */
    public function getLibelleGrade()
    {
        return $this->libelleGrade;
    }

    /**
     * Set quotaVH
     *
     * @param integer $quotaVH
     * @return Grade
     */
    public function setQuotaVH($quotaVH)
    {
        $this->quotaVH = $quotaVH;

        return $this;
    }

    /**
     * Get quotaVH
     *
     * @return integer 
     */
    public function getQuotaVH()
    {
        return $this->quotaVH;
    }
}
