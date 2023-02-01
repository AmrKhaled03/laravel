@extends('layouts.Adminbase')
@section('title', 'Show Message'.$data->title)
    @section('content')
      <!-- Default box -->

    <div class="content-wrapper">
        <section class="content">
            <div class="row">

                    <div class="col-md-3">
                        <td><a href="/admin/message/delete/{{$data->id}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are You Sure ?')"style="width: 200px">Delete</a> </td>
                        </div><!-- /.box-header -->
                   <div class="col-md-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                           <li class="breadcrumb-item">Show Message</li>
                       </ol>
                   </div>
              </div>
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Detail message data  : </h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                   <tr>
                      <th style="width: 200px">Id : </th>
                      <td>{{$data->id}}</td>
                    </tr>

                    <tr>
                        <th >Name :</th>
                        <td>{{$data->name}}</td>
                      </tr>
                      <tr>
                        <th >Phone :</th>
                        <td>{{$data->phone}}</td>
                      </tr>
                      <tr>
                        <th >Email :</th>
                        <td>{{$data->email}}</td>
                      </tr>

                      <tr>
                        <th >Subject :</th>
                        <td>{{$data->subject}}</td>
                      </tr>
                      <tr>
                        <th >Status :</th>
                        <td>{{$data->status}}</td>
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
