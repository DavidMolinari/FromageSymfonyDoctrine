<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="AppBundle\Repository\RamassageRepository")
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
     * Set numBonRamassage
     *
     * @param integer $numBonRamassage
     *
     * @return Ramassage
     */
    public function setNumBonRamassage($numBonRamassage)
    {
        $this->numBonRamassage = $numBonRamassage;

        return $this;
    }

    /**
     * Get numBonRamassage
     *
     * @return integer
     */
    public function getNumBonRamassage()
    {
        return $this->numBonRamassage;
    }

    /**
     * Set dateRamassage
     *
     * @param \DateTime $dateRamassage
     *
     * @return Ramassage
     */
    public function setDateRamassage($dateRamassage)
    {
        $this->dateRamassage = $dateRamassage;

        return $this;
    }

    /**
     * Get dateRamassage
     *
     * @return \DateTime
     */
    public function getDateRamassage()
    {
        return $this->dateRamassage;
    }

    /**
     * Set nbBidons
     *
     * @param integer $nbBidons
     *
     * @return Ramassage
     */
    public function setNbBidons($nbBidons)
    {
        $this->nbBidons = $nbBidons;

        return $this;
    }

    /**
     * Get nbBidons
     *
     * @return integer
     */
    public function getNbBidons()
    {
        return $this->nbBidons;
    }

    /**
     * Set nbLitres
     *
     * @param integer $nbLitres
     *
     * @return Ramassage
     */
    public function setNbLitres($nbLitres)
    {
        $this->nbLitres = $nbLitres;

        return $this;
    }

    /**
     * Get nbLitres
     *
     * @return integer
     */
    public function getNbLitres()
    {
        return $this->nbLitres;
    }

    /**
     * Set txMatGrasses
     *
     * @param string $txMatGrasses
     *
     * @return Ramassage
     */
    public function setTxMatGrasses($txMatGrasses)
    {
        $this->txMatGrasses = $txMatGrasses;

        return $this;
    }

    /**
     * Get txMatGrasses
     *
     * @return string
     */
    public function getTxMatGrasses()
    {
        return $this->txMatGrasses;
    }

    /**
     * Set ramasseur
     *
     * @param \AppBundle\Entity\Ramasseur $ramasseur
     *
     * @return Ramassage
     */
    public function setRamasseur(\AppBundle\Entity\Ramasseur $ramasseur)
    {
        $this->ramasseur = $ramasseur;

        return $this;
    }

    /**
     * Get ramasseur
     *
     * @return \AppBundle\Entity\Ramasseur
     */
    public function getRamasseur()
    {
        return $this->ramasseur;
    }

    /**
     * Set producteur
     *
     * @param \AppBundle\Entity\Producteur $producteur
     *
     * @return Ramassage
     */
    public function setProducteur(\AppBundle\Entity\Producteur $producteur)
    {
        $this->producteur = $producteur;

        return $this;
    }

    /**
     * Get producteur
     *
     * @return \AppBundle\Entity\Producteur
     */
    public function getProducteur()
    {
        return $this->producteur;
    }
}
