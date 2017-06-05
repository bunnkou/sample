@extends('layouts.default')

@section('content')
<div class="col-md-offset-2 col-md-8">
  @include('shared._errors')
  <div class="gravatar_edit" style="margin-bottom:30px;">
    <img src="{{ \Auth::user()->avatar }}" class="img-circle" style="width: 150px;height: 150px;" alt="">
  </div>
  <form method="POST" action="{{ route('avatar') }}">
    {{ csrf_field() }}
    <div class="form-group">
      <input type="file" name="avatar">
    </div>
    <button type="submit" class="btn btn-primary">更换头像</button>
  </form>
</div>
@stop
