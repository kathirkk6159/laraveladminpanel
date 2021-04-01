@include('header')<form>
@csrf
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        label
                    </th>
                    <th style="width: 20%">
                        Title
                    </th>
                    <th style="width: 30%">
                        images
                    </th>
                    <th style="width: 20%">
                        status
                    </th>
                </tr>
            </thead>
      @foreach($req as $key=>$data)
            <tbody>


                <tr>
                    <td>
                    {{ url().'$data->id'}}
                    </td>
                    <td>
                        <a>
                        {{ url().'$data->title'}}
                        </a>
                        <br>
                        <small>
                        {{ url().'$data->created_at'}}
                        </small>
                    </td>
                
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img src="{{ url().'('storage/'.$data->image)'}}" style="width:300px; height:200px" >
                            </li>

                        </ul>
                    </td>

              
                   
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="bannerdelete/{{ url().' $data->id '}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>  
                 @endforeach
            </tbody>
        </table>
    </div>
 
    </form>