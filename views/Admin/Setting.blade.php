@extends('layouts.Adminbase')
@section('title', 'Settings')
@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
    @section('content')
      <!-- Default box -->

    <div class="content-wrapper">
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item">Settings</li>
                    </ol>
                </div>



             <!-- Right side column. Contains the navbar and content of the page -->


                <!-- form start -->
                <form role="form" action="/admin/setting/update/{{$data->id}}" method="POST" enctype="multipart/form-data" >
                    @csrf

                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                    </div>
                  </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Keywords</label>
                          <input type="text" class="form-control" name="keywords" placeholder="Keywords"value="{{$data->keywords}}" >
                        </div>
                    </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Description</label>
                              <input type="text" class="form-control" name="description" placeholder="Descripition"value="{{$data->description}}">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Company</label>
                              <input type="text" class="form-control" name="company" value="{{$data->company}}" >
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Address</label>
                              <input type="text" class="form-control" name="address" value="{{$data->address}}" >
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Phone</label>
                              <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="email" class="form-control" name="email"  value="{{$data->email}}">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Status</label>
                             <select name="status" class="form-control select2">
                                 <option selected="selected">{{$data->status}}</option>
                                 <option >True</option>
                                 <option >False</option>
                             </select>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Stmp Server</label>
                              <input type="text" class="form-control" name="stmpserver" value="{{$data->stmpserver}}">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Stmp Email</label>
                              <input type="text" class="form-control" name="stmpemail" value="{{$data->stmpemail}}" >
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Stmp Password</label>
                              <input type="text" class="form-control" name="stmppassword" value="{{$data->stmppassword}}" >
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Stmpport </label>
                              <input type="text" class="form-control" name="stmpport" value="{{$data->stmpport}}" >
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Fax</label>
                              <input type="text" class="form-control" name="fax" value="{{$data->fax}}">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Facebook</label>
                              <input type="text" class="form-control" name="facebook" value="{{$data->facebook}}" >
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Instagram</label>
                              <input type="text" class="form-control" name="instagram"  value="{{$data->instagram}}">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Twitter</label>
                              <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" >
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Youtube</label>
                              <input type="text" class="form-control" name="youtube"  value="{{$data->youtube}}">
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Social</label>
                                <textarea name="social" id="social" value="{{$data->social}}"></textarea>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label >About Us</label>
                                <textarea name="aboutus" id="aboutus" value="{{$data->aboutus}}"></textarea>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label >Contact</label>
                                <textarea name="contact" id="contact" value="{{$data->contact}}"></textarea>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label >References</label>
                                <textarea name="references" id="references" value="{{$data->references}}"></textarea>
                            </div>
                        </div>

 <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update Settings</button>
                  </div>
 </form>
                  </div><!-- /.box-body -->



           </section>
              </div>
            </div>

@endsection
@section('footer')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
 $function(){
     $('.textarea').summernote()
 })
</script>
@endsection
