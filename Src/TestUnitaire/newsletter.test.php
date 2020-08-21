<?php
require_once '../../vendor/autoload.php';

use App\Dao\NewletterDao;
use App\Model\Newsletter;

$faker = Faker\Factory::create();
/**
 * Test creation newsletter
 */
/*
for($i=0;$i<5;$i++){
    $newsletter=new Newsletter(
        0,
        $faker->email
    );

    //$user->setNom($faker->name);
    //echo $user->getNom();
   //serialize($user);
   $newletterDao= new NewletterDao();
   $newletterDao->create($newsletter);
}*/

/**
 * Test afficher tout newsletter
 */
$newletterDao = new NewletterDao();
$data=$newletterDao->getAll();
print_r($data);
