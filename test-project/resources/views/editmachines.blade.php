@include('header')
<form method="post" action="" enctype="multipart/form-data">
@csrf
    <div class="card-body">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control"value="{{ url().' $req->title '}}" id="titile" name="title" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                <img  src="{{ url().'('storage/'.$req->image)'}}">
                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile" style="background-color:red;">*preferred
                        image is 1350px to 450px</label>
                </div>

                <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="thumbimage[]" id="exampleInputFile" multiple="multiple">
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