<?php

function userCreate(array $user, string $file = 'users.txt'): bool
{
    if ([] === $user) {
        return false;
    }

    if (!key_exists('id', $user)) {
        return false;
    }

    return write($file, json_encode($user) . PHP_EOL, true);
}

/**
 * @param $file
 * @return array|false
 */
function users($file = 'users.txt'): array|false
{
    if (file_exists('../' . $file)) {
        return false;
    }

    $users = file($file);
    array_walk($users, function (&$user) {
        $user = json_decode($user, true);
    });

    return $users;
}


/**
 * @param int $id
 * @param array $values
 * @param string $file
 * @return bool
 */
function update(int $id, array $values, string $file = 'users.txt'): bool
{
    $users = users($file);
    if (!$users) {
        return false;
    }

    foreach ($users as $keyUser => $user) {
        if ($user['id'] === $id) {
            foreach ($values as $key => $value) {
                $users[$keyUser][$key] = $value;
            }
        }
    }

    return usersRewrite($users, $file);
}


function delete(int $id, string $file = 'users.txt'): bool
{
    $users = users($file);
    if (!$users) {
        return false;
    }

    foreach ($users as $keyUser => $user) {
        if ($user['id'] === $id) {
            unset($users[$keyUser]);
        }
    }

    return usersRewrite($users, $file);
}

function usersRewrite(array $users, string $file = 'users.txt'): bool
{
    array_walk($users, function (&$user) {
        $user = json_encode($user);
    });

    return write($file, implode(PHP_EOL, $users));
}