<!--For Add Setting Successfully-->
@if (session()->has('add_category'))

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{session()->get('add_category')}}</strong>
  </div>

@endif
