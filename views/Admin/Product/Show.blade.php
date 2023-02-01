@extends('layouts.Adminbase')
@section('title', 'Show product'.$data->title)
    @section('content')
      <!-- Default box -->

    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <td><a href="/admin/product/edit/{{$data->id}}" class="btn btn-block btn-info btn-sm"style="width: 200px">Edit</a> </td>
                    </div>
                    <div class="col-md-3">
                        <td><a href="/admin/product/delete/{{$data->id}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are You Sure ?')"style="width: 200px">Delete</a> </td>
                        </div><!-- /.box-header -->
                   <div class="col-md-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                           <li class="breadcrumb-item">Show Product</li>
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
                        <th>Category : </th>
                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}</td>
                        {{-- <td>{{$data->category->title)}}</td> --}}
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
                        <th >Descripition :</th>
                        <td>{{$data->description}}</td>
                      </tr>
                      <tr>
                        <th >Image :</th>
                        <td>@if($data->image)
                            <img src="{{Storage::url($data->image)}}" style="height:100px">@endif</td>
                      </tr>
                      <tr>
                        <th >Detail :</th>
                        <td>{{$data->detail}}</td>
                      </tr>
                      <tr>
                        <th >Price :</th>
                        <td>{{$data->price}}</td>
                      </tr>
                      <tr>
                        <th >Quantity :</th>
                        <td>{{$data->quantity}}</td>
                      </tr>
                      <tr>
                        <th >Minquantity :</th>
                        <td>{{$data->minquantity}}</td>
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
