<?php

function isLoggedIn()
{
    return isset($_SESSION['username']);

    // return isset($avatar);
}
function admin()
{
    return isset($_SESSION['admin']);
}
function superadmin()
{
    return isset($_SESSION['superadmin']);
}
