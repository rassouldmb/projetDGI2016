<?php

namespace ProjetDGI\GRSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModaliteEvaluation
 *
 * @ORM\Table(name="modalite_evaluation")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRSBundle\Repository\ModaliteEvaluationRepository")
 */
class ModaliteEvaluation
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
     * @ORM\Column(name="pourcentage", type="integer")
     */
    private $pourcentage;


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
     * Set pourcentage
     *
     * @param integer $pourcentage
     * @return ModaliteEvaluation
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return integer 
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }
}
