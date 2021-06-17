<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class LoginModel extends Model{
    protected $table = 'login';
    protected $primarykey = 'User_id';
    protected $allowedFields = ['User_Name','User_Email','Pwd'];
}