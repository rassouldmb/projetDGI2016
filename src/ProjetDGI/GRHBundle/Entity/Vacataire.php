<?php

namespace ProjetDGI\GRHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vacataire
 *
 * @ORM\Table(name="vacataire")
 * @ORM\Entity(repositoryClass="ProjetDGI\GRHBundle\Repository\VacataireRepository")
 */
class Vacataire extends Enseignant
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
