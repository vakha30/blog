<?php


namespace App\controllers;


use Delight\Auth\AttemptCancelledException;
use Delight\Auth\Auth;
use Delight\Auth\AuthError;
use League\Plates\Engine;

class LoginController
{
    private $view;
    private $auth;

    function __construct(Engine $view, Auth $auth)
    {
        $this->view = $view;
        $this->auth = $auth;
    }

    function showForm()
    {
       echo $this->view->render("auth/login");
    }

    function login()
    {
        try {
            $this->auth->login($_POST['email'], $_POST['password']);
            header("Location: /");
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            die('Email not verified');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        } catch (AttemptCancelledException $e) {
        } catch (AuthError $e) {
        }
    }

    function logout()
    {
        try {
            $this->auth->logOut();
            header("Location: /");
        }
        catch (AuthError $e) {
        }
    }
}