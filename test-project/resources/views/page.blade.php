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
                 
                    <th style="width: 20%">
                        status
                    </th>
                </tr>
            </thead>
            @foreach($req as $key=>$data)
            <tbody>


                <tr>
                    <td>
                    {{ url().'  $data->id'}}
                    </td>
                    <td>
                        <a>
                        {{ url().'  $data->title'}}
                        </a>
                        <br>
                     
                        {{ url().'  $data->created_At'}}
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
                              <a class="btn btn-primary btn-sm" href="/pagepublish/{{ url().'  $data->id'}}/1">
                                  Publish
                              </a>
                              @else
                              <a class="btn btn-primary btn-sm" href="/pagepublish/{{ url().'  $data->id'}}/0">
                                  Unpublish
                              </a>
                              @endif
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="pagedelete/{{ url().'  $data->id '}}">
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