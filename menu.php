<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KReDoom Community</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <img src="https://sun9-44.userapi.com/c858524/v858524560/196404/3dBnoTWVVP8.jpg" width="38" height="38"> <span>KReDoom Community</span>
    </div>
  <div id="about">
      <a href="index.html" href="#" title="Возможности" onclick="slowScroll('#main')">О нас</a>
      <a href="index.html" href="#" onclick="slowScroll('#overview')" title="Обучение">Наши Цели</a>
      <a href="index.html" href="#" onclick="slowScroll('#contacts')" title="Контакты">Контакты</a>
      <a href="index.html" href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">FAQ</a>
      <a href="apps.php">FAQ</a>
    </div>

  </header>

  <div id="top">
  </div>







	
  <footer><b>
  	
  		<hr>
  			<span class="title">2020//  Сайт создан <a href="https://vk.com/timur_tv"> Тимуром Набиуллином</a> по заказу Kreizy для комьюнити.  <a href="http://rombe.fun/privacy-policy/"> Политика</a><a href="admin-cp/admin.php">  </a></span>

  </b></footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>


</script>
