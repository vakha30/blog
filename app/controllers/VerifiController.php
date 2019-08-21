<?php


namespace App\controllers;


use Delight\Auth\Auth;
use Delight\Auth\AuthError;

class VerifiController
{
    private $auth;

    function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    function verifi()
    {
        try {
            $this->auth->confirmEmail($_GET['selector'], $_GET['token']);
            header("Location: /");
        }
        catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
            die('Invalid token');
        }
        catch (\Delight\Auth\TokenExpiredException $e) {
            die('Token expired');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('Email address already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        } catch (AuthError $e) {
        }
    }
}