<?php include 'header.php';?>
<style>
  .container {
  position: relative;
  text-align: center;
  color: white;
}
.vigo_container_two {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}





.item{
  padding-left:5px;
  padding-right:5px;
}
.item-card{
  transition:0.5s;
  cursor:pointer;
}
.item-card-title{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
}
.item-card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ffa710
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card-text{
  height:80px;  
}

.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}
    </style>

<div class="container-fluid">
  <img src="assets/images/banner-online-offline-system_107791-2042.jpg" alt="Snow" style="width:100%;height:400px;">

				<div class="vigo_container_two">
					<div class="row" >
						<div class="col-md-12">
							<div class="page_header">
								<h1></h1>
							</div>
							<!-- /.page-header -->
							<div class="breadcrumb_text ">
								<p><a href="index.php">Home</a> | <span>About us</span></p>
							</div>
						</div>
						<!-- /.col-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.vigo_container_two -->
			
</div>


<section class="w3l-about1">
  <div class="new-block py-5">
    <div class="container py-lg-5">
      <div class="middle-section">
        <!-- <h5>Tagline</h5> -->
        <div class="section-width">
          <h2>Start your Business today with this professional </h2>
        </div>
        <div class="link-list-menu">
            <p class="mb-md-5 mb-3">Workflow is the definition, execution and automation of business processes where tasks information.</p>
            <a href="about.html" class="btn btn-outline-primary btn-outline-style py-3 btn-icon">Read More <span class="fa fa-chevron-right" aria-hidden="true"></span></a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="w3l-stats">
  <div class="main-w3 py-5">
    <div class="container py-lg-3">
      <div class="row align-items-center">
        <div class="col-md-6 title">
          <h3>We have a great funfact which
            we want to show you!</h3>
          <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, soluta impedit. Consequatur,
            quasi mollitia? Adipisci exercitationem amet dolore expedita repudiandae voluptatem impedit ipsa vero
            repellendus?</p>
        </div>
        <div class="col-md-6 main-cont-wthree-fea text-center">
          <div class="row">
            <div class="col-6 pr-2 mt-4">
              <div class="grids-speci1">
                <span class="fa fa-users"></span>
                <h3 class="title-spe">1200+</h3>
                <p>Happy Clients</p>
              </div>
            </div>
            <div class="col-6 pl-2 mt-4">
              <div class="grids-speci1">
                <span class="fa fa-camera"></span>
                <h3 class="title-spe">18k+</h3>
                <p>Projects</p>
              </div>
            </div>
            <div class="col-6 pr-2 mt-4">
              <div class="grids-speci1">
                <span class="fa fa-briefcase"></span>
                <h3 class="title-spe">158</h3>
                <p>Partners</p>
              </div>
            </div>
            <div class="col-6 pl-2 mt-4">
              <div class="grids-speci1">
                <span class="fa fa-comments"></span>
                <h3 class="title-spe">879+</h3>
                <p>Questions Answered</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="w3l-section-title">
  <div class="new-block py-5">
    <div class="container pt-lg-5">
      <div class="row">
      <div class="col-md-4 title">
        <h3>Our Vision</h3>
      </div>
      <div class="col-md-8 title-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eligendi incidunt, reprehenderit minima exercitationem accusantium reiciendis, cupiditate optio corrupti quis quam at!.</p>
      </div>
    </div>
    </div>
  </div>
</section>
<section class="w3l-about3">
  <div class="story-inner-6 text-left py-5">
    <div class="container pt-lg-3">
      <div class="row align-items-center">
        <div class="col-md-6 story-gd">
          <h3 class="global-title title">First Class Business Solutions for You</h3>
          <p class="mb-4">It is a long established fact that a reader will be distracted by the readable content of a
            page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters.</p>

            <div class="story-info-content">
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Creative Thinker</a>
                </h5>
              </div>
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Accounting Procedures Guidebook</a>
                </h5>
              </div>
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Cost Accounting Fundamentals</a>
                </h5>
              </div>
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Corporate Cashless Management</a>
                </h5>
              </div>
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  support </a>
                </h5>
              </div>
            </div>

        </div>
        <div class="col-md-5 offset-md-1 offset-0 mt-md-0 mt-5">
          <div class="story-gd proff">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="w3l-about4">
  <div class="story-inner-6 text-left py-5">
    <div class="container pt-lg-3">
      <div class="row align-items-center">
        <div class="col-md-5">
          <div class="story-gd proff">

          </div>
        </div>
        <div class="col-md-6 offset-md-1 offset-0 story-gd mt-md-0 mt-5">
          <h3 class="global-title title"> Best agency for cashless or cardless transaction</h3>
          <p class="mb-4">It is a long established fact that a reader will be distracted by the readable content of a
            page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters.</p>
            <p class="mb-4">It is a long established fact that a reader will be distracted by the readable content of a
              page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="w3l-about5">
  <div class="story-inner-6 text-left py-5">
    <div class="container pt-lg-3">
      <div class="row align-items-center">
        <div class="col-md-6 story-gd">
          <h3 class="global-title title">We are Qualified
            & Professional</h3>
          <p class="mb-4">It is a long established fact that a reader will be distracted by the readable content of a
            page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters.</p>

            <div class="story-info-content">
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Enquiry</a>
                </h5>
              </div>
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Accounting Procedures Guidebook</a>
                </h5>
              </div>
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Cost Accounting Fundamentals</a>
                </h5>
              </div>
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Cashless Management</a>
                </h5>
              </div>
              <div class="story-info">
                <h5><span class="fa fa-check" aria-hidden="true"></span> <a href="#url">
                  Qr generator</a>
                </h5>
              </div>
            </div>

          
        </div>
        <div class="col-md-5 offset-md-1 offset-0 mt-md-0 mt-5">
          <div class="story-gd proff">

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="w3l-team" id="team">
	<div class="teams1 py-5">
		<div class="container py-lg-3">
			<div class="teams1-content">
				<h2>Meet our lovely team</h2>
				<p class="team-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing amet per elit. </p>
					<div class="owl-carousel owl-theme text-center">
						<div class="item">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="assets/images/team.jpg" alt="" class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column">
									<h3 class="name-pos"><a href="#url">Anthony</a></h3>
									<p>Project Manager</p>
									<div class="social">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="assets/images/team2.jpg" alt="" class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column">
									<h3 class="name-pos"><a href="#url">Dennis Jack</a></h3>
									<p>Team Lead</p>
									<div class="social">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="assets/images/team3.jpg" alt="" class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column">
									<h3 class="name-pos"><a href="#url">Harold</a></h3>
									<p>support head</p>
									<div class="social">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="assets/images/team4.jpg" alt="" class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column">
									<h3 class="name-pos"><a href="#url">Lawrence</a></h3>
									<p>advisor</p>
									<div class="social">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="assets/images/team5.jpg" alt="" class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column">
									<h3 class="name-pos"><a href="#url">Bradley</a></h3>
									<p>consultant</p>
									<div class="social">
										<a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
										<a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>


<section class="w3l-index4">
  <div class="section-four gotocontact py-5">
    <div class="container py-xl-5 py-lg-3">
      <div class="row align-items-center">
        <div class="col-xl-7 col-lg-6">
          <div class="heading white">
            <h3>We have offered the best pricing
              to make life easier!</h3>
            <p class="mt-4">Consulting Agency for Your Business!</p>
          </div>
        </div>
        <div class="offset-xl-1 offset-0 col-xl-3 col-lg-6 text-lg-right mt-5 mt-lg-0">
          <a class="btn btn-light btn-outline-style py-3" href="contact.html" title="Contact Us!"><span
              class="fa fa-location-arrow mr-2"></span>Contact Us!</a>
        </div>
      </div>
    </div>
</section>
<div class="container mt-5 pt-5 mb-4">
<!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->
  <div class="row">
    <div class="col-md-4 col-sm-6 item">
      <div class="card item-card card-block">
      <div class="card-body">
      <img width="295" height="166" src="https://mk0xucobucefof4dkp4y.kinstacdn.com/wp-content/uploads/2020/01/bizresults-transparent.svg" class="img-responsive object-cover lazyloaded" alt="Business Results with Scandit" sizes="(min-width: 1024px) 50vw, 75vw" data-ll-status="loaded">
        <h5 class="text-dark">Vision</h5> 
        <p><span class="block mx-auto px-4 pb-2 -mt-4 text-dark ">Our innovation is focused on delivering significant operational cost savings, increased employee retention and customer loyalty.</span></p>
        </div>
  </div>
    </div>
    <div class="col-md-4 col-sm-6 item">
      <div class="card item-card card-block">
     
    
      <div class="card-body">
      <img width="295" height="166" src="https://mk0xucobucefof4dkp4y.kinstacdn.com/wp-content/uploads/2020/01/performance-transparent.svg" class="img-responsive object-cover lazyloaded" alt="Top Performance with Scandit" sizes="(min-width: 1024px) 50vw, 75vw" data-ll-status="loaded">
    <h5 class="text-dark">Mission</h5> 
    <p><span class="block mx-auto px-4 pb-2 -mt-4 text-dark">Our high-performance scanning is fast and accurate – with the unmatched ability to scan in bad light, at any angle and with damaged labels.</span></p>
    </div>
        
  </div>
    </div>
    <div class="col-md-4 col-sm-6 item">
      <div class="card item-card card-block">
      
    
      <div class="card-body">
      <img width="295" height="166" src="https://mk0xucobucefof4dkp4y.kinstacdn.com/wp-content/uploads/2020/01/support-transparent.svg" class="img-responsive object-cover lazyloaded" alt="Enterprise-Level Support with Scandit" sizes="(min-width: 1024px) 50vw, 75vw" data-ll-status="loaded">
    <h5 class="text-dark">Support</h5> 
    <p><span class="block mx-auto px-4 pb-2 -mt-4 text-dark">We offer specialist technical, solution and best practice support during the design and implementation phases and a range of support and analytics options during live service.</span></p>
    </div>
         
  </div>
    </div>
   
        
  </div>
    </div>    
  </div>
  
</div>



<?php include 'footer.php';?>