
{{-- Message --}}
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
@endif







@if ($message=Session::get('info'))
    <div class="alert alert-info alert-block">
        <button class="close" data-dismiss="alert">x</button>
   <strong>{{$message}}</strong>
    </div>
@endif


@if ($message=Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <button class="close" data-dismiss="alert">x</button>
   <strong>{{$message}}</strong>
    </div>
@endif

