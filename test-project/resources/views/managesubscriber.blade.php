@include('header')<form>
@csrf
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                      s.no
                    </th>
                    <th style="width: 20%">
                     email
                    </th>
                 
                   
                </tr>
            </thead> 
      @foreach($req as $key=>$data)
      <tr>
            
            <td>
            {{ url().'  $key+1'}}
            </td>
            <td>
                <a>
                {{ url().'  $data->email'}}
                </a>
                <br>
                <small>
                {{ url().'  $data->created_at'}}
                </small>
            </td>
            <td class="project_progress">

</td>
<td class="project-actions text-right">
  <a class="btn btn-danger btn-sm" href="bannerdelete/{{ url().'   $data->id '}}">
      <i class="fas fa-trash">
      </i>
      Delete
  </a>
</td>
</tr>  
        
     @endforeach       </tbody>
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