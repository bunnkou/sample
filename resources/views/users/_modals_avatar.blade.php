<div class="modal fade" id="modal-avatar-edit" role="dialog">
  <form method="POST" enctype="multipart/form-data" action="{{ route('avatar') }}">
    {{ csrf_field() }}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          更换头像
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <div class="gravatar_edit" style="margin-bottom:30px;">
            <img src="{{ \Auth::user()->avatar }}" class="img-circle" style="width: 150px;height: 150px;" alt="">
          </div>
            <div class="form-group" style="text-align:center;">
              <input type="file" name="avatar" style="border:0px; width:250px;">
            </div>
        </div><!-- /.modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
          <button type="submit" class="btn btn-primary">上传</button>
        </div><!-- /.modal-footer -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal -->
  </form>
</div>
