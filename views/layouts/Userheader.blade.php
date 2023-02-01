<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/util.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> --}}
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/MagnificPopup/magnific-popup.css')}}">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">

<!--===============================================================================================-->
    <title>E_Commerce</title>


    <nav class="  navbar text-white navbar-expand-lg bg-dark  w-100">
 <div class="container">
        <a class="navbar-brand text-white" href="{{url('/')}}">Fashion</a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon bg-white"></span>
                </button>
            </div>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0  p-3 text-white ">
                      <li class="nav-item">
                          <a class="nav-link active" id="ac"href="/">Home</a>
                        </li>

                    <li class="nav-item">
                        <a class="nav-link   active" href="{{url('/user/products/{id}/{slug}')}}">Products</a>
                      </li>


                    <li class="nav-item">
                      <a class="nav-link  active" href="#feature">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link   active" href="{{url('/user/blogs')}}">Blogs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link   active" href="{{url('/user/comment')}}">Contact&Review</a>
                      </li>

<li class="nav-item">

@auth


        <div class="dropdown">
                           <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                          {{Auth::user()->name}}
                            </a>
                            <a class="nav-link"  href="logout" role="button" >Logout</a>

                            @endauth

@guest
  <li class="nav-item"><a class="nav-link "  href="/user/login" role="button" >Login</a> </li>
<li class="nav-item"><a class="nav-link"  href="/user/register" role="button" >Register</a> </li>

@endguest

                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/userpanel">Account</a></li>
                              <li><a class="dropdown-item" href="/user/login">Login</a></li>
                              <li><a class="dropdown-item" href="/user/register">Create Account</a></li>
                            </ul>
                          </div>





</li>




<li class="nav-item">
    <a class="nav-link  active" href="/user/cart/">
    <div class="header-btns-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
      </svg>

       {{-- <span class="qty">Qun : {{\App\Http\Controllers\CartController::countcart()}}</span> --}}
     </div>

     </a>
</li>





                    </ul>
                   </div>
            </div>
                </nav>
                @yield('contentusr')
                <script src="{{asset('assets/js/jquery-3.6.1.js')}}"></script>
 <script src="{{asset('assets/js/bootstrap.js')}}"></script>


 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
{{-- <!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> --> --}}
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('assets/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/parallax100/parallax100.js')}}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/js/main.js')}} "></script>
</body>
</html>
