@extends('layouts.Userheader')
@section('contentusr')
<div class="row">
<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
    <div class="m-l-25 m-r--38 m-lr-0-xl">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tbody><tr class="table_head">
                    <th class="column-1">Product</th>
                    <th class="column-2"></th>
                    <th class="column-3">Price</th>
                    <th class="column-4">Quantity</th>
                    <th class="column-5">Total</th>
                </tr>

@php
$total=0
  @endphp

@foreach ($data as $is)
                <tr class="table_row">

                    <td class="column-1">
                        <div class="block2-pic hov-img0">
                            <img src="{{Storage::url($is->product->image)}}" alt="IMG-PRODUCT">


                        </div>
                    </td>
                    <td class="column-2">{{$is->product->title}}</td>
                    <td class="column-3">$ {{$is->product->price}}</td>
                    <td class="column-4">



<form action="/user/cart/update/{{$is->id}}" method="POST">
                            @csrf
                            <input class="mtext-104 cl3 txt-center num" type="number" name="quantity" value="{{$is->quantity}}" min="1" max="{{$is->product->quantity}}" onchange="this.form.submit()">
 </form>



                    </td>
                    <td class="column-5">Total : ${{ $is->product->price}} * {{$is->quantity}} </td>
                    <td class="text-right">
                     <a href="/user/cart/delete/{{$is->id}}" class="main-btn icon-btn"onclick="return confirm('Deleting !! Are You Sure ?')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="fa fa-close text-danger " viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg>

                    </a>
{{-- btn btn-block btn-danger btn-sm --}}
                    </td>
                </tr>
                @php
                $total+= $is->product->price * $is->quantity;
                @endphp
                @endforeach

            </tbody></table>
        </div>

        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
            <div class="flex-w flex-m m-r-20 m-tb-5">
                <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                    Apply coupon
                </div>
            </div>

            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                Update Cart
            </div>
        </div>
    </div>
</div>

<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
        <h4 class="mtext-109 cl2 p-b-30">
            Cart Totals
        </h4>

        <div class="flex-w flex-t bor12 p-b-13">
            <div class="size-208">
                <span class="stext-110 cl2">
                    Subtotal:
                </span>
            </div>

            <div class="size-209">
                <span class="mtext-110 cl2">
                  ${{$total}}
                </span>
            </div>
        </div>

        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
            <div class="size-208 w-full-ssm">
                <span class="stext-110 cl2">
                    Shipping:
                </span>
            </div>

            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                <p class="stext-111 cl6 p-t-2">
                    There are no shipping methods available. Please double check your address, or contact us if you need any help.
                </p>

                <div class="p-t-15">
                    <span class="stext-112 cl8">
                        Calculate Shipping
                    </span>

                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                        <select class="js-select2 select2-hidden-accessible" name="time" tabindex="-1" aria-hidden="true">
                            <option>Select a country...</option>
                            <option>USA</option>
                            <option>UK</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 126px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-time-bm-container"><span class="select2-selection__rendered" id="select2-time-bm-container" title="Select a country...">Select a country...</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <div class="dropDownSelect2"></div>
                    </div>

                    <div class="bor8 bg0 m-b-12">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
                    </div>

                    <div class="bor8 bg0 m-b-22">
                        <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
                    </div>

                    <div class="flex-w">
                        <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                            Update Totals
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="flex-w flex-t p-t-27 p-b-33">
            <div class="size-208">
                <span class="mtext-101 cl2">
                    Total:
                </span>
            </div>

            <div class="size-209 p-t-1">
                <span class="mtext-110 cl2">
                    $79.65
                </span>
            </div>
        </div>

        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
            Proceed to Checkout
        </button>
    </div>
</div>


</div>









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


@endsection
