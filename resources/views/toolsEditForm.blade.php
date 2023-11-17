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

    <form role="form" id="comment-form" method="post" action="{{ route('tools.update', $tool) }}"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <div class="box">
            <div class="box-body">

                <div class="form-group{{ $errors->has('src')?'has-error':'' }}" id="roles_box">
                    <label><b>src</b></label> <br>
                    <img src="{{ Storage::disk('toolsImgs')->url($tool->src) }}" alt="{{ $tool->name }}" class="card-img-top">
                </div>

                <div class="form-group{{ $errors->has('src')?'has-error':'' }}" id="roles_box">
                    <label><b>Wybierz nową grafikę</b></label> <br>
                    <input id="src" type="file" class="form-control" name="src">
                </div>
                <div class="form-group{{ $errors->has('name')?'has-error':'' }}" id="roles_box">
                    <label><b>name</b></label> <br>
                    <textarea name="name" id="name" cols="20" rows="3" required>{{ $tool->name }}</textarea>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Zapisz zmiany</button>
        </div>
    </form>




</div>
