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
