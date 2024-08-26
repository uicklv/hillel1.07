<?php

class AuthController
{
    use Validator;
    public function login()
    {
        return view('login');
    }

    public function auth()
    {
        $this->validate($_POST, [
            'email' => ['required', 'email', 'min:6', 'max:255'],
            'password' => ['required', 'min:6', 'max:255']
        ]);

        $user = UserFacade::getUserModel();

        $userData = $user->getByEmail(Request::get('email'));
        if ($userData !== null && password_verify(Request::get('password'), $userData->password)) {
            $token = Auth::generateToken($userData->email);
            $loginResult = Auth::createUserSession($userData->id, $token);

            if ($loginResult === false) {
                Session::set('login_error', 'Виникла помилка при аутентифікації');
                Response::redirect(Request::referer());
            }

            Cookie::set('auth_token', $token, time() + 3600 * 24);
            Response::redirect('closed');
        }

        Session::set('login_error', 'Невірний email або пароль');
        Response::redirect(Request::referer());
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
        $user = UserFacade::getUserModel();
//
//       $userObj = $user->find(18);
//       echo "<pre>";
//       print_r($userObj);
//       echo "</pre>";
//
//       $password = Request::get('password');
//        echo $password;
//
//        echo "<br>";
//        var_dump(password_verify($password, $userObj->password));
       $result = $user->create([
           'name' => Request::get('name'),
           'email' => Request::get('email'),
           'age' => Request::get('age', 'int'),
           'password' => password_hash(Request::get('password'), PASSWORD_BCRYPT),
       ]);

       if ($result === true) {
           Session::set('success_register', 'Реєстрація успішна. Можете війти в свій аккаунт');
           Response::redirect('login');
       }

       Session::set('error_register', 'Щось пішло не так');
       Response::redirect(Request::referer());
    }

    public function logout()
    {
        Auth::protect();

        Auth::logout();

        Response::redirect('/login');
    }
}

