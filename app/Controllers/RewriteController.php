<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller{
    public function index(){
        $usersModel = new UserModel();
        $datas['users'] = $usersModel->findAll();
        return view('user/index', $datas);
    }

    public function formAdd(){
        return view('user/userAdd');
    }
    
    public function store(){
        $usersModel = new UserModel();
        $usersModel->insert($_POST);
        return redirect()->to('user-list');
    }

    public function formUpdate($id){
        $usersModel = new UserModel();
        $datas['users'] = $usersModel->find($id);
        return view('user/editUser',$datas);
    }

    public function update(){
        $usersModel = new UserModel();
        $usersModel ->update($_POST['id'],$_POST);
        return redirect()->to('user-list');
    }

    public function delete($id){
        $usersModel = new UserModel();
        $usersModel->destroy($id);
        return redirect()->to('user-list');
    }

    public function login(){
        $session = session();
        $session ->set('email',$_POST['email']);
        $session ->set('password',$_POST['password']);
        return redirect()->to('user-list'); 	    	

    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}