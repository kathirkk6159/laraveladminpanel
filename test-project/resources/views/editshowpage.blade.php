@include('header')
                    <form action="" method="post" enctype = "multipart/form-data">
                    @csrf
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" class="text-input" value="{{ url().'$data->title '}}" required>
                        </div>
                        <div>
                            <label>Content</label>
                            <textarea name="content" id="content" value="{{ url().'$data ->content' }}"> </textarea>
                        </div>
                            <button type="submit" class="button">Add blog</button>
                        </div>
                        @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif

                    </form>

                

        <!-- JQuery -->
     
        <!-- Ckeditor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="/js/scripts.js"></script>
        <script> YourEditor.setData("{{ url().' $data->content ' }}"); </script>
