<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <div class="main-cont">
        <ul class="menu-main">
                <li><a href="index.php" >ГЛАВНАЯ</a></li>
                <li><a href="aboutus.php">КАК НАС НАЙТИ?</a></li>
                <li><a href="rooms-info.php">НОМЕРА</a></li>
              </ul>
        </div> 
        <section>
            <form action="post">
                <div class="data">
                     <label class="title_lbl" for="name_field">
                    Ваше ФИО:
                </label>
                <input type="text" id="name_field">

                <label class="title_lbl" for="client_number">
                    Ваш номер телефона:
                </label>
                <input type="text" id="client_number" placeholder="+380 ХХХ ХХХХ" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12">

                <label class="title_lbl" for="email">E-mail</label>
                <input type="email" name="" id="email" placeholder="aaa@mail.com">
                 
                <label class="title_lbl" for="persons">
                    Количество людей:
                </label>
                <input type="number" name="" id="persons" max="4"> 
                </div>
               
                <div class="arrive">
                    <input type="date" name="" id="">
                    <input type="date" name="" id="">
                </div>
                <input type="submit" value="ЗАБРОНИРОВАТЬ">
            </form>
        </section>
     </div>
</body>
</html>