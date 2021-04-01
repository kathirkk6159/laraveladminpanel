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
                    {{ url().'$key+1'}}
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
                        
                          
                    <span class="badge badge-fail">  @if($data->publish==0)
                          Unpublished
                          @else
                          
                              Published
                          
                          @endif</span>
                          
                      </td>
                      <td class="project_progress">

                      </td>
                      <td class="project-actions text-right">
                          @if($data->publish==0)
                          <a class="btn btn-primary btn-sm" href="/bannerpublish/{{ url().'$data->id'}}/1">
                              Publish
                          </a>
                          @else
                          <a class="btn btn-primary btn-sm" href="/bannerpublish/{{ url().'$data->id'}}/0">
                              Unpublish
                          </a>
                          @endif
                        
                        <a class="btn btn-info btn-sm" href="editshow/{{ url().'$data->id'}}">
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
    @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
    </form>