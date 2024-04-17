<?php
namespace App\Tests\Entity;

use App\Entity\Pdf;
use App\Entity\User;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class PdfTest extends TestCase
{
    public function testGetterAndSetter()
    {
        // Création d'une instance de l'entité User
        $pdf = new Pdf();

        // Définition de données de test
        $title = 'Lorem ipsum';
        $created_at = new DateTimeImmutable();
        $user = (new User())
          ->setEmail('john.doe@test.com')
          ->setRoles(['ROLE_USER'])
          ->setPassword('test123')
          ->setLastname('Doe')
          ->setFirstname('John')
          ->setSubscriptionEndAt(new DateTimeImmutable())
          ->setCreatedAt(new DateTimeImmutable())
          ->setUpdatedAt(new DateTimeImmutable());

        // Utilisation des setters
        $pdf->setTitle($title);
        $pdf->setCreatedAt($created_at);
        $pdf->setUser($user);

        // Vérification des getters
        $this->assertEquals($title, $pdf->getTitle());
        $this->assertEquals($created_at, $pdf->getCreatedAt());
        $this->assertEquals($user, $pdf->getUser());
    }
}