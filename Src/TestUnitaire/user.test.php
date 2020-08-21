<?php
require_once '../../vendor/autoload.php';
use App\Dao\UserDao;
use App\Model\User;
$faker = Faker\Factory::create();
/**
 * test sur ajout utilisateur
 */
/*

for($i=1;$i==1;$i++){
    $user=new User(
        0,
        $faker->name,
        $faker->lastName,
        $faker->email,
        $faker->randomElement($array = array ('Administrateur','Redacteur')),
        $faker->password,
        ""
    );

    //$user->setNom($faker->name);
    //echo $user->getNom();
   //serialize($user);
   $daoUser= new UserDao();
   $daoUser->create($user);
}
*/
/**
 * Test sur lister User
 */
/*
$daoUser=new UserDao();
$data=$daoUser->getAll();
print_r($data);*/


/**
 * Test pour test getByID
 */
/*
$daoUser=new UserDao();
$data=$daoUser->getById(5);
print_r($data);*/

/**
 * editer utilisateur
 */
/*
$user=new User(
    5,
    $faker->name,
    $faker->lastName,
    $faker->email,
    $faker->randomElement($array = array ('Administrateur','Redacteur')),
    $faker->password,
    ""
);
$daoUser= new UserDao();
$daoUser->editById($user);*/

/**
 * supprimer user
 */
$daoUser=new UserDao();
$data=$daoUser->deleteById(5);

