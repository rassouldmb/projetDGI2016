<?php

namespace ProjetDGI\GRSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRSBundle\Repository\EvaluationRepository")
 */
class Evaluation
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
     * @ORM\Column(name="codeEvaluation", type="string", length=10, unique=true)
     */
    private $codeEvaluation;


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
     * Set codeEvaluation
     *
     * @param string $codeEvaluation
     * @return Evaluation
     */
    public function setCodeEvaluation($codeEvaluation)
    {
        $this->codeEvaluation = $codeEvaluation;

        return $this;
    }

    /**
     * Get codeEvaluation
     *
     * @return string 
     */
    public function getCodeEvaluation()
    {
        return $this->codeEvaluation;
    }
}
