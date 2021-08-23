<?php 

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller{
    // Show users list
    public function index(){
        $usersModel = new UserModel();
        $datas['users'] = $usersModel->findAll();
        return view('user/index', $datas);
    }

    //Add User form
    public function create(){
        return view('user/addUser');
    }

    // Insert Data
    public function store(){
        
        $usersModel = new UserModel();
        $usersModel->insert($_POST);
        return redirect()->to('user-list');
    }

    // Show specific user
    public function fineUserById($id){
        $usersModel = new UserModel();
        $datas['users'] = $usersModel->find($id);
        return view('user/userDetail', $datas);
    }

    // Go to fome Edit
    public function formEdit($id){
        $usersModel = new UserModel();
        $datas['users'] = $usersModel->find($id);
        return view('user/editUser', $datas);
    }
    // update user
    public function update(){
        $usersModel = new UserModel();
        $usersModel ->update($_POST['id'],$_POST);
        return redirect()->to('user-list');
    }

    /// Delete user
    public function delete($id){
        $usersModel = new UserModel();
        $usersModel->delete($id);
        return redirect()->to('user-list');
    }

    /// To form login
    public function loginForm(){
        return view('auth/login');
    }

    /// login
    public function login(){
        $session = session();
        $session->set('email',$_POST['email']);
        $session->set('password',$_POST['password']);
        return redirect()->to('user-list');
    }
    
    // To form register
    public function registerForm(){
        return view('auth/register');
    }

    /// Register
    public function register(){
        $usersModel = new userModel();
        $usersModel->insert($_POST);
        return redirect()->to('/');
    }

    /// Signout 
    public function signOut(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
