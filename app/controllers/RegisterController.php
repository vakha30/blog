<?php


namespace App\controllers;


use App\models\Database;
use Delight\Auth\Auth;
use Delight\Auth\AuthError;
use http\Header;
use League\Plates\Engine;

class RegisterController
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
        echo $this->view->render('auth/register');
    }

    function register()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login = $_POST['login'];

        try {
            $userId = $this->auth->register($email, $password, $login, function ($selector, $token) use($email) {
                $url = 'http://blog/verify_email?selector=' . \urlencode($selector) . '&token=' . \urlencode($token);
                mail($email, "Верификация", $url);
                header("Location: /");
            });
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        } catch (AuthError $e) {
        }
    }
}