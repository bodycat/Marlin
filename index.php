<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comments</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    Project Marlin
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.html">Register</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h3>Комментарии</h3></div>

                            <div class="card-body">
                              <div class="alert alert-success" role="alert">
                                Комментарий успешно добавлен
                              </div>
<!-- Реализация -->
<?php $users = [
    ['user_image' => 'https://im0-tub-ru.yandex.net/i?id=f288a4c01a2af5b5f520642dc3047aeb&n=13&exp=1',
     'user_id' => '1',
     'user_name' => 'Денис',
     'date_comment' => '2019-12-28',
     'user_comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatibus vel facere cumque consectetur, quibusdam.'],
    ['user_image' => 'https://pickaface.net/gallery/avatar/NexusQuote51dc0a7c1f639.png',
     'user_id' => '2',
     'user_name' => 'Игнат',
     'date_comment' => '2019-12-28',
     'user_comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatibus vel facere cumque consectetur, quibusdam.'],
    ['user_image' => 'https://im0-tub-ru.yandex.net/i?id=19127c363dc4359f7a3dedeed901c7e1&n=13&exp=1',
     'user_id' => '3',
     'user_name' => 'Владимир',
     'date_comment' => '2019-12-28',
     'user_comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatibus vel facere cumque consectetur, quibusdam.'],
    ['user_image' => 'https://im0-tub-ru.yandex.net/i?id=c82e6984d4035095dc6de3d2200900a4&n=13&exp=1',
     'user_id' => '4',
     'user_name' => 'Сергей',
     'date_comment' => '2019-12-28',
     'user_comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatibus vel facere cumque consectetur, quibusdam.'],
    ['user_image' => 'https://im0-tub-ru.yandex.net/i?id=144b39b7309a1b78b6ff216db65fea89&n=13&exp=1',
     'user_id' => '5',
     'user_name' => 'Илья',
     'date_comment' => '2019-12-28',
     'user_comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatibus vel facere cumque consectetur, quibusdam.'],
     ['user_image' => 'https://im0-tub-ru.yandex.net/i?id=297fb3d0d24bd96c311f6627dac0714f&n=13&exp=1',
     'user_id' => '6',
     'user_name' => 'Андрей',
     'date_comment' => '2019-12-28',
     'user_comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatibus vel facere cumque consectetur, quibusdam.'],
     ['user_image' => 'img/no-user.jpg',
     'user_id' => '7',
     'user_name' => 'Anonymous',
     'date_comment' => '2019-12-28',
     'user_comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure voluptatibus vel facere cumque consectetur, quibusdam.'],     
];
?>
                <?php foreach ($users as $user) {?>
                                <div class="media"><img src="<?php echo $user['user_image']; ?>
" class="mr-3" alt="..." width="64" height="64" title=" 
                                                        <?php echo 'ID пользователя: '.$user['user_id']; ?>
                                                    ">
                                <div class="media-body">
                                    <h5 class="mt-0">
                                    <?php echo $user['user_name'].'<br>';?>
                                    </h5> 
                                    <span><small><?php echo $user['date_comment'].'<br>';?>
                                    </small></span>
                                    <p>
                                        <?php echo $user['user_comment']; ?>
                                    </p>
                                  </div>

                                </div>
                                <a onclick="return confirm('Уверены?');" href="edit.php?id=<?= $task['id'];?>" class="btn btn-warning">Edit</a>
                                <a onclick="return confirm('Уверены?');" href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Delete</a>
                                <div><br></div>
                <?php } ?>

                            </div>
                        </div>
                    </div>    

                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-header"><h3>Оставить комментарий</h3></div>

                            <div class="card-body">
                                <form action="/store" method="post">
                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Имя</label>
                                    <input name="name" class="form-control" id="exampleFormControlTextarea1" />
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Сообщение</label>
                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-success">Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>


<!-- <button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button> -->