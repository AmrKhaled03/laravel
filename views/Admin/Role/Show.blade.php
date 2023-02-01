@extends('layouts.Adminbase')
@section('title', 'User detail')
    @section('content')
      <!-- Default box -->

    <div class="content-wrapper">
        <section class="content">
            <div class="row">

                  <!-- /.box-header -->
                   <div class="col-md-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                           <li class="breadcrumb-item">Show User</li>
                       </ol>
                   </div>
              </div>
            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Detail User data  : </h3>
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
                        <th >Email :</th>
                        <td>{{$data->email}}</td>
                      </tr>

                      <tr>
                        <th >Roles:</th>
                        <td>
                                @foreach ($data->roles as $role)
                            {{$role->name}}
                            <a href="{{url('/admin/user/deleterole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-block btn-danger btn-sm"onclick="return confirm('Deleting !! Are You Sure ?')">[ x ]</a>

                                @endforeach
                        </td>
                      </tr>


                      <tr>
                        <th >Created Date :</th>
                        <td>{{$data->created_at}}</td>
                      </tr>
                      <tr>
                        <th >Updated Date :</th>
                        <td>{{$data->updated_at}}</td>
                      </tr>
                      <tr>
                        <th >Add role to user :</th>
                        <td>
<form action="/admin/user/addrole/{{$data->id}}" method="post" enctype="multipart/form-data">
@csrf
<select name="role_id">
    @foreach ($roles as $role)
    <option value="{{$role->id}}">{{$role->name}}</option>
    @endforeach

</select>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Add Role</button>
  </div>
</form>

                        </td>
                      </tr>
                  </table>
                </div><!-- /.box-body -->
              </div>
            </section>
            </div>

@endsection
