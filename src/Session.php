<?php

namespace Hoben\Auth;

final class Session
{
    public static function start()
    {
        return \session_start();
    }
    public static function abort()
    {
        return \session_abort();
    }
    public static function deleteVars()
    {
        return \session_unset();
    }
    public static function destroy()
    {
        return \session_destroy();
    }
    public static function contains($key)
    {
        if (isset($_SESSION[$key])) {
            return true;
        } else {
            return false;
        }
    }
    public static function get($key)
    {
        if (self::contains($key)) {
            return $_SESSION[$key];
        } else {
            return null;
        }

    }
}
