<?php

function view(string $path, array $variables = []): true
{
    $view = new View();
    return $view->render($path, $variables);
}

function url(string $path): string
{
    return APP_URL . $path;
}

function showValidationError(string $key): void
{
    $errors = Session::get('validation_errors');
    if (isset($errors[$key])) {
        $html = "<div style='color: red;'>" . implode(',<br>', $errors[$key]) . "</div>";
        Session::deleteValidationError($key);
        echo $html;
    }
}

function getSessionMessage($key): mixed
{
    $message = Session::get($key);
    Session::delete($key);

    return $message;
}