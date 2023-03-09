<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
      //  $payload['Modeluser'] = user::all();
      
      class User extends CI_Controller 
      {
          public function add()
          {
              $this->load->view('user_add');
          }
      }
        
    }
}
?>