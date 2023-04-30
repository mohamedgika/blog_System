@extends('layouts.backend.index')

@section('title')
{{__('backend/dashboard_setting.| Post')}}
@endsection

@section('css')
@include('backend.Post.dashboard_head_post')
@endsection

@section('after_next')
{{__('backend/dashboard_post.Post')}}
<a href="{{route('post.create')}}"><input type="submit" class="btn btn-success ml-3" value="{{__('backend/dashboard_post.Add Posts')}}"></a>
@endsection

@section('next')
{{__('backend/dashboard_post.Post')}}
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-dark">
          <div class="card-header">
            <h3 class="card-title">{{__('backend/dashboard_post.Post')}}</h3>

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

            <table id="example2" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>{{__('backend/dashboard_post.title')}}</th>
                        <th>{{__('backend/dashboard_post.category')}}</th>
                        <th>{{__('backend/dashboard_post.subcategory')}}</th>
                        <th>{{__('backend/dashboard_post.content')}}</th>
                        <th>{{__('backend/dashboard_post.description')}}</th>
                        <th>{{__('backend/dashboard_post.summary')}}</th>
                        <th>{{__('backend/dashboard_post.slug')}}</th>
                        <th>{{__('backend/dashboard_post.image')}}</th>
                        <th>{{__('backend/dashboard_post.created at')}}</th>
                        @can('view',$posts)
                        <th>{{__('backend/dashboard_post.action')}}</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>

                  @foreach ($posts as $post)
                    <tr>
                        <td>{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $post->getTranslation('title','en') : $post->getTranslation('title','ar') }}</td>
                        <td><a href="{{route('category.index')}}">{{$post->categories->title}}</a></td>
                        <td><a href="{{route('subcategory.index')}}">{{$post->subcategories->title}}</a></td>
                        <td>{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $post->getTranslation('content','en') : $post->getTranslation('content','ar') }}</td>
                        <td>{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $post->getTranslation('description','en') : $post->getTranslation('description','ar') }}</td>
                        <td>{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $post->getTranslation('summary','en') : $post->getTranslation('summary','ar') }}</td>
                        <td>{{LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $post->getTranslation('slug','en') : $post->getTranslation('slug','ar') }}</td>
                        <td><img src="{{URL::asset('imgs/'.$post->image)}}" width="50px" height="50px" alt=""></td>
                        <td>{{$post->created_at}}</td>

                        {{-- post policy view --}}
                        @can('view', $posts)
                        <td>
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#EditCategory">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteCategory">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                        @endcan

                    </tr>
                  @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>{{__('backend/dashboard_post.title')}}</th>
                        <th>{{__('backend/dashboard_post.category')}}</th>
                        <th>{{__('backend/dashboard_post.subcategory')}}</th>
                        <th>{{__('backend/dashboard_post.content')}}</th>
                        <th>{{__('backend/dashboard_post.description')}}</th>
                        <th>{{__('backend/dashboard_post.summary')}}</th>
                        <th>{{__('backend/dashboard_post.slug')}}</th>
                        <th>{{__('backend/dashboard_post.image')}}</th>
                        <th>{{__('backend/dashboard_post.created at')}}</th>
                        @can('view',$posts)
                        <th>{{__('backend/dashboard_post.action')}}</th>
                        @endcan
                    </tr>
                </tfoot>
            </table>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
@endsection


@section('js')
@include('backend.Post.dashboard_end_post')
@endsection
