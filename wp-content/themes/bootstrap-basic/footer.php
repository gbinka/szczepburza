<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>


<style type="text/css">
#footer1
{
	background-color: #f0f0f0;
	text-align: center;
	padding: 15px;
	font-size: 14px;
	color: #5746AB !important;
}
#footer-logo a:hover
{text-decoration: none !important; color: #517EA2;}


#footer2
{
	background-color: #517EA2;
	text-align: center;
	padding: 18px;
	color: #f0f0f0;
	font-size: 15px;
}

.footer-img
{width: 130px; margin-left: 10px; margin-right: 10px;}






/* komputer */
@media all and (min-width:1240px) { 
   	#footer-logo{width: 1000px;}
	.footer-img{width: 190px; margin-left: 30px; margin-right: 30px;}
}

/* tablet bokiem */
@media all and (min-width:960px) and (max-width:1239.99px) {
   	#footer-logo{width:800px;}
	.footer-img{width: 160px; margin-left: 20px;margin-right: 20px;}
}

/* tablet pionowo */
@media all and (min-width:768px) and (max-width: 959.99px) {
   	#footer-logo{width:600px;}
	.footer-img{width: 130px; margin-left: 10px;margin-right: 10px;}   
}






/* tablet i wieksze */
@media all and (min-width:768px) 
{.footer-txt{display:none;}}

/* telefon i mniejsze */
@media all and (max-width:767.99px) 
{.footer-img{display: none;}}


</style>




			</div><!--.site-content-->
			
			
			<footer  role="contentinfo"> <!--id="site-footer"-->
				<div class="row site-footer" id="footer1">	
						<center>
						<div id="footer-logo">
							
							<div class="col-sm-3">
								<a href="https://zhp.pl/" target="_blank" class="logo"> 
									<img class="footer-img img-responsive" src="/wp-content/uploads/2018/04/logo-zhp.png">
								</a>
								<a href="https://zhp.pl/" target="_blank" class="footer-txt">
									Związek Harcerstwa Polskiego
								</a>
							</div>

							<div class="col-sm-3">
								<a href="http://stoleczna.zhp.pl/" target="_blank" class="logo"> 
									<img class="footer-img img-responsive" src="/wp-content/uploads/2018/04/logo-choragiew.png">
								</a>
								<a href="https://zhp.pl/" target="_blank" class="footer-txt">
									Chorągiew Stołeczna
								</a>
							</div>
							
							
							<div class="col-sm-3">
								<a href="http://warszawaochota.zhp.pl/" target="_blank" class="logo"> 
									<img class="footer-img img-responsive" src="/wp-content/uploads/2018/04/logo-hufiec.png">
								</a>
								<a href="https://zhp.pl/" target="_blank" class="footer-txt">
									Hufiec Warszawa-Ochota
								</a>
							</div>
							
							
							<div class="col-sm-3">
								<a href="https://zhp.pl/" target="_blank" class="logo"> 
									<img class="footer-img img-responsive" src="/wp-content/uploads/2018/04/logo-szczep.png">
								</a>
								<a href="http://burza.yum.pl/" target="_blank" class="footer-txt">
									Szczep Burza
								</a>
							</div>

							

								
						</div>
						</center>
					</div>
						
				<div  class="row site-footer" id="footer2">					
							<div class="col-sm-5 col-sm-offset-1 footer-info">
								© 2018 Szczep 151, 174, 178<br>
								Warszawskich Drużyn Harcerskich,<br>
								Starszoharcerskich i Wędrowniczych "Burza"
							</div>
							<div class="col-sm-5 footer-info">
								</br>Powered by Wordpress
							</div>						
				</div>
			</footer>
		</div><!--.container page-container-->

		<?php wp_footer(); ?> 
	</body>
</html>