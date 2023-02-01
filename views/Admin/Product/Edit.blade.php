@extends('layouts.Adminbase')
@section('title', 'Edit product'.$data->title)
    @section('content')
      <!-- Default box -->

    <div class="content-wrapper">
        <section class="content">
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Edit Product :  {{$data->title}}</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
              </div>



             <!-- Right side column. Contains the navbar and content of the page -->

                <div class="box-header">
                  <h3 class="box-title">Product Elements</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/admin/product/update/{{$data->id}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                          <label>Parent Category</label>
                          <select name="category_id" class="form-control select2" value="{{$data->category_id}}">
                              <option value="0" selected="selected">Related Category</option>
                              @foreach ($datalist as $rs)
                                  <option value="{{$rs->id}}" @if ($rs->id==$data->category_id) selected="selected" @endif>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}
                                </option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Title" value="{{$data->title}}">
                    </div>
                  </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Keywords</label>
                          <input type="text" class="form-control" name="keywords" placeholder="Keywords" value="{{$data->keywords}}">
                        </div>
                    </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Description</label>
                              <input type="text" class="form-control" name="description" placeholder="Descripition"value="{{$data->description}}">
                            </div>
                        </div>


                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="custom-file">
                            <input type="file"  class="custom-file-input" name="image"value="{{$data->img}}">
                            <label for="exampleInputFile" class="custom-file-label"> Choose image file</label>
                        </div>


                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Detail</label>
                          <textarea class="form-control" name="detail" >{{$data->detail}}</textarea>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Price</label>
                          <input type="number" class="form-control" name="price" value="{{$data->price}}">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Quantity</label>
                          <input type="number" class="form-control" name="quantity"value="{{$data->quantity}}">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Minquantity</label>
                          <input type="number" class="form-control" name="minquantity" value="{{$data->minquantity}}">
                        </div>
                    </div>




                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                  </div>
                </form>
              </div>

            </section>
            </div>

@endsection
