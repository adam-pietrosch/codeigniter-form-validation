<?php 
namespace App\Models;
use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'user_type_id'];
}