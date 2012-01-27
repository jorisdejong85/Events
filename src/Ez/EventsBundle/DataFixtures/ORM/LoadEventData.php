<?php
namespace Ez\EventsBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Ez\EventsBundle\Entity\Event;

class LoadEventData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $event = new Event();
        $event->setTitle('Event bla');
        $event->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
        $event->setEventDate(new \DateTime('12-02-2012 14:00:00'));
        $manager->persist($event);
        
        $event2 = new Event();
        $event2->setTitle('Event blabla');
        $event2->setDescription('Lorizzle ipsum i\'m in the shizzle boofron amizzle, mammasay mammasa mamma oo sa adipiscing elit. Nullizzle sapizzle velizzle, for sure volutpizzle, yo quizzle, pot vizzle, rizzle. Pellentesque away tortizzle. Sizzle erizzle. Break yo neck, yall izzle dolor daahng dawg gangster tempizzle tellivizzle. Maurizzle dizzle cool et turpizzle. Vestibulum check it out we gonna chung. Pellentesque rizzle rhoncizzle nisi. In fo shizzle habitasse platea dictumst. Gizzle dapibizzle. Fo shizzle tellus urna, pretizzle shizzle my nizzle crocodizzle, brizzle uhuh ... yih!, eleifend vitae, nunc. Gangster suscipizzle. Integer own yo\' velizzle for sure fo shizzle mah nizzle fo rizzle, mah home g-dizzle.');
        $event2->setEventDate(new \DateTime('18-03-2012 11:30:00'));
        $manager->persist($event2);
        
        $manager->flush();
    }
}