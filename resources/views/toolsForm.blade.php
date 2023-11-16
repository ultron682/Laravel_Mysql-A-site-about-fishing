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
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('store') }}" id="comment-form" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box">
                    <div class="box-body">
                        {{-- <div class="form-group{{ $errors->has('src')?'has-error':'' }}" id="roles_box">
                            <label><b>src</b></label> <br>
                            <textarea name="src" id="src" cols="20" rows="3" required></textarea>
                        </div> --}}
                        <div class="form-group{{ $errors->has('src')?'has-error':'' }}" id="roles_box">
                            <label><b>src</b></label> <br>
                            <input id="src" type="file" class="form-control" name="src">
                        </div>
                        <div class="form-group{{ $errors->has('name')?'has-error':'' }}" id="roles_box">
                            <label><b>name</b></label> <br>
                            <textarea name="name" id="name" cols="20" rows="3" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="box-footer"><button type="submit" class="btn btn-success">Utwórz</button>
                </div>
            </form>
        </div>
