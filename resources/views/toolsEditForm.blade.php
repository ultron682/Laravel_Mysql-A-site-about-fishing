@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="box box-primary ">

    <form role="form" id="comment-form" method="post" action="{{ route('update', $tool) }}">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <div class="box">
            <div class="box-body">
                <div class="form-group{{ $errors->has('src')?'has-error':'' }}" id="roles_box">
                    <label><b>src</b></label> <br>
                    <textarea name="src" id="src" cols="20" rows="3" required>{{ $tool->src }}</textarea>
                </div>
                <div class="form-group{{ $errors->has('name')?'has-error':'' }}" id="roles_box">
                    <label><b>name</b></label> <br>
                    <textarea name="name" id="name" cols="20" rows="3" required>{{ $tool->name }}</textarea>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Zapisz</button>
        </div>
    </form>




</div>
