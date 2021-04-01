@include('header')
                    <form action="{{ url().'addnewpage'}}" method="post" enctype = "multipart/form-data">
                    @csrf
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" class="text-input" required>
                        </div>
                        <div>
                            <label>Content</label>
                            <textarea name="content" id="content"></textarea>
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
        <script src="js/scripts.js"></script>
