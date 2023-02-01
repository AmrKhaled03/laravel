@extends('layouts.Userheader')
@section('contentusr')
</head>
<body>



    <section>
        <div class="p-b-63">
            <a href="{{url('/user/blog-detail3')}}-detail.html" class="hov-img0 how-pos5-parent">
                <img src="{{asset('assets/img/images/blog-06.jpg')}}" alt="IMG-BLOG">

                <div class="flex-col-c-m size-123 bg9 how-pos5">
                    <span class="ltext-107 cl2 txt-center">
                        16
                    </span>

                    <span class="stext-109 cl3 txt-center">
                        Jan 2018
                    </span>
                </div>
            </a>

            <div class="p-t-32">
                <h4 class="p-b-15">
                    <a href="{{url('/user/blog-detail3')}}-detail.html" class="ltext-108 cl2 hov-cl1 trans-04">
                        5 Winter-to-Spring Fashion Trends to Try Now
                    </a>
                </h4>

                <p class="stext-117 cl6">
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
                </p>

                <div class="flex-w flex-sb-m p-t-18">
                    <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                        <span>
                            <span class="cl4">By</span> Admin
                            <span class="cl12 m-l-4 m-r-6">|</span>
                        </span>

                        <span>
                            StreetStyle, Fashion, Couple
                            <span class="cl12 m-l-4 m-r-6">|</span>
                        </span>

                        <span>
                            8 Comments
                        </span>
                    </span>
                    <p class="stext-117 cl6 p-b-26">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.
                    </p>

                </div>
            </div>
        </div>








        <form>
            <div class="bor19 m-b-20">
                <textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15" name="cmt" placeholder="Comment..."></textarea>
            </div>

            <div class="bor19 size-218 m-b-20">
                <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="name" placeholder="Name *">
            </div>

            <div class="bor19 size-218 m-b-20">
                <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="email" placeholder="Email *">
            </div>

            <div class="bor19 size-218 m-b-30">
                <input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="web" placeholder="Website">
            </div>

            <button class="flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04">
                Post Comment
            </button>
        </form>
    </div>
</div>
</div>

<div class="col-md-4 col-lg-3 p-b-80">
<div class="side-menu">
    <div class="bor17 of-hidden pos-relative">
        <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

        <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
            <i class="zmdi zmdi-search"></i>
        </button>
    </div>

    <div class="p-t-55">
        <h4 class="mtext-112 cl2 p-b-33">
            Categories
        </h4>

        <ul>
            <li class="bor18">
                <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                    Fashion
                </a>
            </li>

            <li class="bor18">
                <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                    Beauty
                </a>
            </li>

            <li class="bor18">
                <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                    Street Style
                </a>
            </li>

            <li class="bor18">
                <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                    Life Style
                </a>
            </li>

            <li class="bor18">
                <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                    DIY & Crafts
                </a>
            </li>
        </ul>
    </div>

    <div class="p-t-65">
        <h4 class="mtext-112 cl2 p-b-33">
            Featured Products
        </h4>

        <ul>
            <li class="flex-w flex-t p-b-30">
                <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                    <img src="{{asset('assets/img/images/product-min-01.jpg')}}" alt="PRODUCT">
                </a>

                <div class="size-215 flex-col-t p-t-8">
                    <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                        White Shirt With Pleat Detail Back
                    </a>

                    <span class="stext-116 cl6 p-t-20">
                        $19.00
                    </span>
                </div>
            </li>

            <li class="flex-w flex-t p-b-30">
                <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                    <img src="{{asset('assets/img/images/product-min-02.jpg')}}" alt="PRODUCT">
                </a>

                <div class="size-215 flex-col-t p-t-8">
                    <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                        Converse All Star Hi Black Canvas
                    </a>

                    <span class="stext-116 cl6 p-t-20">
                        $39.00
                    </span>
                </div>
            </li>

            <li class="flex-w flex-t p-b-30">
                <a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                    <img src="{{asset('assets/img/images/product-min-03.jpg')}}" alt="PRODUCT">
                </a>

                <div class="size-215 flex-col-t p-t-8">
                    <a href="#" class="stext-116 cl8 hov-cl1 trans-04">
                        Nixon Porter Leather Watch In Tan
                    </a>

                    <span class="stext-116 cl6 p-t-20">
                        $17.00
                    </span>
                </div>
            </li>
        </ul>
    </div>

    <div class="p-t-55">
        <h4 class="mtext-112 cl2 p-b-20">
            Archive
        </h4>

        <ul>
            <li class="p-b-7">
                <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                    <span>
                        July 2018
                    </span>

                    <span>
                        (9)
                    </span>
                </a>
            </li>

            <li class="p-b-7">
                <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                    <span>
                        June 2018
                    </span>

                    <span>
                        (39)
                    </span>
                </a>
            </li>

            <li class="p-b-7">
                <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                    <span>
                        May 2018
                    </span>

                    <span>
                        (29)
                    </span>
                </a>
            </li>

            <li class="p-b-7">
                <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                    <span>
                        April  2018
                    </span>

                    <span>
                        (35)
                    </span>
                </a>
            </li>

            <li class="p-b-7">
                <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                    <span>
                        March 2018
                    </span>

                    <span>
                        (22)
                    </span>
                </a>
            </li>

            <li class="p-b-7">
                <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                    <span>
                        February 2018
                    </span>

                    <span>
                        (32)
                    </span>
                </a>
            </li>

            <li class="p-b-7">
                <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                    <span>
                        January 2018
                    </span>

                    <span>
                        (21)
                    </span>
                </a>
            </li>

            <li class="p-b-7">
                <a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
                    <span>
                        December 2017
                    </span>

                    <span>
                        (26)
                    </span>
                </a>
            </li>
        </ul>
    </div>

    <div class="p-t-50">
        <h4 class="mtext-112 cl2 p-b-27">
            Tags
        </h4>

        <div class="flex-w m-r--5">
            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Fashion
            </a>

            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Lifestyle
            </a>

            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Denim
            </a>

            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Streetstyle
            </a>

            <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
                Crafts
            </a>
        </div>
    </div>
</div>
</div>
</div>
</div>
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
