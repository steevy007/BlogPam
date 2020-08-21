<?php
namespace App\Dao\IDao;
use App\Model\Newsletter;
interface NEWSLETTERDao
{
    public function getAll();
    public function create(Newsletter $user);
}