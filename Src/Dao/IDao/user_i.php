<?php
namespace App\Dao\IDao;
use App\Model\User;
interface DAOUser
{
    public function getAll();
    public function getById($id);
    public function editById(User $user);
    public function deleteById($id);
    public function create(User $user);
}
