<?php

namespace ProjetDGI\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersNonEnseignant
 *
 * @ORM\Table(name="pers_non_enseignant")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRHBundle\Repository\PersNonEnseignantRepository")
 */
class PersNonEnseignant extends Personne
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
