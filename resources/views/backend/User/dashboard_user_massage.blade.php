<!--For Add User Successfully-->
@if (session()->has('edit_user'))

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{session()->get('edit_user')}}</strong>
  </div>

@endif

<!--For Delete User Successfully-->
@if (session()->has('delete_user'))

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{session()->get('delete_user')}}</strong>
  </div>

@endif

<!--For Store User Successfully-->
@if (session()->has('store_user'))

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{session()->get('store_user')}}</strong>
  </div>

@endif
