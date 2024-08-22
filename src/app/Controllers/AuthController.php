<?php

class AuthController
{
    use Validator;
    public function login()
    {
        require_once '';
    }

    public function register()
    {
        require_once APP_DIR . 'views/register.php';
    }

    public function registerProcess()
    {
       $this->validate($_POST, [
           'name' => ['required', 'min:2', 'max:255'],
           'email' => ['required', 'email', 'min:6', 'max:255'],
           'password' => ['required', 'min:6', 'max:255', 'confirmed']
       ]);

       if ($this->errors) {
           Session::set('validation_errors', $this->errors);
           Response::redirect(Request::referer());
       }

//       echo password_hash('password', PASSWORD_BCRYPT);
       $pdo = Connector::getInstance();
       $builder = new MySqlQueryBuilder();
       $user = new UserModel($pdo, $builder);

       $userObj = $user->find(18);
       echo "<pre>";
       print_r($userObj);
       echo "</pre>";

       $password = Request::get('password');
        echo $password;

        echo "<br>";
        var_dump(password_verify($password, $userObj->password));
//       $user->create([
//           'name' => Request::get('name'),
//           'email' => Request::get('email'),
//           'age' => Request::get('age', 'int'),
//           'password' => password_hash(Request::get('password'), PASSWORD_BCRYPT),
//       ]);
    }
}

