<?php

namespace Ngodat\Demo\models;

use Ngodat\Demo\base\Person;
use Ngodat\Demo\config\Database;

class Student extends Person
{
    private $idPhuHuynh;
    private $idBangDiem;
    private $khoa;

    public function register($username,$password)
    {
        $db = Database::getDB();
        try {
            // Chuẩn bị truy vấn SQL
            $query = "INSERT INTO students (username, password) VALUES (:username,
                                                  :password)";
            // Sử dụng PDOStatement để thực hiện truy vấn
            $stmt = $db->prepare($query);
            // Gán giá trị cho các tham số
            $stmt->bindParam(':username', $username, \PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, \PDO::PARAM_STR);
            // Thực hiện truy vấn
            $stmt->execute();
            return 1;
        }catch (\PDOException $error){
            echo $error->getMessage();
            return null;
        }

    }


    function profile()
    {
        // TODO: Implement profile() method.
    }

    function login()
    {
        // TODO: Implement login() method.
    }

    function logout()
    {
        // TODO: Implement logout() method.
    }
}