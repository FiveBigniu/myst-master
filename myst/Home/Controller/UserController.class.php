<?php
/**
 * Created by PhpStorm.
 * User: 40749
 * Date: 2018/3/4
 * Time: 23:44
 */
namespace Home\Controller;

use Home\Model\UserModel;
use Think\Controller;
use Think\Model;

class UserController extends Controller {
    public function index() {
        echo 'dddddd';
    }

    public function model () {
        //创建Model基类，传递User表，
        //$user = M('User');
//        $user = new Model('User','think_');
        $user = new UserModel();
        var_dump($user->select());
    }
}