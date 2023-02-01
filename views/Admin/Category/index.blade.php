@extends('layouts.Adminbase')
@section('title', 'category list')
    @section('content')
    <div class="content-wrapper">
        <div class="box-header">
            <div class="row">
            <div class="col-md-6">
                <a href="/admin/category/create" class="btn btn-block btn-lg btn-primary" style="width: 200px">Add Category</a>
                </div><!-- /.box-header -->
               <div class="col-md-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                       <li class="breadcrumb-item">Category List</li>
                   </ol>
               </div>
          </div>
          </div>
             <!-- Right side column. Contains the navbar and content of the page -->
             <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box">
                        <div class="col-md-6">
                            <h3 class="box-title">Category List</h3>
                        </div><!-- /.box-header -->

                        <div class="box-body">
                          <table class="table table-bordered">
                            <tbody><tr>
                              <th style="width: 10px">Id</th>
                              <th>Title</th>
                              <th>Keywords</th>
                              <th>Descripition</th>
                              <th>Image</th>
                              <th style="width: 40px">Edit</th>
                              <th style="width: 40px">Delete</th>
                              <th style="width: 40px">Show</th>
                            </tr>
                        </thead>
                            <tbody>
@foreach ($data as $rs)


                            <tr>
                              <td>{{$rs->id}}</td>
                              <td>{{$rs->title}}</td>
                              <td>{{$rs->keywords}}</td>
                              <td>{{$rs->description}}</td>
                              <td>@if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height:40px">@endif</td>
                              <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-block btn-info btn-sm">Edit</a> </td>
                              <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-block btn-danger btn-sm"onclick="return confirm('Deleting !! Are You Sure ?')">Delete</a> </td>
                              <td><a href="/admin/category/show/{{$rs->id}}" class="btn btn-block btn-success btn-sm">Show</a> </td>
                            </tr>
                            @endforeach

                          </tbody></table>
                        </div><!-- /.box-body -->

                      </div>
                </div><!-- /.box -->

              </section>
            </div>

@endsection
