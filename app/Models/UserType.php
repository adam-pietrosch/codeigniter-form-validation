<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserType extends Model
{
    protected $table = 'user_types';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];
}