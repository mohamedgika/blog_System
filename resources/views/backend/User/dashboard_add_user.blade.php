<div class="modal fade" id="AddUser">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{__('backend/dashboard_user.Add User')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                    <div class="col-md">
                        <div class="form-group">
                            <label for="name" class="text-md">{{__('backend/dashboard_user.Name')}}</label>
                            <input name="name" type="text" id="name" class="form-control">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="email" class="text-md">{{__('backend/dashboard_user.Email')}}</label>
                            <input name="email" type="text" id="email" class="form-control">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="password" class="text-md">{{__('backend/dashboard_user.Password')}}</label>
                            <input name="password" type="text" id="password" class="form-control">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                          <label for="status" class="text-md">{{__('backend/dashboard_user.Status')}}</label>
                          <select class="form-control select2" id="status" style="width: 100%;" name="status">

                            <option selected disabled>-- Select Status --</option>
                            <option value="writer">{{__('backend/dashboard_user.writer')}}</option>
                            <option value="admin">{{__('backend/dashboard_user.admin')}}</option>

                          </select>
                          @error('status')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          </div>
                    </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{__('backend/dashboard_user.Close')}}</button>
                    <input type="submit" class="btn btn-primary" value="{{__('backend/dashboard_user.Add')}}">
                  </div>
            </form>

        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
