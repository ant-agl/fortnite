<?php
  $json = file_get_contents('coaches/data.json');
  $data = json_decode($json, true);

  if (empty($data)) {
    echo 'Ошибка в coaches/data.json';
    return;
  }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TBP Fortnite</title>

  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/slick.css"/>
  <link rel="stylesheet" href="css/slick-theme.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <header class="header" id="about-project">
    <div class="container-fluid">
      <div class="row align-items-md-center">
        <div class="nav d-flex align-items-md-center">
          <div class="col-md-1 col-3 offset-lg-1 offset-0"><img src="img/logo.png" alt="logo" class="logo"></div>
          <div class="col-lg-8 col-md-10 col-6 offset-0">
            <ul class="nav-list d-none d-md-flex" id="main-nav">
              <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#about-project">О проекте</a></li>
              <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#coach">Наши тренеры</a></li>
              <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#our-mission">Наша миссия</a></li>
              <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#reviews">Отзывы</a></li>
              <!-- <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#lesson">Видеоуроки</a></li> -->
            </ul>
            <div class="nav-button d-block d-md-none">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="col-md-1 col-3 offset-0">
            <div class="vk">
              <a href="#"><i class="icon-vkontakte"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 offset-lg-1 col-md-10 offset-md-1 col-12 offset-0">
          <div class="offer">
            <img src="img/bg_title.png" class="background">
            <h1 class="title">To Become<br>a Pro</h1>
            <button type="button" class="btn button">НАЧАТЬ</button>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 col-10 offset-1">
          <div class="about-project overflow-hidden">
            <div class="title-2">
              <h2 class="title">О проекте</h2>
              <img src="img/line.png" class="line">
            </div>
            <p class="subtitle mt-4">TBP Fortnite - To Become a Pro</p>
            <p>Готовим игроков на киберспортивную сцену и учим зарабатывать, просто играя в игры</p>
            <p>Обучили более 50 игркоов, 49-и из которых тренировка понравилась и они стали играть в несколько раз лучше</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="coach" id="coach">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col text-center overflow-hidden">
          <div class="title-2">
            <h2 class="title">Наши тренеры</h2>
            <img src="img/line.png" class="line">
          </div>
        </div>
      </div>

      <div class="content-block">
        <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
          
          <div class="slider-coach">
            <?php foreach($data as $k => $v) { ?>
              <div class="slider-item text-center">
                <div class="avatar">
                  <div class="box"></div>
                  <img src="img/coach/<?= $v['img'] ?>" class="<?= $v['img_position'] ?>">
                </div>
                <p class="name title text-uppercase"><?= $v['name'] ?></p>
                <a href="coaches/coach.php?id=<?= $k ?>" class="btn button mini">Подробнее</a>
              </div>
            <?php } ?>
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-mission" id="our-mission">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col text-center overflow-hidden">
          <div class="title-2">
            <h2 class="title">Наша миссия</h2>
            <img src="img/line.png" class="line">
          </div>
        </div>
      </div>

      <div class="content-block">
        <div class="row">
          <div class="col-lg-5 col-10 offset-1">
            <p class="subtitle w-75">TBP Fortnite - что это, для чего
              и каков наш истинный замысел?<br>Начнем по порядку.</p>
              
            <p class="mt-4"><span class="subtitle">To Become a Pro</span> - проект, название которого
              говорит само за себя. Именно здесь игроки
              любого уровня могут заказать тренировку у
              профессионалов за адекватную цену, получив
              массу опыта и приятно проведя время. Можно
              заказать и уроки в роликах и осваивать материал
              в удобное для себя время в комфортной обстановке.</p>

            <p class="mt-4">Основной нашей целью является обучение игроков,
              желающих попасть на киберспортивную сцену и
              зарабатывать, просто играя в игры. TBP сможет
              помочь этим людям проделать долгий и тернистый
              путь быстрее.</p>
          </div>
          <div class="col-lg-5 col-12">
            <img src="img/cur-mission.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews" id="reviews">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col text-center overflow-hidden">
          <div class="title-2">
            <h2 class="title">Отзывы</h2>
            <img src="img/line.png" class="line">
          </div>
        </div>
      </div>

      <div class="content-block">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12 mt-3">
            <div class="review-block">
              <p class="title">Александр Павленко</p>
              <p>Понравиолсь, указали на несколько ошибок после их исправления стало легче играть</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 mt-3">
            <div class="review-block">
              <p class="title">Александр Павленко</p>
              <p>Понравиолсь, указали на несколько ошибок после их исправления стало легче играть</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 mt-3">
            <div class="review-block">
              <p class="title">Александр Павленко</p>
              <p>Понравиолсь, указали на несколько ошибок после их исправления стало легче играть</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 mt-3">
            <div class="review-block">
              <p class="title">Александр Павленко</p>
              <p>Понравиолсь, указали на несколько ошибок после их исправления стало легче играть</p>
            </div>
          </div>
        </div>
        <button type="button" class="btn button mini reverse more-reviews mt-5">Больше отзывов</button>
      </div>
    </div>
  </section>

  <section class="coach-detail">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-4 col-10">
          <div class="content-block">
            <h3 class="title subtitle">At0m</h3>
            <p>Опытный тренер и стратег</p>
            <button type="button" class="btn button mt-5">Подробнее</button>
          </div>
        </div>
        <div class="col-lg-5 col-12">
          <img src="img/coach-detail/at0m.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <div class="nav-mini">
    <ul class="nav-mini-list" id="mini-nav">
      <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#about-project">О проекте</a></li>
      <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#coach">Наши тренеры</a></li>
      <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#our-mission">Наша миссия</a></li>
      <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#reviews">Отзывы</a></li>
      <!-- <li class="nav-list_item d-flex align-items-center"><a class="anchor" href="#lesson">Видеоуроки</a></li> -->
    </ul>
  </div>

  <a href="#about-project" class="btn-top anchor"><img src="img/top.png"></a>

  <section class="footer">
    <div class="container">
      <div class="row">
        <a href="lk/index.html" class="text-white">Личный кабинет</a>
      </div>
    </div>
  </section>
  
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>