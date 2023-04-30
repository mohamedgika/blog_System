@extends('layouts.backend.index')

@section('title')
{{__('backend/dashboard_setting.| Setting')}}
@endsection

@section('css')
@include('backend.Setting.dashboard_setting_head')
@endsection

@section('after_next')
{{__('backend/dashboard_setting.Setting')}}
@endsection

@section('next')
{{__('backend/dashboard_setting.Setting')}}
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">

        @include('backend.Setting.dashboard_setting_message')

        <!-- /.row -->
        <div class="row">
            <!-- column -->
            <div class="col">
              <!-- card -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">{{__('backend/dashboard_main_sidbar.Setting')}}</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>

                <!--card-body -->
              <div class="card-body">

                <form action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="en_title">{{__('backend/dashboard_setting.Title English')}}</label>
                            <input name="en_title" type="text" id="en_title" class="form-control">
                            @error('en_title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ar_title">{{__('backend/dashboard_setting.Title Arabic')}}</label>
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
                          <label for="en_content">{{__('backend/dashboard_setting.Content English')}}</label>
                          <textarea name="en_content" class="form-control" id="en_content" cols="10" rows="3"></textarea>
                          @error('en_content')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="ar_content">{{__('backend/dashboard_setting.Content Arabic')}}</label>
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
                            <label for="en_description">{{__('backend/dashboard_setting.Description English')}}</label>
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
                            <label for="logo">{{__('backend/dashboard_setting.Logo')}}</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input name="logo" type="file" class="custom-file-input" id="logo">
                                <label class="custom-file-label" for="logo">Choose file</label>
                              </div>
                            </div>
                            @error('logo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="favicon">{{__('backend/dashboard_setting.Favicon')}}</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input name="favicon" type="file" class="favicon" id="favicon">
                                <label class="custom-file-label" for="favicon">Choose file</label>
                              </div>
                            </div>
                            @error('favicon')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="facebook">{{__('backend/dashboard_setting.Facebook')}}</label>
                            <input name="facebook" type="text" id="facebook" class="form-control">
                            @error('facebook')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="twitter">{{__('backend/dashboard_setting.Twitter')}}</label>
                            <input name="twitter" type="text" id="twitter" class="form-control">
                            @error('twitter')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="instagram">{{__('backend/dashboard_setting.Instagram')}}</label>
                            <input name="instagram" type="text" id="instagram" class="form-control">
                            @error('instagram')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="linkedin">{{__('backend/dashboard_setting.Linkedin')}}</label>
                            <input name="linkedin" type="text" id="linkedin" class="form-control">
                            @error('linkedin')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="submit" value="Create" class="btn btn-block btn-outline-danger">
                          </div>
                    </div>
                </div>

                </form>
               </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.column -->
        </div>
        <!-- /.row -->

        <!--==============================================================================================================================================-->

        <!-- /.row -->
        <div class="row">
            <!-- column -->
            <div class="col">
              <!-- card -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">{{__('backend/dashboard_setting.Show Setting')}}</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>

                <!--card-body -->
              <div class="card-body">

                <table id="example2" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{__('backend/dashboard_setting.title')}}</th>
                            <th>{{__('backend/dashboard_setting.content')}}</th>
                            <th>{{__('backend/dashboard_setting.description')}}</th>
                            <th>{{__('backend/dashboard_setting.logo')}}</th>
                            <th>{{__('backend/dashboard_setting.favicon')}}</th>
                            <th>{{__('backend/dashboard_setting.facebook')}}</th>
                            <th>{{__('backend/dashboard_setting.instagram')}}</th>
                            <th>{{__('backend/dashboard_setting.twitter')}}</th>
                            <th>{{__('backend/dashboard_setting.linkedin')}}</th>
                        </tr>
                    </thead>
                    <tbody>

                      @foreach ($setting as $set)
                        <tr>
                            <td>{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $set->getTranslation('title','en') : $set->getTranslation('title','ar') }}</td>
                            <td><textarea class="disable" cols="10" rows="2" disabled>{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $set->getTranslation('content','en') : $set->getTranslation('content','ar') }}</textarea></td>
                            <td><textarea class="disable" cols="10" rows="2" disabled>{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $set->getTranslation('description','en') : $set->getTranslation('description','ar') }}</textarea></td>
                            <td><img src="{{URL::asset('imgs/'.$set->logos)}}" width="50px" height="50px" alt=""></td>
                            <td><img src="{{URL::asset('imgs/'.$set->favicon)}}" width="50px" height="50px" alt=""></td>
                            <td>{{$set->facebook == true ? $set->facebook : 'facebook not found'}}</td>
                            <td>{{$set->instegram == true ? $set->instegram : 'instagram not found'}}</td>
                            <td>{{$set->twitter == true ? $set->twitter : 'twitter not found'}}</td>
                            <td>{{$set->linkedin == true ? $set->linkedin : 'linkedin not found'}}</td>
                        </tr>
                      @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>{{__('backend/dashboard_setting.title')}}</th>
                            <th>{{__('backend/dashboard_setting.content')}}</th>
                            <th>{{__('backend/dashboard_setting.description')}}</th>
                            <th>{{__('backend/dashboard_setting.logo')}}</th>
                            <th>{{__('backend/dashboard_setting.favicon')}}</th>
                            <th>{{__('backend/dashboard_setting.facebook')}}</th>
                            <th>{{__('backend/dashboard_setting.instagram')}}</th>
                            <th>{{__('backend/dashboard_setting.twitter')}}</th>
                            <th>{{__('backend/dashboard_setting.linkedin')}}</th>
                        </tr>
                    </tfoot>
                </table>

               </div>
                <!-- /.card-body -->

              </div>
              <!-- /.card -->
            </div>
            <!-- /.column -->
        </div>
        <!-- /.row -->


    </section>
      <!-- /.content -->
@endsection


@section('js')
@include('backend.Setting.dashboard_setting_script')
@endsection

