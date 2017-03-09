<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Producteur
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $codeProducteurffffff;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nom;

    /**
     *
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
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $distanceFromagerie;

    /**
     * @ORM\ManyToOne(targetEntity="Secteur", inversedBy="producteur")
     * @ORM\JoinColumn(name="secteur_id", referencedColumnName="id", nullable=false)
     *
     */
    private $secteur;

    /**
     * @ORM\OneToMany(targetEntity="Ramassage", mappedBy="producteur")
     */
    private $ramassage;

    /**
     * @ORM\ManyToOne(targetEntity="Ramasseur", inversedBy="producteur")
     * @ORM\JoinColumn(name="ramasseur_id", referencedColumnName="id", nullable=false)
     */
    private $ramasseur;
}
