<?php

/* Template Name: 1.2 Home 
*   Template Post Type: page*/

get_header();
?>

<style>
	.entry-title{
		display: none;
	}
	</style>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="\testsite\wp-content\themes\twentynineteen-child\assets\styles\slick-1.8.1\slick\slick.min.js"></script>

	<br>
	<br>

  <div class="row align-center">

    <div id="homeContent" class="column large-8 align-center b">

        <div id="slideyboi" class="jojoSlider">
            <div><img src="/testsite/wp-content/uploads/2019/10/AllJojos-1.jpg" alt=""></div>
            <div><img src="/testsite/wp-content/uploads/2019/11/jojos1234.jpeg" alt=""></div>
            <div class="pa6"><img src="/testsite/wp-content/uploads/2019/11/joelene-kujo.jpg" alt=""></div>
            <div><img src="/testsite/wp-content/uploads/2019/11/giorno-giovanna.jpg" alt =""></div>
        </div>

        <div id="hometext">
            <p class="b"> This is the homepage for my Jojo’s Bizarre Adventure Practice Website.
        		All of the characters on this site are from Jojo’s 1-5. </p>
        </div>
    </div>

  </div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('.jojoSlider').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 2500,
			});
		});
	</script>

</body>



<?php get_footer(); ?>
