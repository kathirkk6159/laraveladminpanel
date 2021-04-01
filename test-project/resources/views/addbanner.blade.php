@include('header')
<form method="post" action="{{ url().'addnewbanner '}}" enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="titile" name="title" placeholder="Enter email" required>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile" required>
                    <label class="custom-file-label" for="exampleInputFile" style="background-color:red;">*preferred
                        image is 1350px to 450px</label>
                </div>


            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">upload</button>
                </div>
                @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif

</form>