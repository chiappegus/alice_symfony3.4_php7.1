<?php
 
namespace App\DataFixtures\ORM;
 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
//use Nelmio\Alice\Loader\NativeLoader;
 
class LoadFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //$loader = new NativeLoader();
        $loader = new AppNativeLoader();
        $objectSet = $loader->loadFile(__DIR__ . '/fixtures.yml')->getObjects();
        foreach($objectSet as $object)
        {
            $manager->persist($object);
        }
 
        $manager->flush();
    }
}