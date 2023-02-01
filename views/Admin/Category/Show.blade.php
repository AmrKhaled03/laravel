@extends('layouts.Adminbase')
@section('title', 'Show category'.$data->title)
    @section('content')
      <!-- Default box -->

    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <td><a href="/admin/category/edit/{{$data->id}}" class="btn btn-block btn-info btn-sm"style="width: 200px">Edit</a> </td>
                    </div>
                    <div class="col-md-3">
                        <td><a href="/admin/category/delete/{{$data->id}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are You Sure ?')"style="width: 200px">Delete</a> </td>
                        </div><!-- /.box-header -->
                   <div class="col-md-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                           <li class="breadcrumb-item">Show Category</li>
                       </ol>
                   </div>
              </div>
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Details : </h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                   <tr>
                      <th style="width: 200px">Id : </th>
                      <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th >Title :</th>
                        <td>{{$data->title}}</td>
                      </tr>
                      <tr>
                        <th >Keywords :</th>
                        <td>{{$data->keywords}}</td>
                      </tr>
                      <tr>
                        <th >Image :</th>
                        <td>@if($data->image)
                            <img src="{{Storage::url($data->image)}}" style="height:100px">@endif</td>
                      </tr>
                      <tr>
                        <th >Created Date :</th>
                        <td>{{$data->created_at}}</td>
                      </tr>
                      <tr>
                        <th >Updated Date :</th>
                        <td>{{$data->updated_at}}</td>
                      </tr>
                  </table>
                </div><!-- /.box-body -->
              </div>
            </section>
            </div>

@endsection
