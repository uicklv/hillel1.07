<?php


class HomeController
{
    public function index()
    {
        try {
//           $name =  $_POST['name'];
//           $name =  Request::get('name');
//           $name = '<script>alert("test")</script>';
//            $connect = new PDO($dsn, $username, $password);
//            $connect1 = new PDO($dsn, $username, $password);
//            $connect2 = new PDO($dsn, $username, $password);
//            $connect = Connector::getInstance();
//
//            $test = htmlspecialchars('<h3><div>my content &;</div></h3>');
//            $connect->exec("INSERT INTO users (name, email, password) VALUES ('$test', 'test12322@test.com', 'testest') ");

//            $stmt =  $connect->query("SELECT * FROM users");
//            $users = $stmt->fetchAll();
//            foreach ($users as $user) {
//                echo $user["name"] . "<br>";
//            }
//            echo $connect->exec("INSERT INTO `companies` (`name`) VALUES ('New company 2')");
//            $stmt = $connect->query("SELECT * FROM companies");
//            $companies = $stmt->fetchAll();
//            echo "<pre>";
//            print_r($companies);
//            echo "<pre>";

//            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
//                echo "<pre>";
//                print_r($row);
//                echo "<pre>";
//            }

//            $id = 1;
//            $name = 'New Company';
//            $sql = "SELECT * FROM companies WHERE id > :id AND name = :company";
//            $sql = "SELECT * FROM companies WHERE id > ? AND name = ?";
//            $sql = "SELECT * FROM users WHERE email = ?";
//            $stmt = $connect->prepare($sql);
//            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
//            $stmt->bindValue(':company', $name);
//            $stmt->execute();
//            $stmt->execute([$id, $name]);
//            print_r($stmt->fetchAll());

        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}