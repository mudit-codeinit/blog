@extends('app')
@section('content')
<!-- START OF MAIN SLIDER -->
<!-- banner section start-->
<div class="slider-sctn">
    <div class="container">
	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
		    <div class="slider-txt">
				<h1>Request Your first Free Angel Reading</h1>
				<p>AND DISCOVER YOUR PROTECTIVE GUARDIAN ANGEL’S NAME</p>
				<a href="#" class="btn-cstm">I REQUEST MY FIRST FREE ANGEL READING</a>
			</div>
		</div>
	</div>
</div>
<!-- about section-->
<div class="container">
        <div class="abt-sctn">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<img src="{{URL::asset('site_assets/images/about-sctn.png')}}">

				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					 <div class="abt-txt">
						<h2>Hello! I’m Elissa</h2>
						<b>Medium</b>
						<p>Elissa is a psychic with more than 35 years of experience, and she is is gifted with accurate medium abilities. Thanks to her exceptional talent she was able to help thousands of people over the past years. Her ability to speak to Angels and translate their message into easy-to-understand reading made her one of the most popular mediums all over the world. Elisa shares the message she receives from the angels with the world and helps people to prosper and live happy lifes.</p>
						<a href="#" class="btn-cstm">My Story</a>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- reading section-->
<div class="bg-sctn">
	<div class="container">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding div-shadow">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">
			   <div class="redng-sctn">
			      <img src="{{URL::asset('site_assets/images/reading-sctn.jpg')}}">
                </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			    <div class="redng-sctn-txt">
				    <h2>What is Angel Reading?</h2>
					<p>Angel readings can give you insight into relationships, finances and career while giving the recipient peace of mind and confidence in their decisions. Angel reading is a positive way to connect with the guidance, love & support of angels.</p>
					<a href="#" class="btn-cstm">I REQUEST MY FIRST FREE ANGEL READING</a>
                </div>
			</div>
		</div>
	</div>
</div>
<!-- reading section-->


<!--testimonial section-->


<div class="container">
   <div class="testimonial_sctn">
	<h2 data-aos="zoom-in" data-aos-duration="1000">Testimonials</h2>
	<div id="myCarousel_testimonial" class="carousel slide" data-ride="carousel">
		<!-- Carousel indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel_testimonial" data-slide-to="0" class="active"><img class="img-responsive" src="{{URL::asset('site_assets/images/1.jpg')}}" alt=""></li>
			<li data-target="#myCarousel_testimonial" data-slide-to="1"><img class="img-responsive" src="{{URL::asset('site_assets/images/2.jpg')}}" alt=""></li>
			<li data-target="#myCarousel_testimonial" data-slide-to="2"><img class="img-responsive" src="{{URL::asset('site_assets/images/3.jpg')}}" alt=""></li>
		</ol>
		<!-- Wrapper for carousel items -->
		<div class="carousel-inner">
			<div class="item carousel-item active">
				<p class="testimonial">I emailed Elissa and within several hours she responded with a very helpful and personalized message answering the questions I asked her. Elissa was suggested to me by a very old friend of mine who contacted her previously and got his FREE ANGEL READING. After my experience with her I'd HIGHLY recommend her</p>
				<p class="overview"><b>Josh, Canada</b></p>
			</div>
			<div class="item carousel-item">
				<p class="testimonial">I emailed Elissa and within several hours she responded with a very helpful and personalized message answering the questions I asked her. Elissa was suggested to me by a very old friend of mine who contacted her previously and got his FREE ANGEL READING. After my experience with her I'd HIGHLY recommend her</p>
				<p class="overview"><b>Josh, Canada</b></p>
			</div>
			<div class="item carousel-item">
				<p class="testimonial">I emailed Elissa and within several hours she responded with a very helpful and personalized message answering the questions I asked her. Elissa was suggested to me by a very old friend of mine who contacted her previously and got his FREE ANGEL READING. After my experience with her I'd HIGHLY recommend her</p>
				<p class="overview"><b>Josh, Canada</b></p>

			</div>
		</div>
		<!-- Carousel controls -->
		<a class="carousel-control left carousel-control-prev" href="#myCarousel_testimonial" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="carousel-control right carousel-control-next" href="#myCarousel_testimonial" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>
	</div>
</div>
</div>
<!-- testimonial section-->


<!--contact us section starts-->
 <div class="cont-sctn">
		<div class="cont-form">
          <div class="cstm-bg">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <div class="cont-fm-info">
				<h2 data-aos="zoom-in" data-aos-duration="1000">Contact Elissa</h2>
				<p>Contact us if you have any questions or need assistance</p>
				<ul>
				<li class="text-indent"><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">SL Digital Ltd., 160 Kemp House, City Road, London, EC1V 2NX</a></li>
				<li><i class="fas fa-phone"></i><a href="tel:(234) 301-3513">(234) 301-3513</a></li>
				<li><i class="fas fa-envelope-open"></i><a href="mailto:support@elissa-psychic.com">support@elissa-psychic.com</a></li>
				</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-padding">
                <div class="cont-frm-sctn">
                    <h2>Hit Us Up</h2>
					 <form action="/action_page.php">
							<div class="form-group">
							   <label>Name</label>
							  <input type="text" class="form-control" id="usrname" name="name">
							</div>
							<div class="form-group">
							   <label>Email Address</label>
							  <input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
							 <label>Message</label>
							<textarea rows = "7" cols = "45" name = "description">
							</textarea>
							</div>
						<button type="submit" class="cstm-btn">Submit</button>
					 </form>
			    </div>
			</div>
          </div>
		</div>
 </div>



<!--contact us section ends-->
 <script>
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
        $(".hdr-main").addClass("darkHeader");
    }
	else {
        $(".hdr-main").removeClass("darkHeader");
    }

});
$(document).ready(function(){
 AOS.init();
});
</script>


@endsection
