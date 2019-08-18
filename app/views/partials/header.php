<header class="header">
    <div class="container">
        <div class="row pl-2 pr-2 pt-3 pb-3">
            <div class="col-md-6">
                <a href="#" class="header__logo">Блог</a>
            </div>
            <div class="col-md-6">
                <div class="header__auth d-flex justify-content-end">
                    <a href="login.html" class="header__login btn btn-primary mr-2">Войти</a>
                    <a href="register.html" class="header__register btn btn-warning">Зарегистрироваться</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand navbar-dark bg-primary">

                    <div class="collapse navbar-collapse flex-wrap" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Категории
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php foreach(getAllCategorys() as $category): ?>
                                        <a class="dropdown-item" href="category.html"><?= $category['title'] ?></a>
                                    <?php endforeach; ?>

                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Поиск"
                                   aria-label="Search">
                            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Поиск</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
