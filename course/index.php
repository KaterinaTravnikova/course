<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>ГЛАВНАЯ</title>
</head>
<body>
    
<header>
    <div class="main-cont">
        <ul class="menu-main">
                <li><a href="index.php" class="current">ГЛАВНАЯ</a></li>
                <li><a href="aboutus.php">КАК НАС НАЙТИ?</a></li>
                <li><a href="rooms-info.php">НОМЕРА</a></li>
              </ul>
        </div>
        <div class="main-title">
        <h1>Отель "Название отеля"</h1>
        <p>Лучшее место для отдыха</p>
        <button class="vertical-center" onclick="window.location.href = 'rooms.php';">ЗАБРОНИРОВАТЬ</button>
        </div>
</header>
        <article>
            <h2>О НАС</h2>
            <div id="slider">
                <input type="radio" name="slider" id="slide1" checked>
                <input type="radio" name="slider" id="slide2">
                <input type="radio" name="slider" id="slide3">
                <input type="radio" name="slider" id="slide4">
                <div id="slides">
                   <div id="overflow">
                      <div class="inner">
                         <div class="slide slide_1">
                         </div>
                         <div class="slide slide_2">
                            
                         </div>
                         <div class="slide slide_3">
                         </div>
                         <div class="slide slide_4">
                            
                         </div>
                      </div>
                   </div>
                </div>
                <div id="controls">
                   <label for="slide1"></label>
                   <label for="slide2"></label>
                   <label for="slide3"></label>
                   <label for="slide4"></label>
                </div>
                <div id="bullets">
                   <label for="slide1"></label>
                   <label for="slide2"></label>
                   <label for="slide3"></label>
                   <label for="slide4"></label>
                </div>
             </div>
</div>
<div class="descrb">
    <p>
    Гостевой дом "Валентина" расположена в
    районе Центрального рынка, в тихом месте. 
    До оборудованного песчаного пляжа 10 минут ходьбы.
    Выход к пляжу Пионерского проспекта (самое начало),
    в районе реки Анапки. Пляж считается одним из лучших, 
    с широкой береговой полосой. Рядом с гостиницей городской парк,
    набережная, аквапарк "Золотой пляж", торговые центры, 
    летняя эстрада, кинотеатры, рестораны, бары, многочисленные кафе,
    дискотеки, остановка маршрутных такси, банкомат, 
    несколько столовых, прокаты пляжного инвентаря, аптека, супермаркет.
        </p>
</div>

        </article>
        <footer>
            <div class="contact">
                <p>Контакты: +380675258877</p>
                <p>Адрес: ул. Стрелковая 45Г</p>
                
            </div>
        </footer>
    
        
    
</body>
</html>