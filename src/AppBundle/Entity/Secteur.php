<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Secteur
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    private $codeSecteur;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Ramasseur", mappedBy="secteur")
     */
    private $ramasseur;

    /**
     * @ORM\OneToMany(targetEntity="Producteur", mappedBy="secteur")
     *
     *
     */
    private $producteur;
}
