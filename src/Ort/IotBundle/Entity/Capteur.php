<?php

namespace Ort\IotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Capteur
 *
 * @ORM\Table(name="capteur")
 * @ORM\Entity(repositoryClass="Ort\IotBundle\Repository\CapteurRepository")
 */
class Capteur
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20)
     */
    private $nom;

    /**
     * @ORM\OneToOne(targetEntity="Ort\IotBundle\Entity\Typecapteur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeCapteur;

    /**
     * @ORM\OneToOne(targetEntity="Ort\IotBundle\Entity\IoT")
     * @ORM\JoinColumn(nullable=false)
     */
    private $iot;


    /**
     * Get id
     *
     * @return int
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
     * @return Capteur
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
     * Set typeCapteur
     *
     * @param \Ort\IotBundle\Entity\Typecapteur $typeCapteur
     *
     * @return Capteur
     */
    public function setTypeCapteur(\Ort\IotBundle\Entity\Typecapteur $typeCapteur)
    {
        $this->typeCapteur = $typeCapteur;

        return $this;
    }

    /**
     * Get typeCapteur
     *
     * @return \Ort\IotBundle\Entity\Typecapteur
     */
    public function getTypeCapteur()
    {
        return $this->typeCapteur;
    }

    /**
     * Set iot
     *
     * @param \Ort\IotBundle\Entity\IoT $iot
     *
     * @return Capteur
     */
    public function setIot(\Ort\IotBundle\Entity\IoT $iot)
    {
        $this->iot = $iot;

        return $this;
    }

    /**
     * Get iot
     *
     * @return \Ort\IotBundle\Entity\IoT
     */
    public function getIot()
    {
        return $this->iot;
    }
}
