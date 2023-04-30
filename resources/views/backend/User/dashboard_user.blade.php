@extends('layouts.backend.index')

@section('title')
{{__('backend/dashboard_setting.| User')}}
@endsection

@section('css')

@endsection

@section('after_next')
{{__('backend/dashboard_user.Users')}} <input type="submit" class="btn btn-success ml-3" value="{{__('backend/dashboard_user.Add User')}}" data-toggle="modal" data-target="#AddUser">
@include('backend.User.dashboard_add_user')
@endsection

@section('next')
{{__('backend/dashboard_user.Users')}}
@endsection


@section('content')
    <!-- Main content -->
    <section class="content">
        @include('backend.User.dashboard_user_massage')
        <!-- Default box -->
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">{{__('backend/dashboard_user.Users')}}</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!--card-body -->
          <div class="card-body">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5%">
                                #
                            </th>
                            <th style="width: 15%">
                                {{__('backend/dashboard_user.Username')}}
                            </th>
                            <th style="width: 20%">
                                {{__('backend/dashboard_user.Email')}}
                            </th>
                            <th>
                                {{__('backend/dashboard_user.Date Registered')}}
                            </th>
                            <th style="width: 30%" class="text-center">
                                {{__('backend/dashboard_user.Status')}}
                            </th>
                            <th style="width: 40%">
                                {{__('backend/dashboard_user.Action')}}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $user as $u )
                        <tr>
                            <td>#</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->created_at}}</td>
                            <td class="project-state"><span class="badge {{$u->status == 'writer' ? 'badge-success' : 'badge-danger'}}">{{$u->status == 'writer' ? __('backend/dashboard_user.writer') : __('backend/dashboard_user.admin')}}</span></td>
                            <td class="project-actions">
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#EditUser{{$u->id}}">
                                    <i class="fas fa-pencil-alt"></i>
                                    {{__('backend/dashboard_user.Edit')}}
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteUser{{$u->id}}">
                                    <i class="fas fa-trash"></i>
                                    {{__('backend/dashboard_user.Delete')}}
                                </button>
                            </td>
                        </tr>
                        @include('backend.User.dashboard_edit_user')
                        @include('backend.User.dashboard_delete_user')
                        @endforeach
                    </tbody>
                </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
@endsection


@section('js')

@endsection

