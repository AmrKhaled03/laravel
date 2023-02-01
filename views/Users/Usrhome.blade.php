@extends('layouts.Userheader')
@section('contentusr')
</head>
<body>
<!-- header -->
  <header>
      <div id="carouselExampleCaptions" class="carousel slide mb-5" data-bs-ride="carousel">
        <!-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/img/gallery/shop.jpeg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>SOME THING IS BETTER </p>
              <h1>Fashion Lorrem</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/gallery/shopping.jpeg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>SOME THING IS BETTER </p>
              <h1>Fashion Lorrem</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('assets/img/gallery/couple-with-luxury-bags-violet-happy-couple-luxury-purchases.jpg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block ">
              <p>SOME THING IS BETTER </p>
              <h1>Fashion Lorrem</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </header>
<!-- mens&women&footwears -->








<section class="select1" >

  <div class="container">
      <div class="row ">
<div class="col-md-12">
    <h4>Our Categories :</h4>
</div>
@foreach ($item as $rs)

      <div class=" col-6 col-md-2" id="women">

        <div class="card card-span h-100 text-white">
<a href="/user/{{$rs->title}}">
                  <img class="img-fluid" src="{{Storage::url($rs->image)}}" width="700" alt="..." />


                  <div class="card-img-overlay d-flex flex-center"> <button class="btn btn-light">Shop </button></div>
               </a>

        </div>

      </div>
  @endforeach
    </div>

</div>
</section>


<!--featured-->








<!-- Product -->
<section class="sec-product bg0 p-t-100 p-b-50">
    <div class="container">
        <div class="p-b-32">
            <h3 class="ltext-105 cl5 txt-center respon1" id="feautre">
            <hr>	Feautured items   <hr>
            </h3>
        </div>

        <div class="bg0 m-t-23 p-b-140">
            <div class="container">

                <form action="/user/cart/store" method="post">
                    @csrf
                <div class="row isotope-grid">
                    @foreach ($productlist as $ts)




                     <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{Storage::url($ts->image)}}" alt="IMG-PRODUCT">

                                <a href="/user/product-detail/{{$ts->id}}" class="block2-btn flex-c-m stext-104 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-name">
                                    Quick View
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">

                                    <a href="/user/product-detail/{{$ts->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{$ts->title}}
                                  </a>





                                    <span class="stext-105 cl3">
                                        ${{$ts->price}}
                                    </span>
                                </div>

                                <form action="/user/cart/store" method="post">
                                    @csrf
                                <div class="block2-txt-child2 flex-r p-t-3 mt-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                            Add to cart
                                        </button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>


                    @endforeach


            </div>
            </form>
        </div>
</section>











	<!-- Blog -->
	<section class="sec-blog bg0 p-t-60 p-b-90">
		<section class="sec-blog bg0 p-t-60 p-b-90">
            <div class="container">
                <div class="p-b-66">
                    <h3 class="ltext-105 cl5 txt-center respon1">
                        Our Blogs
                    </h3>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-4 p-b-40">
                        <div class="blog-item">
                            <div class="hov-img0">

                                    <img src="assets/img/images/blog-01.jpg" alt="IMG-BLOG">

                            </div>

                            <div class="p-t-15">
                                <div class="stext-107 flex-w p-b-14">
                                    <span class="m-r-3">
                                        <span class="cl4">
                                            By
                                        </span>

                                        <span class="cl5">
                                            Nancy Ward
                                        </span>
                                    </span>

                                    <span>
                                        <span class="cl4">
                                            on
                                        </span>

                                        <span class="cl5">
                                            July 22, 2017
                                        </span>
                                    </span>
                                </div>

                                <h4 class="p-b-12">
                                    <a href="/user/blogs" class="mtext-101 cl2 hov-cl1 trans-04">
                                        8 Inspiring Ways to Wear Dresses in the Winter
                                    </a>
                                </h4>

                                <p class="stext-108 cl6">
                                    Duis ut velit gravida nibh bibendum commodo. Suspendisse pellentesque mattis augue id euismod. Interdum et male-suada fames
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 p-b-40">
                        <div class="blog-item">
                            <div class="hov-img0">

                                    <img src="assets/img/images/blog-02.jpg" alt="IMG-BLOG">

                            </div>

                            <div class="p-t-15">
                                <div class="stext-107 flex-w p-b-14">
                                    <span class="m-r-3">
                                        <span class="cl4">
                                            By
                                        </span>

                                        <span class="cl5">
                                            Nancy Ward
                                        </span>
                                    </span>

                                    <span>
                                        <span class="cl4">
                                            on
                                        </span>

                                        <span class="cl5">
                                            July 18, 2017
                                        </span>
                                    </span>
                                </div>

                                <h4 class="p-b-12">
                                    <a href="/user/blogs" class="mtext-101 cl2 hov-cl1 trans-04">
                                        The Great Big List of Men’s Gifts for the Holidays
                                    </a>
                                </h4>

                                <p class="stext-108 cl6">
                                    Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 p-b-40">
                        <div class="blog-item">
                            <div class="hov-img0">

                                    <img src="assets/img/images/blog-03.jpg" alt="IMG-BLOG">

                            </div>

                            <div class="p-t-15">
                                <div class="stext-107 flex-w p-b-14">
                                    <span class="m-r-3">
                                        <span class="cl4">
                                            By
                                        </span>

                                        <span class="cl5">
                                            Nancy Ward
                                        </span>
                                    </span>

                                    <span>
                                        <span class="cl4">
                                            on
                                        </span>

                                        <span class="cl5">
                                            July 2, 2017
                                        </span>
                                    </span>
                                </div>

                                <h4 class="p-b-12">
                                    <a href="/user/blogs" class="mtext-101 cl2 hov-cl1 trans-04">
                                        5 Winter-to-Spring Fashion Trends to Try Now
                                    </a>
                                </h4>

                                <p class="stext-108 cl6">
                                    Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	</section>


	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
					Shops
					</h4>

					<ul>
                        <li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								New In
							</a>
						</li>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Accessories
							</a>
						</li>
                        <li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Top Brands
							</a>
						</li>
                        <li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
							Sales
							</a>
						</li>
                        <li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Look Book
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Find Us :
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>



				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="{{asset('assets/img/images/icons/icon-pay-01.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="{{asset('assets/img/images/icons/icon-pay-02.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="{{asset('assets/img/images/icons/icon-pay-03.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="{{asset('assets/img/images/icons/icon-pay-04.png')}}" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="{{asset('assets/img/images/icons/icon-pay-05.png')}}" alt="ICON-PAY">
					</a>
				</div>

				<p class=" cl6 text-center">

Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{url('/user/Userhome')}}" class="text-primary">Fashion</a> &amp; distributed by <strong class="text-danger">Amr Khaled Marey</strong>


				</p>
			</div>
		</div>
	</footer>
</body>
</html>

@endsection



