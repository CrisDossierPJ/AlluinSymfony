<?php

namespace Ort\IotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IoT
 *
 * @ORM\Table(name="io_t")
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
}

