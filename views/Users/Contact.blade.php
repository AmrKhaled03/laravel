@extends('layouts.Userheader')
@section('contentusr')
<div class="section">
     <div class="box-header">
        <h3 class="box-title">Contact Form</h3>


      <form role="form" action="/storemessage" class="clearfix" method="POST" enctype="multipart/form-data">
          @csrf
          @include('Admin.messages')
        <div class="box-body">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name : ">
            </div>
        </div>
          <div class="box-body">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email : ">
            </div>
          </div>
              <div class="box-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone : ">
                </div>
              </div>


          <div class="box-body">
            <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject : ">
            </div>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <textarea class="form-control" name="message" ></textarea>
                </div>
              </div>



        <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary">
        </div>
      </form>
   </div>
</div>



@endsection

