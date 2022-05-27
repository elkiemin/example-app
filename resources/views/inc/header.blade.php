<header class="container-fluid">
    <div class ="row">
        <div class ="col-3">
            <img id ="logo" src= "{{asset('img/logo.png')}}" alt="" width="" height="">
        </div>
        <?php
        if (empty($_SESSION['login']) or empty($_SESSION['id']))
        {
        ?>
        <div class="row">
            <div class="col">
                <div id="auth_block">
                    <div id="link_register">
                        <a href ="/registr">Регистрация</a>
                    </div>
                    <div id="link_auth">
                        <a href="avtor.php">Авторизация</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        else
        {
        ?>
        <div class="row">
            <div class="col">
                <div id="exit_block">
                    <div id="link_exit">
                        <a href="exit.php">Выход</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <nav class="nav">
            <a class="flex-sm-fill text-sm-center nav-link" href="#Описание">Основная информация</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#Таланты">Таланты</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#Созвездие">Созвездие</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#Оружие">Оружие</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#Артефакты">Артефакты</a>
        </nav>

    </div>
</header>
