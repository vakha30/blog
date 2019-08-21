<?php $this->layout('layout') ?>

<main>
    <div class="container">
        <div class="register-form p-4">
            <h3 class="mb-4">Вход</h3>
            <form action="/login" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                           placeholder="Пароль">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>

    </div>
</main>