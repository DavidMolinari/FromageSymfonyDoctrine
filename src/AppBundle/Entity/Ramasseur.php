<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Ramasseur
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
    private $codeRamasseur;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adr1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adr2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $ville;

    /**
     * @ORM\OneToMany(targetEntity="Producteur", mappedBy="ramasseur")
     */
    private $producteur;

    /**
     * @ORM\OneToMany(targetEntity="Ramassage", mappedBy="ramasseur")
     */
    private $ramassage;



    /**
     * @ORM\ManyToOne(targetEntity="Secteur", inversedBy="ramasseur")
     * @ORM\JoinColumn(name="secteur_id", referencedColumnName="id", nullable=false)
     */
    private $secteur;
}
