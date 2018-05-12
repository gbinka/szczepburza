<style type="text/css">

/* komputer */
@media all and (min-width:1240px) { 
   .item_img{height: 400px;}
}

/* tablet bokiem */
@media all and (min-width:960px) and (max-width:1239px) {
   .item_img{height: 300px;}
}

/* tablet pionowo */
@media all and (min-width:768px) and (max-width: 959px) {
   .item_img{height: 250px;}
}

/* telefon bokiem */
@media all and (min-width:640px) and (max-width:767px) {
	#carousel-example-generic2
	{display:none;}
}

/* telefon pionowo */
@media all and (max-width:639px) {

	#carousel-example-generic2
	{display:none;}
}
</style>

	
	
	
<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
  <!-- Wskaźniki w postaci kropek -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
  </ol>

  <!-- Slajdy -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="item_img" style="background: url('https://www.tapetus.pl/obrazki/n/210297_gory-lasy-jezioro-odbicie-krajobraz.jpg') 
	  center no-repeat; width: 100%; background-size:cover"></div>
      <!-- Opis slajdu -->
      <div class="carousel-caption">
        <h3>To jest opis</h3>
        <p>pierwszego slajdu</p>
      </div>
    </div>

    <div class="item">
      <div  class="item_img" style="background: url('http://www.zdjecia.biz.pl/zdjecia/duze/jezioro-lasy-gory-krajobraz.jpeg') 
	  center no-repeat; width: 100%; background-size:cover"></div>
      <!-- Opis slajdu -->
      <div class="carousel-caption">
        <h3>To jest opis</h3>
        <p>drugiego slajdu</p>
      </div>
    </div>

    <div class="item">
      <div class="item_img" style="background: url('http://deco-wall.pl/galerie/f/fototapeta-krajobraz-464_19380.jpg') 
	  center no-repeat; width: 100%; background-size:cover"></div>
      <!-- Opis slajdu -->
      <div class="carousel-caption">
        <h3>To jest opis</h3>
        <p>trzeciego slajdu</p>
      </div>
    </div>

  </div>

  <!-- Strzałki do przewijania -->
  <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>	
	