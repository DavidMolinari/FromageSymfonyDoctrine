<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Ramassage
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
    private $numBonRamassage;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateRamassage;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbBidons;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbLitres;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $txMatGrasses;

    /**
     * @ORM\ManyToOne(targetEntity="Ramasseur", inversedBy="ramassage")
     * @ORM\JoinColumn(name="ramasseur_id", referencedColumnName="id", nullable=false)
     */
    private $ramasseur;



    /**
     * @ORM\ManyToOne(targetEntity="Producteur", inversedBy="ramassage")
     * @ORM\JoinColumn(name="producteur_id", referencedColumnName="id", nullable=false)
     */
    private $producteur;
}
