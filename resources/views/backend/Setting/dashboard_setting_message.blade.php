{{-- @if ($errors->any())

<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <ul>
        @foreach ($errors->all() as $error )

           <strong><li>{{$error}}</li></strong>

        @endforeach
    </ul>
  </div>

@endif --}}


<!--For Add Setting Successfully-->
@if (session()->has('add_setting'))

<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>{{session()->get('add_setting')}}</strong>
  </div>

@endif
