<?php

namespace Ort\IotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IoT
 *
 * @ORM\Table(name="IoT")
 * @ORM\Entity(repositoryClass="Ort\IotBundle\Repository\IoTRepository")
 */
class IoT
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
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;
    /**
     * @var string
     *
     * @ORM\Column(name="ipLocale", type="string", length=15)
     */
    private $ipLocale;
    /**
     * @var bool
     *
     * @ORM\Column(name="actif",type="boolean")
     */
    private $actif;

    /**
     * IoT constructor.
     *
     */
    public function __construct($datas = NULL)
    {
        if (isset($datas['id'])) {
            $this->id = $datas['id'];
        } else {
            $this->id = NULL;
        }
        if (isset($datas['nom'])) {
            $this->setNom($datas['nom']);
        } else {
            $this->setNom('Undefined');
        }

        if (isset($datas['ipLocale'])) {
            $this->setIpLocale($datas['ipLocale']);
        } else {
            $this->setNom('0.0.0.0');
        }

        if (isset($datas['actif'])) {
            $this->setActif($datas['actif']);
        } else {
            $this->setActif(false);
        }
    }


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
     * @return IoT
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
     * Set ipLocale
     *
     * @param string $ipLocale
     *
     * @return IoT
     */
    public function setIpLocale($ipLocale)
    {
        $this->ipLocale = $ipLocale;

        return $this;
    }

    /**
     * Get ipLocale
     *
     * @return string
     */
    public function getIpLocale()
    {
        return $this->ipLocale;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return IoT
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }
}
