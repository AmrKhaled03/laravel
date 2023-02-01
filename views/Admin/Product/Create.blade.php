@extends('layouts.Adminbase')
@section('title', 'Add product')
@section('head')
 <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
@endsection

    @section('content')
      <!-- Default box -->

    <div class="content-wrapper">
        <section class="content">
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Add Product</h3>
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
                <form role="form" action="/admin/product/store" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                          <label>Parent Category</label>
                          <select name="category_id" class="form-control select2">
                              <option value="0" selected="selected">Related Category</option>
                              @foreach ($data as $rs)
                                  <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                  </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Keywords</label>
                          <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                        </div>
                    </div>
                        <div class="box-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Description</label>
                              <input type="text" class="form-control" name="description" placeholder="Descripition">
                            </div>
                        </div>


                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="custom-file">
                            <input type="file"  class="custom-file-input" name="image">
                            <label for="exampleInputFile" class="custom-file-label"> Choose image file</label>
                        </div>


                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Detail</label>
                          <textarea class="form-control" name="detail" id="detail" ></textarea>
                          <script>
                          ClassicEditor
                          .create( document.querySelector( '#detail' ) )
                          .then( editor => {
                                  console.log( editor );
                          } )
                          .catch( error => {
                                  console.error( error );
                          } );
                        </script>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Price</label>
                          <input type="number" class="form-control" name="price" value="0">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Quantity</label>
                          <input type="number" class="form-control" name="quantity" value="0">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Minquantity</label>
                          <input type="number" class="form-control" name="minquantity" value="0">
                        </div>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>

            </section>
            </div>

@endsection
