<?php get_header(); ?>
<main id="main-container">
<?php if (get_the_ID()=='2'): ?>
 <section>
  <?php echo do_shortcode("[R-slider id='1']"); ?>
 </section>	
 <div class="news-block">
  <h2 class="news-block__title">
   Новости
  </h2>
  <div class="news-block__run-string"><marquee><?php echo category_description(6);?></marquee></div>
  <div class="clr"></div>
  <div class="news-block__news-align">
    <div class="news-block__video-block">
     <div class="news-block__video"> 
      <iframe src="https://player.vimeo.com/video/220276850?color=ff9933&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
     </div>
    </div>
    <div class="news-block__video-txt">
      <img src="<?php bloginfo("template_directory");?>/design/icons/logotype-2.gif"><br>
      В данном разделе вы можете ознакомиться с информационными материалами, предоставляемыми Барановичским зональным центром гигиены и эпидемиологии.
    </div>
    <div class="clr"></div>
    <?php
     if ( have_posts() ) : query_posts('cat=2&showposts=6');   
     while (have_posts()) : the_post();?>
      <section class="news-block__article" onClick="window.location.href='<?php the_permalink();?>'" >
       <h3 class="news-block__article-title"><?php the_title();?></h3>
       <div class="news-block__article-description"><?php if(get_the_excerpt()!=null)the_excerpt();else echo 'Подробную информацию вы можете получить в данной статье.'; ?></div>
       <time class="news-block__article-date">Дата публикации новости: <?php echo get_the_date();?></time>
      </section>
    <?php  
     endwhile;
     endif;
     wp_reset_query();                
    ?><br>
   <div class="news-block__all-news-link">
    <a href="/vse-novosti" class="news-block__all-news-link">Перейти ко всем новостям</a>
   </div><br>
  </div>
 </div>
 <div id="admin_proc" class="administration-procedures">
  <h2 class="administration-procedures__title">Административные процедуры</h2>
   Всю информацию об административных процедурах вы можете получить одним фалом путем скачивание архива содержащего следующие сведения:
   <ul>
    <li>- Закон Республики Беларусь "О внесении дополнений и изменений в Закон Республики Беларусь "Об основах административных процедур" от 13.07.2012 №412-3;</li>
    <li>- Закон Республики Беларусь "Об основах административных процедур" от 28 октября 2008 г. N 433-З;</li>
    <li>- Регламент работы Барановичского зонального центра гигиены и эпидемиологии в соответствии с заявительным принципом «одно окно»;</li>
    <li>- Перечень административных процедур,совершаемых Барановичским ЗЦГиЭ, в отношении юридических лиц и индивидуальных предпринимателей, в соответствии с Постановлением Совета Министров Республики Беларусь от 17.02.2012 №156 (в редакции постановления от 11.07.2012 №635);</li>
    <li>- Перечень административных процедур, совершаемых Барановичским ЗЦГиЭ, в отношении граждан в соответствии с Указом Президента Республики Беларусь от 19 апреля 2012 г. №197 «О внесении дополнений и изменений в Указ Президента Республики Беларусь от 26 апреля 2010 г. №200»;</li>
    <li>- Образцы заявлений для юридических лиц и индивидуальных предпринимателей;</li>
    <li>- Образцы заявлений для частных лиц.</li>
   <div class="administration-procedures__link"><a href="<?php bloginfo("template_directory");?>/files/adm_proc.rar">Получить информацию</a></div><br>
 </div>
 <div id="our_center" class="our-center">
  <div class="our-center__align">
   <h2 class="our-center__title">О нашем центре</h2>
   <div class="clr"></div>
   <div class="our-center__item">
    <?php echo do_shortcode("[huge_it_maps id='1']"); ?>
   </div>
   <div class="our-center__item">
    Наш адресс: Республика Беларусь, Брестская область, г.Барановичи, ул.50-лет ВЛКСМ, 9.<br>
    Телефон: 8(0163) 41-04-16, 8(0163) 42-94-16.<br>
    Телефон горячей линии: (80163) 42-94-16<br>
    Факс: 8(0163) 42-17-44, 8(0163) 42-97-32, 8(0163) 42-90-82.<br>
    E-mail(приёмная): <b> <ins> viola@brest.by </ins></b><br>
    E-mail(отдел эпидемиологии):<b> <ins> epid@brest.by</ins></b><br>
    E-mail(приём граждан):<b><ins>  bar_zcg@tut.by</ins></b><br>
    Время работы - ежедневно с 8.00 до 18.00, кроме выходных дней<br>
    Банковские реквизиты:<br>
    Государственное учереждение "Барановичский ЗЦГиЭ"<br>
    225415, г. Барановичи, ул. 50 лет ВЛКСМ-9<br>
    р/с BY93AKBB36320012643521300000, ф-л 802, БИК AKBBBY21802 АСБ "Беларусбанк"<br>
    г. Барановичи, б-р Штоккерау, д.8-А<br>
    код 245, УНП 200149853, ОКПО 05562056.<br>
   </div>
  </div>
 </div>
<?php else: ?>
 <?php if (get_the_ID()!='341' && get_the_ID()!='704'  && get_the_ID()!='1228' ): ?>
  <script>
   $(document).ready(function(){
    $(".scroll").css("display","none");
   });
   $(window).resize(function(){
    $(".scroll").css("display","none");
   });
  </script>
  <script>
   $(".top-line__menu").on("click","> span", function (event){
    $(".scroll").css("display","none");
   });
  </script>
  <div class="content">
   <?php
    the_post();
    the_content();
   ?>
  </div>
 <?php endif?>
<?php endif?>
<?php if (get_the_ID()=='704'): ?>
 <script>
  $(document).ready(function(){
   $(".scroll").css("display","none");
  });
  $(window).resize(function() {
   $(".scroll").css("display","none");
  });
 </script>
 <script>
  $(".top-line__menu").on("click","> span", function (event) {
   $(".scroll").css("display","none");
  });
 </script>
 <script>
  function snipet(content){
   var finder;
   finder=document.getElementById('sections').getElementsByTagName('section');
   for (var i = 0; i < finder.length; i++){
     finder[i].style.display='none';
   }
   document.getElementById(content).style.display='block';
  }
 </script>
 <div class="content">
  <div class="lab-tab">
   <input id="vklad1" type="radio" name="lab-tab" onChange="snipet('cont1')" checked>
   <label for="vklad1" title="Вкладка 1">Лабораторный отдел</label>
   <input id="vklad3" type="radio" name="lab-tab" onChange="snipet('cont2')">
   <label for="vklad3" title="Вкладка 2">Противодействие коррупции</label>
   <input id="vklad4" type="radio" name="lab-tab" onChange="snipet('cont3')">
   <label for="vklad4" title="Вкладка 3">Семинары, обучение</label>
   <input id="vklad2" type="radio" name="lab-tab" onClick="window.location.href='<?php bloginfo("template_directory");?>/files/obl_akred.rar'">
   <label for="vklad2" title="Вкладка 4">Область аккредитации</label>
   <input id="vklad5" type="radio" name="lab-tab" onClick="window.location.href='<?php bloginfo("template_directory");?>/files/zak_work.rar'">
   <label for="vklad5" title="Вкладка 5">Работа с заказчиком</label>
   <input id="vklad7" type="radio" name="lab-tab" onClick="window.location.href='<?php bloginfo("template_directory");?>/files/isledovanie.docx'">
   <label for="vklad7" title="Вкладка 6">Исследования физических факторов</label>
   <input id="vklad9" type="radio" name="lab-tab" onClick="window.location.href='<?php bloginfo("template_directory");?>/files/sanit.docx'">
   <label for="vklad9" title="Вкладка 7">Санитарно гиг. и токс. исследования</label>
  </div>
  <div id="sections" class="lab-tab__information">
   <section id="cont1">
    <?php
     the_post();
     the_content();
    ?>
   </section>  
   <section id="cont2">
    <?php  
     $my_post_obj = get_post('722');
     $the_content_filtered = apply_filters( 'the_content', $my_post_obj->post_content );
     echo str_replace( ']]>', ']]&gt;', $the_content_filtered );
    ?>
   </section> 
   <section id="cont3">
    <?php  
     $my_post_obj = get_post('724');
     $the_content_filtered = apply_filters( 'the_content', $my_post_obj->post_content );
     echo str_replace( ']]>', ']]&gt;', $the_content_filtered );
    ?>
   </section>     
  </div>
 </div>
<?php endif?>
<?php if (get_the_ID()=='341'): ?>
<script>
 $(document).ready(function(){
  $(".scroll").css("display","none");
 });
 $(window).resize(function(){
  $(".scroll").css("display","none");
 });
</script>
<script>
 $(".top-line__menu").on("click","> span", function (event){
  $(".scroll").css("display","none");
 });
</script>
<div class="all-news-align">
 <?php
  if ( have_posts() ) : query_posts('cat=2&showposts=-1');   
   while (have_posts()) : the_post();?>
    <div class="news-block__article" onClick="window.location.href='<?php the_permalink();?>'" >
     <div class="news-block__article-title"><?php the_title();?></div>
     <div class="news-block__article-description"><?php if(get_the_excerpt()!=null)the_excerpt();else echo 'Подробную информацию вы можете получить в данной статье.'; ?></div>
     <div class="news-block__article-date">Дата публикации новости: <?php echo get_the_date();?></div>
    </div>
   <?php  
    endwhile;
    endif;
    wp_reset_query();                
   ?>
</div>
<?php endif ?>
<?php if (get_the_ID()=='1228'): ?>
<script>
 $(document).ready(function(){
  $(".scroll").css("display","none");
 });
 $(window).resize(function(){
  $(".scroll").css("display","none");
 });
</script>
<script>
 $(".top-line__menu").on("click","> span", function (event){
  $(".scroll").css("display","none");
 });
</script>
<div class="content">
 <h1 class="entry-title"><?php echo get_cat_name(7); ?></h1>
 <?php
  if ( have_posts() ) : query_posts('cat=7&showposts=-1');   
   while (have_posts()) : the_post();?>
    <div class="tnpa">
     <div class="tnpa__title"><?php the_title();?></div>
     <div class="tnpa__description"><i><?php if(get_the_content()!=null)the_content();else echo 'Подробную информацию о данном техническом правовом нормативном акте вы можете получить на оффициальном сайте.'; ?></i></div>
     <div class="tnpa__date">Дата размещения регламента технического правового нормативного акта на нашем сайте: <?php echo get_the_date();?></div>
    </div>
   <?php  
    endwhile;
    endif;
    wp_reset_query();                
   ?>
</div>
<?php endif ?>
</main>
<?php get_footer();?>