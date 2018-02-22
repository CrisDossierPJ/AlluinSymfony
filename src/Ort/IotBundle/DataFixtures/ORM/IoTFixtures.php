<?php
namespace Ort\IotBundle\DataFixtures;

use Ort\IotBundle\Entity\IoT;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadIoT
 *
 * @author phaln
 */
class IoTFixtures extends Fixture
{
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager) 
    {
	$IoTs = array(
	  array('nom' => 'Poq1_Pi','ipLocale' => '192.168.0.50','actif' => '1'),
	  array('nom' => 'Poq2_Pi','ipLocale' => '192.168.0.51','actif' => '1'),
	  array('nom' => 'Poq3_ESP','ipLocale' => '192.168.0.53','actif' => '0'),
	  array('nom' => 'Poq4_Edisson','ipLocale' => '192.168.0.54','actif' => '0'),
	  array('nom' => 'Bidon','ipLocale' => '192.168.0.55','actif' => '1'),
	  array('nom' => 'ESP_2C1977','ipLocale' => '192.168.0.17','actif' => '1'),
	  array('nom' => 'Radiateur Lyon','ipLocale' => '192.168.1.31','actif' => '1'),
	);
	
	foreach ($IoTs as $iotDatas) {
	  // On crée l'iot
	  $iot = new IoT($iotDatas);

	  // On le persiste
	  $manager->persist($iot);
	}

	// On déclenche l'enregistrement de tous les iots
	$manager->flush();
    }
}
