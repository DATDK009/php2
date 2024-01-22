<?php

namespace Ngodat\Demo\controllers;
class StudentController
{
    function index()
    {
        echo 'Welcome index Student Controller' . '<br>';
    }

    function edit()
    {

    }

    function delete()
    {

    }

    function show()
    {

    }

    function showFormLogin()
    {
        echo 'Form Login';
    }

    function showFormRegister()
    {
        echo 'Form Register';
        include __DIR__ . '/../views/Register.php';
//        echo '<form action="/DemoRoute/index.php?register"
//method="post"
//      enctype="multipart/form-data">
//    <input name="username" placeholder="Nhap username">
//    <input name="password" placeholder="Nhap password">
//    <input type="file" name="avatar">
//    <button type="submit">Register</button>
//</form>';
    }

    function register() {
        if (isset($_POST['sub'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $student = \Ngodat\Demo\models\Student::class ;
            $ketqua = $student->register($username, $password);
            if (isset($ketqua)) {
                echo 'Thanh cong';
            } else {
                echo 'Dang ki that bai';
            }
        } else {
            echo "Vui long nhap day du username, password";
        }
    }

}