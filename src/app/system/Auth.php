<?php

class Auth
{
    public static object $user;
    public static $tokenCookieName = 'auth_token';
    public static function generateToken(?string $tokenPart = null): string
    {
        $string = 'auth_' . time();
        if ($tokenPart) {
            $string .= $tokenPart;
        }
        return hash('sha256', $string);
    }

    public static function createUserSession(int $userId, string $token): bool
    {
        $user = UserFacade::getUserModel();
        return $user->createUserSession(['user_id' => $userId, 'token' => $token]);
    }

    public static function protect()
    {
        $token = Cookie::get(self::$tokenCookieName);
        if ($token === null) {
            Response::redirect('/login');
        }

        $user = UserFacade::getUserModel();
        $userSession = $user->getUserSession($token);
        if ($userSession === false) {
            Response::redirect('/login');
        }

        $userObject = $user->find($userSession->user_id);
        if ($userObject === false) {
            Response::redirect('/login');
        }

        Auth::setUser($userObject);
    }

    public static function setUser(object $user): void
    {
        self::$user = $user;
    }

    public static function getUser(): ?object
    {
        return self::$user ?? null;
    }

    public static function logout(): void
    {
        Cookie::set(self::$tokenCookieName, '', time() - 3600);
        session_destroy();

        $user = UserFacade::getUserModel();
        $user->deleteUserSession(Auth::getUser()->id);
    }
}