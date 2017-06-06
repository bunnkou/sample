@extends('layouts.default')
@section('title', '更新个人资料')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="row">
        @include('shared._errors')
        <h5>更新您的资料</h5>
        <hr>
        <div class="col-md-9">
          <form method="POST" action="{{ route('users.update', $user->id )}}">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">名称：</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
              </div>

              <div class="form-group">
                <label for="email">邮箱：</label>
                <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
              </div>

              <div class="form-group">
                <label for="password">密码：</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
              </div>

              <div class="form-group">
                <label for="password_confirmation">确认密码：</label>
                <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
              </div>

              <button type="submit" class="btn btn-primary">更新</button>
          </form>
        </div>
        <div class="col-md-3">
          <div class="gravatar_edit">
              <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="gravatar"/>
          </div>
          <div style="margin-top:20px; text-align:center;">
            <button name="button" data-toggle="modal" data-target="#modal-avatar-edit" class="btn btn-success">上传新的头像</button>
          </div>
        </div>
      </div>
 </div>
</div>

@include('users._modals_avatar')
@stop

@section('scripts')
<script>

</script>
@stop
