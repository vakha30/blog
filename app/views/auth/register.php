<?php $this->layout('layout') ?>

<main>
    <div class="container">
        <div class="register-form p-4">
            <h3 class="mb-4">Регистрация</h3>
            <form action="/register" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                           placeholder="Пароль">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="login" id="exampleInputPassword1"
                           placeholder="Логин">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Согласен с условиями</label>
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>

    </div>
</main>