<div class="modal fade" id="EditUser{{$u->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit User {{$u->name}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form action="{{route('user.edit',$u->id)}}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
                    <div class="col-md">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" id="username" class="form-control" value="{{$u->name}}">
                            @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="text" id="email" class="form-control" value="{{$u->email}}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control select2" style="width: 100%;" name="status" id="status">

                            <option value="{{$u->status}}">{{$u->status}}</option>
                            <option value="writer">writer</option>
                            <option value="admin">admin</option>

                             @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </select>
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
