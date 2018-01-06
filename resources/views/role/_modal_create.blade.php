<!-- form create role -->
<div class="modal fade" id="myModal-AddRole" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.role.create.submit') }}" method="post" role="form">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Role</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Role name: <span class="text text-danger"><i class="fa fa-asterisk"></i></span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Role name: Admin" required="required" minlength="3" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description: </label>
                        <textarea name="description" id="description" class="form-control" placeholder="Description detail:......">{{ old('description') }}</textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ./form create role -->