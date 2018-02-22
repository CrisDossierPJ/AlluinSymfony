<?php

namespace Ort\IotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typecapteur
 *
 * @ORM\Table(name="typecapteur")
 * @ORM\Entity(repositoryClass="Ort\IotBundle\Repository\TypecapteurRepository")
 */
class Typecapteur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=10, nullable=true)
     */
    private $unite;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Typecapteur
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
     * Set unite
     *
     *
     * @param string $unite
     *
     * @return Typecapteur
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.

        return "{unite:".$this->getUnite()."; nom:".$this->getNom()."; Id:".$this->getId()." }";
    }

}
