<?php
// CONFIG: Replace these
$site_url = 'https://yoursite.com/pagepath/';
$logo_url = 'https://picsum.photos/536/354';
$brand_url = 'https://yoursite.com';


//----do not edit below----
$person_name = isset($_GET['n']) ? ucwords($_GET['n']) : 'Alguém';
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex" />
  <meta name="google" content="notranslate" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
  <meta property="og:site_name" content="Create Wish" />
  <meta property="og:image" content="assets/img/ogmsg.jpg" />
  <title><?php echo $person_name ?> te enviou uma mensagem surpresa especial💌. Abra agora!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/js/slide.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $curtainopen = false;
      $(".rope").click(function() {
        $(this).blur();
        if ($curtainopen == false) {
          $(this).stop().animate({
            top: '-171%'
          }, {
            queue: false,
            duration: 350,
            easing: 'easeOutBounce'
          });
          $(".leftcurtain").stop().animate({
            width: '1px'
          }, 2000);
          $(".rightcurtain").stop().animate({
            width: '1px'
          }, 2000);
          $curtainopen = true;
        } else {
          $(this).stop().animate({
            top: '-40px'
          }, {
            queue: false,
            duration: 350,
            easing: 'easeOutBounce'
          });
          document.write('');
          $(".leftcurtain").stop().animate({
            width: '50%'
          }, 2000);
          $(".rightcurtain").stop().animate({
            width: '51%'
          }, 2000);
          $curtainopen = false;
        }
        return false;
      });
    });
  </script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="<?php if (isset($_GET['f'])) echo "height: auto; overflow: auto;"; ?>">
  <?php if (!isset($_GET['f'])): ?>
    <div class="leftcurtain"><img src="assets/img/left.jpg" /></div>
    <div class="rightcurtain"><img src="assets/img/right.jpg" /></div>
    <a class="rope" href="" onclick="PlaySound()">
      <div style="font-size: 25px;text-shadow: 1px 1px 3px yellow, 1px 1px 3px yellow, -1px -1px 3px yellow, -1px -1px 3px yellow;color:#ff0000; font-weight: bold;"><br><b>toque nisto<br></b></div>
      <img src="assets/img/arrow1.gif" height="auto" width="70px"><br>
      <img id="mascot" src="assets/img/JT1.png" width="80%" height="auto" style="animation: tada 4s infinite;" />
    </a>
  <?php endif ?>
  <marquee class="m1" behavior="scroll" direction="up" scrolldelay="0"> <br>
    <img src="assets/img/m1.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m2.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m3.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m4.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m5.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m6.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m7.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m8.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m1.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m2.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m3.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m4.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m5.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m6.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m7.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m8.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m1.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m2.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m3.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m4.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m5.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m6.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m7.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m8.png" height="25px" width="25px" /><br><br>
  </marquee>
  <marquee class="m2" behavior="scroll" direction="down" scrolldelay="0"> <br>
    <img src="assets/img/m1.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m2.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m3.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m4.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m5.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m6.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m7.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m8.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m1.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m2.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m3.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m4.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m5.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m6.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m7.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m8.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m1.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m2.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m3.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m4.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m5.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m6.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m7.png" height="25px" width="25px" /><br><br>
    <img src="assets/img/m8.png" height="25px" width="25px" /><br><br>
  </marquee>
  <div class="mainContainer" id="mainContainer">

    <br>
    <h1 id="username"><?php echo $person_name ?></h1>
    <h3 class="fromMessage" id="fromMessage"></h3><br>

    <span id="wish" width="60%" height="6%" style="animation: bounceIn 4s infinite">
      deseja a você
    </span>
    <br><br>
    <div style="font-size: 18px; font-weight: 800; color:red;">
      <p id="demo"></p>
    </div>
    <br>
    <img src="assets/img/brmain1.png" width="80%" height="30%" style="animation: pulse 1.4s infinite;" />
    <br><br>
    <img style="width:40%;height:30%;" src="assets/img/JTG1.gif" />
    <img style="width:40%;height:30%;" src="assets/img/under3.gif" />
    <br>

    <center>
      <div class="wishMessage" style="text-shadow: 1px 1px 3px white, 1px 1px 3px white, -1px -1px 3px white, -1px -1px 3px white;">
        <p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:red">
          🎄Conte suas bênçãos,
        </p>
        <span style="text-shadow: 1px 1px 3px silver, 1px 1px 3px silver, -1px -1px 3px silver, -1px -1px 3px silver;color:blue">
          cante suas canções de Natal,🎅
        </span>
        </p>
        <span style="text-shadow: 1px 1px 3px silver, 1px 1px 3px silver, -1px -1px 3px silver, -1px -1px 3px silver;color:#F80980">
          🔔abra seus presentes
        </span>
        </p>
        <span style="text-shadow: 1px 1px 3px silver, 1px 1px 3px silver, -1px -1px 3px silver, -1px -1px 3px silver;color:#096B12">
          e faça um pedido debaixo🔮
        </span>
        </p>
        <span style="text-shadow: 1px 1px 3px silver, 1px 1px 3px silver, -1px -1px 3px silver, -1px -1px 3px silver;color:red">
          🎁da árvore de Natal.
        </span>
        </p>
        <br>
        <span style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:#ffff00">
          🎅 Feliz Natal 🎅
        </span>
        <a id="brand-url" href="<?php echo $brand_url ?>">
          <img id="logo" src="<?php echo $logo_url ?>" alt="Logotipo do site">
        </a>
        </a>
        </p><br>
      </div>
    </center>
    <br><br>

    <br>
    <h1 id="usernameb"></h1>
    <?php if (!isset($_GET['f'])): ?>
      <form>
        <div class="enter-name">
          <input class="animated pulse infinite" type="name" required="" maxlength="50" name="n" placeholder="👉 insira seu nome aqui..">
          <input hidden name="f">
          <button class="btn animated shake infinite" type="submit"><span>👉</span> Ver </button>
        </div>
      </form>
    <?php else: ?>
      <a class="shareBtn" id="div1" href="#platforms">👉Compartilhe com os amigos👈</a>
      <a class="shareShow" id="div2" href="#close" style="display: none;">Fechar</a>

      <div class="platforms" id="platforms" style="display: none;">
        <center>
          <a href="https://api.whatsapp.com/send?text=🤗😇 Você já viu isto??? %0A *<?php echo $person_name ?>* te enviou uma mensagem surpresa especial 😍 %0A 💁 Abra aqui 👇👇 %0A <?php echo $site_url ?>?n=<?php echo $person_name ?>" target="_blank" data-os="Whatsapp"><img src="assets/img/wtsp.png" style="animation: tada 2s infinite;margin-top:5px;height: 50px;width:50px;"></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Findviral.com/bz/?n=<?php echo $person_name ?>" target="_blank" data-os="Facebook"><img src="assets/img/fb.png" style="animation: tada 2s infinite;margin-top:5px;height: 50px;width:50px;"></a>
        </center>
      </div>

      <script>
        // Click to show and hide share buttons
        $(document).ready(function() {
          $(".shareBtn").click(function() {
            $(".shareBtn").hide();
            $(".shareShow").show();
            $(".platforms").show();
          });
          $(".shareShow").click(function() {
            $(".shareShow").hide();
            $(".shareBtn").show();
          });
        });
      </script>
    <?php endif ?>

    <script>
      // Set the date we're counting down to
      var countDownDate = new Date("dec 25, 2024 00:00:00").getTime();

      // Update the count down every 02 second
      var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + "<font color='Amaranth'> dias,</font> " + hours + "<font color='Citrine'>  horas,</font> " +
          minutes + "<font color='Amaranth'> minutos,<br></font> " + seconds + "<font color='Citrine'> segundas, </font> Antes ";

        // If the count down is finished, write some text 
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "";
        }
      }, 1000);
    </script>
    <audio id="audiocracker" src="assets/Jingle-Bells.mp3" autostart="false"></audio>
    <script>
      function PlaySound() {
        var sound = document.getElementById("audiocracker");
        sound.play()
        unsetBodyHeight();
      }
      function unsetBodyHeight(){
        document.body.style.height = "auto";
        document.body.style.overflow = "auto";
      }
    </script>

</body>

</html>