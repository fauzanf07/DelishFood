<?php 
echo '';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DelishFood</title>
	<link href="style/style.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
	<div id="wrapper">				
		<div id="black-wrapper">
			
		</div>
		<div id="car">
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <h1>Food Articles</h1><br/>
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sapien mauris, faucibus a aliquet ornare, pretium ac urna. Phasellus facilisis, nisl et pharetra tincidunt, ex dolor vulputate elit, nec facilisis ex libero quis purus.</p>
				    </div>
				    <div class="carousel-item">
				      <h1>Food Recipes</h1><br/>
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sapien mauris, faucibus a aliquet ornare, pretium ac urna. Phasellus facilisis, nisl et pharetra tincidunt, ex dolor vulputate elit, nec facilisis ex libero quis purus.</p>
				    </div>
				    <div class="carousel-item">
				      <h1>Find Foods Around You</h1><br/>
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sapien mauris, faucibus a aliquet ornare, pretium ac urna. Phasellus facilisis, nisl et pharetra tincidunt, ex dolor vulputate elit, nec facilisis ex libero quis purus.</p>
				    </div>
				  </div>
				</div>
		</div>
		<div id="search">
			<div class="container" style="height: 100%; padding: 0; margin: 0;">
				<div class="row" style="height: 100%;">
					<div class="col-lg-10 col-md-9" style="height: 100%;">
						<input type="text" placeholder="Keyword : Food's Name, City, Restaurant, Article, Recipe, etc"></input>
					</div>
					<div class="col-lg-2 col-md-3">
						<div class="btn" id="btn-search">
							<i class="fas fa-search"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg fixed-top">
	  <div class="container">
	  	<img src="img/icon.png" alt="" width="36" height="36" class="d-inline-block align-text-top">
	    <a class="navbar-brand" href="#">
	    <span>DelishFood</span></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarScroll">
	      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll ml-auto" style="--bs-scroll-height: 100px; ">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#articles">Articles</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#recipes">Recipes</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#find">Find</a>
	        </li>
	    </di
	    <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
	  </div>
	</nav>

	<div id="wrap-rel">

	</div>

	<div class="main-wrapper">
		<div class="container-fluid main">
			<div class="row">
				<div class="col-lg-7 articles" id="articles">
					<div class="icon-menu">
						<i class="far fa-newspaper"></i>
					</div>
					<h1>Articles</h1><br/>
					<hr><br/>
					<div data-aos="fade-right" class="art" id="art_1">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="img/articles/ex-1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla sem, malesuada et rutrum sed, egestas eu turpis. Suspend... <a href="#">Read More</a></p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div data-aos="fade-right" class="art" id="art_2">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="img/articles/ex-2.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla sem, malesuada et rutrum sed, egestas eu turpis. Suspend... <a href="#">Read More</a></p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div data-aos="fade-right" class="art" id="art_3">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="img/articles/ex-3.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla sem, malesuada et rutrum sed, egestas eu turpis. Suspend... <a href="#">Read More</a></p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div data-aos="fade-right" class="art" id="art_4">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="img/articles/ex-4.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla sem, malesuada et rutrum sed, egestas eu turpis. Suspend... <a href="#">Read More</a></p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="art" id="art_5" style="display:none;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="img/articles/ex-5.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla sem, malesuada et rutrum sed, egestas eu turpis. Suspend... <a href="#">Read More</a></p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div  class="art" id="art_6" style="display:none;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="img/articles/ex-6.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla sem, malesuada et rutrum sed, egestas eu turpis. Suspend... <a href="#">Read More</a></p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="art" id="art_7" style="display:none;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="img/articles/ex-7.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla sem, malesuada et rutrum sed, egestas eu turpis. Suspend... <a href="#">Read More</a></p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="art" id="art_8" style="display:none;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-4">
						      <img src="img/articles/ex-8.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Card title</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nulla sem, malesuada et rutrum sed, egestas eu turpis. Suspend... .</p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<a href="javascript:view_more_art();" id="view_more_art" style="display: block;">View More</a>
				</div>

				<div class="col-lg-5 recipes" id="recipes">
					<div class="icon-menu">
						<i class="fas fa-drumstick-bite"></i>
					</div>
					<h1>Recipes</h1><br/>
					<hr><br/>
					<div data-aos="fade-left" class="rcp" id="rcp_1" style="display:block;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-7">
						      <div class="card-body">
						        <h5 class="card-title"><a href="#" class="title">Chorizo & mozzarella gnocchi bake</a></h5>
						        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;500 Ratings
						        <p class="card-text"><small class="text-muted">By Mesmerized Riti</small></p>
						      </div>
						    </div>
						    <div class="col-md-5">
						      <img src="img/recipes/ex-1.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						  </div>
						</div>
					</div>
					<div data-aos="fade-left" class="rcp" id="rcp_2" style="display:block;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-7">
						      <div class="card-body">
						        <h5 class="card-title"><a href="#" class="title">Easy butter chicken</a></h5>
						        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;460 Ratings
						        <p class="card-text"><small class="text-muted">By Ariana Grande</small></p>
						      </div>
						    </div>
						    <div class="col-md-5">
						      <img src="img/recipes/ex-2.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						  </div>
						</div>
					</div>
					<div data-aos="fade-left" class="rcp" id="rcp_3" style="display:block;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-7">
						      <div class="card-body">
						        <h5 class="card-title"><a href="#" class="title">Easy classic lasagne</a></h5>
						        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;420 Ratings
						        <p class="card-text"><small class="text-muted">By Taylor Swift</small></p>
						      </div>
						    </div>
						    <div class="col-md-5">
						      <img src="img/recipes/ex-3.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						  </div>
						</div>
					</div>
					<div data-aos="fade-left" class="rcp" id="rcp_4" style="display:block;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-7">
						      <div class="card-body">
						        <h5 class="card-title"><a href="#" class="title">Easy Pancake</a></h5>
						        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;400 Ratings
						        <p class="card-text"><small class="text-muted">By Chef Juna</small></p>
						      </div>
						    </div>
						    <div class="col-md-5">
						      <img src="img/recipes/ex-4.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						  </div>
						</div>
					</div>
					<div data-aos="fade-left" class="rcp" id="rcp_5" style="display:block;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-7">
						      <div class="card-body">
						        <h5 class="card-title"><a href="#" class="title">Easy Fried Rice</a></h5>
						        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;380 Ratings
						        <p class="card-text"><small class="text-muted">By Chef Arnold</small></p>
						      </div>
						    </div>
						    <div class="col-md-5">
						      <img src="img/recipes/ex-5.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						  </div>
						</div>
					</div>
					<div  class="rcp" id="rcp_6" style="display:none;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-7">
						      <div class="card-body">
						        <h5 class="card-title"><a href="#" class="title">One-pan spaghetti with nduja, fennel & olives</a></h5>
						        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;360 Ratings
						        <p class="card-text"><small class="text-muted">By Chef Renatta</small></p>
						      </div>
						    </div>
						    <div class="col-md-5">
						      <img src="img/recipes/ex-6.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						  </div>
						</div>
					</div>
					<div  class="rcp" id="rcp_7" style="display:none;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-7">
						      <div class="card-body">
						        <h5 class="card-title"><a href="#" class="title">Thai fried prawn & pineapple rice</a></h5>
						        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;330 Ratings
						        <p class="card-text"><small class="text-muted">By Selena Gomez</small></p>
						      </div>
						    </div>
						    <div class="col-md-5">
						      <img src="img/recipes/ex-7.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						  </div>
						</div>
					</div>
					<div class="rcp" id="rcp_8" style="display:none;">
						<div class="card mb-3" style="width: 100%;">
						  <div class="row g-0">
						    <div class="col-md-7">
						      <div class="card-body">
						        <h5 class="card-title"><a href="#" class="title">Piri-piri chicken with smashed sweet potatoes & broccoli</a></h5>
						        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>&nbsp;&nbsp;&nbsp;300 Ratings
						        <p class="card-text"><small class="text-muted">By Simon Cowell</small></p>
						      </div>
						    </div>
						    <div class="col-md-5">
						      <img src="img/recipes/ex-8.jpg" class="img-fluid rounded-start" alt="..." style="height: 100%;">
						    </div>
						  </div>
						</div>
					</div>
					<a href="javascript:view_more_rcp();" id="view_more_rcp" style="display: block;">View More</a>
				</div>

				<br/>
				<div class="col-lg-12 find" id="find">
					<div class="icon-menu">
						<i class="fas fa-search-location"></i>
					</div>
					<h1>Find Foods Around You</h1><br/>
					<hr><br/>
					<div class="container-res-list" id="container-res-list">
						<btn class="circle left" id="slideLeft">
							<i class="fas fa-angle-left"></i>
						</btn>
						<btn class="circle right" id="slideRight">
							<i class="fas fa-angle-right"></i>
						</btn>
						<div class="wrapper-res">
							<div class="d-inline-flex p-2" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
								<div class="card kartu" style="width: 15rem;">
								  <a href="#"><img src="img/logo/kfc.png" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Kentucky Fried Chicken (KFC)</h5>
								  </div></a>
								</div>
								<div class="card kartu" style="width: 15rem;">
								  <a href="#"><img src="img/logo/mcd.jpg" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">McDonald's (McD)</h5>
								  </div></a>
								</div>
								<div class="card kartu" style="width: 15rem;">
								  <a href="#"><img src="img/logo/cfc.jpg" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">California Fried Chicken (CFC)</h5>
								  </div></a>
								</div>
								<div class="card kartu" style="width: 15rem;">
								  <a href="#"><img src="img/logo/burger-king.png" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Burger King</h5>
								  </div></a>
								</div>
								<div class="card kartu" style="width: 15rem;">
								  <a href="#"><img src="img/logo/richeese.jpg" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Richeese Factory</h5>
								  </div></a>
								</div>
								<div class="card kartu" style="width: 15rem;">
								  <a href="#"><img src="img/logo/dominos.jpg" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Dominos Pizza</h5>
								  </div></a>
								</div>
								<div class="card kartu" style="width: 15rem;">
								  <a href="#"><img src="img/logo/pizza-hut.jpg" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Pizza Hut</h5>
								  </div></a>
								</div>
								<div class="card kartu" style="width: 15rem;">
								  <a href="#"><img src="img/logo/hokben.jpg" class="card-img-top" alt="...">
								  <div class="card-body">
								    <h5 class="card-title">Hoka Hoka Bento</h5>
								  </div></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br/>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row" id="row-footer">
				<div class="col-lg-5" id="info">
					<i class="far fa-envelope"></i>&nbsp;&nbsp;<span>delishfood@gmail.com</span><br/>
					<i class="fab fa-instagram"></i>&nbsp;&nbsp;<span>delishfood</span><br/>
					<i class="fab fa-facebook-f"></i>&nbsp;&nbsp;<span>Delish Food</span>
				</div>
				<div class="col-lg-7" id="logo">
					<img src="img/icon.png" alt="" width="42" height="42" class="d-inline-block align-text-top">
				    <a  href="#">
				    <span>DelishFood</span></a>
				</div>
				<span>Designed by <a href="https://instagram.com/ffiqriansyah">Fauzan Fiqriansyah </a>&copy; 2021</span>
			</div>
		</div>
	</div>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script type="text/javascript" src="javascript/script.js"></script>
	

</body>
</html>