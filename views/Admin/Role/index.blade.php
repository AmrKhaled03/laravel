@extends('layouts.Adminbase')
@section('title', ' User list')
    @section('content')
    <div class="content-wrapper">
        <div class="box-header">
            <div class="row">
            <div class="col-md-6">

                </div><!-- /.box-header -->
               <div class="col-md-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                       <li class="breadcrumb-item">User List</li>
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
                            <h3 class="box-title">User List</h3>
                        </div><!-- /.box-header -->

                        <div class="box-body">
                          <table class="table table-bordered">
                            <tbody><tr>
                              <th style="width: 10px">Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Role</th>


                              <th style="width: 40px">Delete</th>
                              <th style="width: 40px">Show</th>
                            </tr>
                        </thead>
                            <tbody>

@foreach ($data as $rs)
    <tr>
                              <td>{{$rs->id}}</td>

                              <td>{{$rs->name}}</td>
                              <td>{{$rs->email}}</td>


                            <td>
                                @foreach($rs->roles as $role)
                                {{$role->name}}
                                @endforeach
                            </td>
                              <td>
                                  <a href="/admin/user/delete/{{$rs->id}}" class="btn btn-block btn-danger btn-sm"onclick="return confirm('Deleting !! Are You Sure ?')">Delete</a> </td>
                              <td><a href="/admin/user/show/{{$rs->id}}" class="btn btn-block btn-success btn-sm">Show</a> </td>
                            </tr>
@endforeach




                          </tbody></table>
                        </div><!-- /.box-body -->

                      </div>
                </div><!-- /.box -->

              </section>
            </div>

@endsection
