<?php
namespace App\Tests\Entity;

use App\Entity\User;
use App\Entity\Subscription;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
  public function testGetterAndSetter()
  {
    // Création d'une instance de l'entité User
    $user = new User();

    // Définition de données de test
    $subscription = (new Subscription())
      ->setTitle('Subscription 1')
      ->setDescription('Lorem ipsum dolor sit amet consectetur adipisicing elit')
      ->setPdfLimit(10)
      ->setPrice(25)
      ->setMedia('chemin/vers/le/media');
    $email = 'john.doe@test.com';
    $roles = ['ROLE_USER'];
    $password = 'test123';
    $lastname = 'Doe';
    $firstname = 'John';
    $subscription_end_at = new DateTimeImmutable();
    $created_at = new DateTimeImmutable();
    $updated_at = new DateTimeImmutable();

    // Utilisation des setters
    $user->setSubscription($subscription);
    $user->setEmail($email);
    $user->setRoles($roles);
    $user->setPassword($password);
    $user->setLastname($lastname);
    $user->setFirstname($firstname);
    $user->setSubscriptionEndAt($subscription_end_at);
    $user->setCreatedAt($created_at);
    $user->setUpdatedAt($updated_at);

    // Vérification des getters
    $this->assertEquals($email, $user->getEmail());
    $this->assertEquals($roles, $user->getRoles());
    $this->assertEquals($password, $user->getPassword());
    $this->assertEquals($lastname, $user->getLastname());
    $this->assertEquals($firstname, $user->getFirstname());
    $this->assertEquals($subscription_end_at, $user->getSubscriptionEndAt());
    $this->assertEquals($created_at, $user->getCreatedAt());
    $this->assertEquals($updated_at, $user->getUpdatedAt());
  }
}
