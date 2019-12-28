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
<!--                 <?php 
                // Создаём ассоциативный массив/прогоним сайт в цикле
                $users = [  1=>'Денис', 
                            2=>'Игнат', 
                            3=>'Владимир', 
                            4=>'Сергей', 
                            5=>'Илья', 
                            6=>'Андрей', 
                            7=>'Степан'];
                foreach ($users as $id => $value) {
                    echo $users[$id].'<br>';
                }   
                 ?> -->  

<?php 
                // Реализация
                $users = [  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque aliquam ratione nisi reprehenderit sequi sit neque cum molestias.'=>'Денис', 
                            'Lorem ipsum dolor sit.'=>'Игнат', 
                            'Lorem ipsum.'=>'Владимир', 
                            'Lorem ipsum dolor sit.'=>'Сергей', 
                            'Lorem ipsum dolor sit amet, consectetur.'=>'Илья', 
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, nihil?'=>'Андрей', 
                            'Lorem ipsum dolor sit amet.'=>'Степан'];
?>                                          
<?php foreach ($users as $id => $value) {  ?>
                            <div class="media">
                                  <img src="img/no-user.jpg" class="mr-3" alt="..." width="64" height="64">
                                  <div class="media-body">

                                    <h5 class="mt-0">
                                    <?php echo $users[$id].'<br>'; ?>
                                    </h5> 
                                    <span><small>12/10/2025</small></span>
                                    <p>
                                        <?php echo $id; ?>
                                    </p>
                                  </div>
                                </div>
<!--  -->
<a onclick="return confirm('Уверены?');" href="edit.php?id=<?= $task['id'];?>" class="btn btn-secondary">Правка</a>
<a onclick="return confirm('Уверены?');" href="delete.php?id=<?= $task['id'];?>" class="btn btn-danger">Удалить</a>
<div><br></div> 

<!--  -->

<?php } ?>            

<!-- <button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button> -->

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
