<?php get_header(); ?>
<main id="main-container">
<script>
 $(document).ready(function()
 {
  $(".scroll").css("display","none");
 });
 $(window).resize(function() 
 {
  $(".scroll").css("display","none");
 });
</script>
<script>
 $(".top-line__menu").on("click","> span", function (event) 
 {
  $(".scroll").css("display","none");
 });
</script>
<div class="page-404">
 <span>Произошла ошибка 404</span><br>
 Добро пожаловать на сайт Барановичского Зонального Центра Гигиены и эпидемиологии.<br>
 Вы попали на страницу ошибки 404, возможной причиной данной ошибки может быть следующее:<br>
 Страница которую вы пытаетесь найти несуществует;<br>
 Страница которую вы пытаетесь найти была перенесена навсегда, а возможно временно;<br>
 Возможно адресс в браузерной строке который вы задали был введен некорректно,проверьте его правильность;<br>
 Некоторые браузеры чувствительны к вводимому регистру символов в браузерной строке, проверьте правильность регистров;<br>
 Попробуйте перейти по заданой адресной строке позднее.<br>
 Если данная проблема для вас является актуальной и постоянной, просьба связаться с нашим оператором для устранения её последующего возникновения, заранее благодарим Вас.<br>
 С уважением служба поддержки интернет-ресурса: gigienabar.by
</div>
</main>
<?php get_footer();