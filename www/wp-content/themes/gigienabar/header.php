<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
  <link href="<?php bloginfo("template_directory");?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="<?php bloginfo("template_directory");?>/design/icons/laptop.png" type="image/png">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?php bloginfo("template_directory");?>/js/jquery.min.js"></script>
  <?php wp_head(); ?>
  <style>
   @font-face {
    font-family:Open Sans;
     src: url("<?php bloginfo("template_directory");?>/fonts/font_1.eot");
     src: url("<?php bloginfo("template_directory");?>/fonts/font_1.eot?#iefix")format("embedded-opentype"),
     url("<?php bloginfo("template_directory");?>/fonts/font_1.woff") format("woff"),
     url("<?php bloginfo("template_directory");?>/fonts/font_1.ttf") format("truetype");
     font-style: normal;
     font-weight: normal;
   }
   @font-face {
    font-family:Scada;
     src: url("<?php bloginfo("template_directory");?>/fonts/font_2.eot");
     src: url("<?php bloginfo("template_directory");?>/fonts/font_2.eot?#iefix")format("embedded-opentype"),
     url("<?php bloginfo("template_directory");?>/fonts/font_2.woff") format("woff"),
     url("<?php bloginfo("template_directory");?>/fonts/font_2.ttf") format("truetype");
     font-style: normal;
     font-weight: normal;
   }
  </style>
 </head>
 <body>
  <div id="wptime-plugin-preloader"></div>
  <script>
   function hide_show(){
    var finder = document.getElementById("top-menu").getElementsByTagName('li');
    if ($(window).width()<="768") 
     if (finder[0].style.display=="none")
      for (var i = 0; i < finder.length; i++) 
       finder[i].style.display="block";
     else
      for (var i = 0; i < finder.length; i++) 
       finder[i].style.display="none";
   }
   $(document).ready(function(){
    if ($(window).width()<="768"){
     var finder = document.getElementById("top-menu").getElementsByTagName('li');
     for (var i = 0; i < finder.length; i++) 
      finder[i].style.display="none";
    } 
   });
   $(window).resize(function(){
    if(document.body.clientWidth>'768'){
     var finder = document.getElementById("top-menu").getElementsByTagName('li');
     for (var i = 0; i < finder.length; i++) 
      finder[i].style.display="inline";
    } 
    if(document.body.clientWidth<='768'){
     var finder = document.getElementById("top-menu").getElementsByTagName('li');
     for (var i = 0; i < finder.length; i++) 
      finder[i].style.display="none";
    } 
   });
  </script>
  <script>
   $(document).ready(function(){
    $(".scroll").on("click","> a", function (event){
     event.preventDefault();
     var id  = $(this).attr('href'),
     top = $(id).offset().top;
     $('body,html').animate({scrollTop: top}, 1000);
    });
   });
  </script>
  <script> 
   var $buoop = {vs:{i:10,f:-4,o:-4,s:8,c:-4},api:4}; 
   function $buo_f(){ 
    var e = document.createElement("script"); 
    e.src = "//browser-update.org/update.min.js"; 
    document.body.appendChild(e);
   };
   try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
   catch(e){window.attachEvent("onload", $buo_f)}
  </script>
  <div class="page-container">
   <div class="page-align">
    <header id="head-line" class="top-line">
     <div class="top-line__logotype"><img src="<?php bloginfo("template_directory");?>/design/icons/logotype.png"></div>
     <menu class="top-line__menu">
      <span onClick="hide_show()">≡</span>
      <ul id="top-menu" class="hover-effect-1">
       <li><a href="/index.php">ГЛАВНАЯ</a></li>
       <li class="scroll"><a href="#admin_proc" onClick="hide_show()">АДМИНИСТРАТИВНЫЕ ПРОЦЕДУРЫ</a></li>
       <li class="sub">
        <a>НАШ ЦЕНТР ▼</a>
        <ul>
         <li><a href="/struktura-i-kadry">Структура и кадры</a></li>
         <li><a href="/odno-okno">Одно окно</a></li>
         <li><a href="/otdel-gigieny">Отдел гигиены</a></li>
         <li><a href="/otdel-epidemiologii">Отдел эпидемиологии</a></li>
         <li><a href="/otdel-obshhestvennogo-zdorovya">Отдел общественного здоровья</a></li>
         <li><a href="/laboratornyj-otdel">Лабораторный отдел</a></li>
         <li><a href="/vidy-deyatelnosti">Виды деятельности</a></li>
         <li><a href="/vakansii">Вакансии</a></li>
         <li><a href="/ideologiya">Идеология</a></li>
         <li><a href="/istoriya">История центра</a></li>
         <li><a href="/obrashheniya">Обращения граждан и юридических лиц</a></li>
        </ul>
       </li>
       <li><a href="/telefonnyj-spravochnik-tsentra">КОНТАКТЫ</a></li>
       <li><a href="/platnye-uslugi">ПЛАТНЫЕ УСЛУГИ</a></li>
       <li><a href="/gosudarstvennaya-registratsiya">ГОСУДАРСТВЕННАЯ РЕГИСТРАЦИЯ</a></li>
       <li><a href="/tnpa">ТНПА</a></li>
       <li><a href="/karta-zdorovia-baranovichi">КАРТА ЗДОРОВЬЯ БАРАНОВИЧИ</a></li>
       <li><a href="/karta-privivochnyh-punktov">КАРТА ПРИВИВОЧНЫХ ПУНКТОВ</a></li>
       <li class="scroll"><a href="#our_center" onClick="hide_show()">УЗНАТЬ ЭЛЕКТРОННУЮ ПОЧТУ,РЕКВИЗИТЫ?</a></li>
       <li class="sub">
      </ul>
     </menu>
    </header>
    <div class="clr"></div>