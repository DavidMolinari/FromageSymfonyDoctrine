<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="AppBundle\Repository\RamasseurRepository")
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->producteur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ramassage = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set codeRamasseur
     *
     * @param integer $codeRamasseur
     *
     * @return Ramasseur
     */
    public function setCodeRamasseur($codeRamasseur)
    {
        $this->codeRamasseur = $codeRamasseur;

        return $this;
    }

    /**
     * Get codeRamasseur
     *
     * @return integer
     */
    public function getCodeRamasseur()
    {
        return $this->codeRamasseur;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Ramasseur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Ramasseur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adr1
     *
     * @param string $adr1
     *
     * @return Ramasseur
     */
    public function setAdr1($adr1)
    {
        $this->adr1 = $adr1;

        return $this;
    }

    /**
     * Get adr1
     *
     * @return string
     */
    public function getAdr1()
    {
        return $this->adr1;
    }

    /**
     * Set adr2
     *
     * @param string $adr2
     *
     * @return Ramasseur
     */
    public function setAdr2($adr2)
    {
        $this->adr2 = $adr2;

        return $this;
    }

    /**
     * Get adr2
     *
     * @return string
     */
    public function getAdr2()
    {
        return $this->adr2;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Ramasseur
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Ramasseur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Add producteur
     *
     * @param \AppBundle\Entity\Producteur $producteur
     *
     * @return Ramasseur
     */
    public function addProducteur(\AppBundle\Entity\Producteur $producteur)
    {
        $this->producteur[] = $producteur;

        return $this;
    }

    /**
     * Remove producteur
     *
     * @param \AppBundle\Entity\Producteur $producteur
     */
    public function removeProducteur(\AppBundle\Entity\Producteur $producteur)
    {
        $this->producteur->removeElement($producteur);
    }

    /**
     * Get producteur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducteur()
    {
        return $this->producteur;
    }

    /**
     * Add ramassage
     *
     * @param \AppBundle\Entity\Ramassage $ramassage
     *
     * @return Ramasseur
     */
    public function addRamassage(\AppBundle\Entity\Ramassage $ramassage)
    {
        $this->ramassage[] = $ramassage;

        return $this;
    }

    /**
     * Remove ramassage
     *
     * @param \AppBundle\Entity\Ramassage $ramassage
     */
    public function removeRamassage(\AppBundle\Entity\Ramassage $ramassage)
    {
        $this->ramassage->removeElement($ramassage);
    }

    /**
     * Get ramassage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRamassage()
    {
        return $this->ramassage;
    }

    /**
     * Set secteur
     *
     * @param \AppBundle\Entity\Secteur $secteur
     *
     * @return Ramasseur
     */
    public function setSecteur(\AppBundle\Entity\Secteur $secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return \AppBundle\Entity\Secteur
     */
    public function getSecteur()
    {
        return $this->secteur;
    }
}
