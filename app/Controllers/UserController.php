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

    public function loginForm(){
        return view('auth/login');
    }
    public function login(){
        if($this->exists($_POST['email'],$_POST['password']) != NULL){
            // $session = session();
            // $session->set('username',$_POST['username']);
            return redirect()->to('user-list');
        }else{
            $data['message'] = "Invalid";
            return view('login',$data);
        }
    }
    private function exists($email,$password){
        $usersModel = new UserModel();
        $users = $usersModel->where('email',$email)->first();
        if($users != NULL){
            if(password_verify($password,$users['password'])){
                return $users;
            }
        }
        return NULL;
    }    
    
    public function registerForm(){
        return view('auth/register');
    }
}
?>