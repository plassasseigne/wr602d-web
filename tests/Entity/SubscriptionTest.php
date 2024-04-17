<?php
namespace App\Tests\Entity;

use App\Entity\Subscription;
use PHPUnit\Framework\TestCase;

class SubscriptionTest extends TestCase
{
    public function testGetterAndSetter()
    {
        // Création d'une instance de l'entité User
        $subscription = new Subscription();

        // Définition de données de test
        $title = 'Lorem ipsum';
        $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit';
        $pdf_limit = 10;
        $price = 25;
        $media = 'chemin/vers/le/media';

        // Utilisation des setters
        $subscription->setTitle($title);
        $subscription->setDescription($description);
        $subscription->setPdfLimit($pdf_limit);
        $subscription->setPrice($price);
        $subscription->setMedia($media);

        // Vérification des getters
        $this->assertEquals($title, $subscription->getTitle());
        $this->assertEquals($description, $subscription->getDescription());
        $this->assertEquals($pdf_limit, $subscription->getPdfLimit());
        $this->assertEquals($price, $subscription->getPrice());
        $this->assertEquals($media, $subscription->getMedia());
    }
}