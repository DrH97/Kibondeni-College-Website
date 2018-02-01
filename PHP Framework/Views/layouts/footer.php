
	
		<div class="footer">
			<div class="footer-main">
				<img src="Assets/Imgs/Logo-Kibo.png" alt="Kibondeni logo" width="80px;"><br>
				<p>Kibondeni College of Catering and Hospitality
		Management is a project of Nurisha Trust (an
		offshoot of Kianda Foundation) committed
		to the education and welfare of women in Kenya.</p><a href="Kibondeni-aboutus.html">Read more...</a>

			</div>
			<div class="footer-center">
				<h3>CONTACT US</h3>
				<ul>
					<i class="fa fa-lg fa-map-marker"></i><li style="margin-left: 2em; margin-top: -1.2em">Kabarsiran Avenue, Off James Gichuru Muthangari,<br> Located Close to the Cyprian Embassy...</li><br>
					<li><i style="margin-right: .7em"  class="fa fa-fw fa-envelope-o"></i>P.O. Box 25555, 00603 Lavington Nairobi, Kenya</li><br>
					<li><i  style="margin-right: .7em" class="fa fa-fw fa-phone"></i>Cell: 0733 668510, 0721 201117</li><br>
					<li><i style="margin-right: .7em" class="fa fa-fw fa-folder-o"></i>E-mail: corporatetraining@kibondeni.ac.ke</li>
				</ul>
			</div>
			<div class="footer-right" style="text-align: center">
				<h3>SOCIAL MEDIA</h3>
				<ul>
					<a target="_blank" href="https://www.facebook.com/kibondenicollege"><li><i style="font-size: 2.5em; margin: 0 5px" class="fa fa-lg fa-facebook-square"></i></li></a>
					<a target="_blank" href="https://www.twitter.com/kibondenicollege"><li><i style="font-size: 2.5em; margin: 0 5px" class="fa fa-lg fa-twitter-square"></i></li></a>
					<a target="_blank" href="https://www.google.com/kibondenicollege"><li><i style="font-size: 2.5em ; margin: 0 5px" class="fa fa-lg fa-google-plus-square"></i></li></a>
				</ul>
			</div>
			<div class="footer-bottom">
				<p>Copyright @ 2018 - <a href="">Kibondeni College</a>. All Rights Reserved.</p>
			</div>
		</div>

		<script src="../Assets/jquery-3.2.1.min.js" ></script>


		<script>
$(document).ready(() => {
	$(document).on('scroll', function () {
        if ($(this).width() > 550 && $(this).scrollTop() > 50){
            $('.navbar').addClass('scroll');
//            $('.search').addClass('sticky');
        } else {
            $('.navbar').removeClass('scroll');
//            $('.search').removeClass('sticky');
//			$('.links').css('display', 'none');
        }
		
		 if ($(this).width() < 550 && $(this).scrollTop() > 100){
            $('.mini-nav').css('opacity', 1);
//            $('.search').addClass('sticky');
        } else {
            $('.mini-nav').css('opacity', 0);
//            $('.search').removeClass('sticky');
//			$('.links').css('display', 'none');
        }
    });
	
	$('#menu-toggle').on('click', () => {
//		$('.navbar').css('position', 'relative');
		if($('.link').css('display') == 'block'){
			$('.link').css('display', 'none');
			
			$('.links').removeClass('descend');
		}
		else {
			$('.link').css('display', 'block');
			$('.links').addClass('descend');
		}
	})
	
});
	
</script>

	</body>
</html>