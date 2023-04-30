<div class="modal fade" id="EditCategory{{$category->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Category {{$category->title}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form action="{{route('category.edit',$category->id)}}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="en_title">{{__('backend/dashboard_category.Title English')}}</label>
                        <input name="en_title" type="text" id="en_title" class="form-control" value="{{$category->getTranslation('title','en')}}">
                        @error('en_title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ar_title">{{__('backend/dashboard_category.Title Arabic')}}</label>
                        <input name="ar_title" type="text" id="ar_title" class="form-control" value="{{$category->getTranslation('title','ar')}}">
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
                      <textarea name="en_content" class="form-control" id="en_content" cols="10" rows="3">{{$category->getTranslation('content','en')}}</textarea>
                      @error('en_content')
                      <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="ar_content">{{__('backend/dashboard_category.Content Arabic')}}</label>
                    <textarea name="ar_content" class="form-control" id="ar_content" cols="10" rows="3">{{$category->getTranslation('content','ar')}}</textarea>
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
                        <textarea name="en_slug" class="form-control" id="en_slug" cols="10" rows="3">{{$category->getTranslation('slug','en')}}</textarea>
                        @error('en_slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ar_slug">{{__('backend/dashboard_category.Slug Arabic')}}</label>
                        <textarea name="ar_slug" class="form-control" id="ar_slug" cols="10" rows="3">{{$category->getTranslation('slug','ar')}}</textarea>
                        @error('ar_slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="image">{{__('backend/dashboard_category.Image')}}</label>
                        <div class="input-group">
                            <img src="{{URL::asset('imgs/'.$category->image)}}" width="50px" height="50px"><br>
                          <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image">{{$category->image}}<label>
                          </div>
                        </div>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                  </div>
                </div>
            </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Update">
                  </div>
            </form>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
