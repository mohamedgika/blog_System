@extends('layouts.backend.index')

@section('title')
Add Post
@endsection

@section('css')

@endsection

@section('after_next')
{{__('backend/dashboard_post.Add Posts')}}
@endsection

@section('next')
{{__('backend/dashboard_post.Add Posts')}}
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        @include('backend.Category.dashboard_category_massage')
        <!-- Default box -->
        <div class="card card-cyan">
          <div class="card-header">
            <h3 class="card-title">{{__('backend/dashboard_post.Add Posts')}}</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">

            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="en_title">{{__('backend/dashboard_category.Title English')}}</label>
                            <input name="en_title" type="text" id="en_title" class="form-control">
                            @error('en_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ar_title">{{__('backend/dashboard_category.Title Arabic')}}</label>
                            <input name="ar_title" type="text" id="ar_title" class="form-control">
                            @error('ar_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="en_content">{{__('backend/dashboard_category.Content English')}}</label>
                          <textarea name="en_content" class="form-control" id="en_content" cols="10" rows="3"></textarea>
                          @error('en_content')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="ar_content">{{__('backend/dashboard_category.Content Arabic')}}</label>
                        <textarea name="ar_content" class="form-control" id="ar_content" cols="10" rows="3"></textarea>
                        @error('ar_content')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="en_slug">{{__('backend/dashboard_category.Slug English')}}</label>
                            <textarea name="en_slug" class="form-control" id="en_slug" cols="10" rows="1"></textarea>
                            @error('en_slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ar_slug">{{__('backend/dashboard_category.Slug Arabic')}}</label>
                            <textarea name="ar_slug" class="form-control" id="ar_slug" cols="10" rows="1"></textarea>
                            @error('ar_slug')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="en_description">{{__('backend/dashboard_post.Description English')}}</label>
                            <textarea name="en_description" class="form-control" id="en_description" cols="10" rows="3"></textarea>
                            @error('en_description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="ar_description">{{__('backend/dashboard_setting.Description Arabic')}}</label>
                          <textarea name="ar_description" class="form-control" id="ar_description" cols="10" rows="3"></textarea>
                          @error('ar_description')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="en_summary">{{__('backend/dashboard_post.Summary English')}}</label>
                            <textarea name="en_summary" class="form-control" id="en_summary" cols="10" rows="3"></textarea>
                            @error('en_summary')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="ar_summary">{{__('backend/dashboard_post.Summary Arabic')}}</label>
                          <textarea name="ar_summary" class="form-control" id="ar_summary" cols="10" rows="3"></textarea>
                          @error('ar_summary')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('backend/dashboard_post.Category')}}</label>
                            <select class="form-control select2" style="width: 100%;" name="category_id" id="status">

                              <option selected  disabled>-- Select Category --</option>
                              @foreach ( $categories as $category )
                              <option value="{{$category->id}}">{{$category->title}}</option>
                              @endforeach

                               @error('category_id')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{__('backend/dashboard_post.Subcategory')}}</label>
                            <select class="form-control select2" style="width: 100%;" name="subcategory_id" id="subcategory_id">

                              <option selected  disabled>-- Select Subcategory --</option>

                               @error('subcategory_id')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label for="image">{{__('backend/dashboard_category.Image')}}</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                              </div>
                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                      </div>
                    </div>
                </div>

            <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="submit" value="Create" class="btn btn-block btn-outline-success">
                          </div>
                    </div>
            </div>

                </form>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
@endsection


@section('js')
<script>
$(document).ready(function(){
    $('select[name="category_id"]').on('change', function() {
        var category_id = $(this).val();
        if (category_id) {
            $.ajax({
                    url: "{{URL::to('/dashboard/post/subcategory')}}/" + category_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('select[name="subcategory_id"]').empty();
                        $('select[name="subcategory_id"]').append('<option selected disabled> -- Select Subcategory -- </option>');
                        $.each(data, function(key, value) {
                           $('select[name="subcategory_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                    });
        } else {
        console.log('Ajax not work');
        }
    });
});
// </script>
@endsection
