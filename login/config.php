<?php
session_start();
define('USERS_FILE', 'users.txt');
function initUsersFile()
{
    if (!file_exists(USERS_FILE)) {
        file_put_contents(USERS_FILE, serialize([]));
    }
}
function getUsers()
{
    initUsersFile();
    $data = file_get_contents(USERS_FILE);
    return unserialize($data);
}
function saveUsers($users)
{
    file_put_contents(USERS_FILE, serialize($users));
}
function addUser($username, $password)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return false;
        }
    }
    $users[] = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'created_at' => date('Y-m-d H:i:s')
    ];

    saveUsers($users);
    return true;
}
function verifyUser($username, $password)
{
    $users = getUsers();

    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return password_verify($password, $user['password']);
        }
    }

    return false;
}
function getUserData($username)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return $user;
        }
    }
    return null;
}
function saveUserColor($username, $color) {
    $users = getUsers();
    foreach ($users as &$user) {
        if ($user['username'] === $username) {
            $user['bg_color'] = $color;
            saveUsers($users);
            return true;
        }
    }
    return false;
}

function getUserColor($username) {
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return $user['bg_color'] ?? '#000000'; // По умолчанию черный
        }
    }
    return '#000000';
}
function getUserTheme($username) {
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            return ($user['bg_color'] ?? '#000000') === '#ffffff' ? 'day' : 'night';
        }
    }
    return 'night';
}
function saveUserTheme($username, $theme) {
    $users = getUsers();
    foreach ($users as &$user) {
        if ($user['username'] === $username) {
            $user['theme'] = $theme;
            saveUsers($users);
            return true;
        }
    }
    return false;
}