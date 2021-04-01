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
                    <th style="width: 20%">
                     moblienumber
                    </th>
                 
                     
                    <th style="width: 20%">
                     message
                    </th>
                 
                    <th style="width: 20%">
                     messaged on
                    </th>
                 
                </tr>
            </thead>
            @foreach($req as $key=>$data)
      <tr>
            
            <td>
            {{ url().'$key+1'}}
            </td>
            <td>
            {{ url().'$data->email'}}
            </td>
            <td>
            {{ url().'$data->number'}}
            </td>
            <td>
            {{ url().'$data->message'}}
            </td>
            <td>
            {{ url().'$data->created_at'}}
            </td>
            <td class="project_progress">

</td>
<td class="project-actions text-right">
  <a class="btn btn-danger btn-sm" href="bannerdelete/{{ url().'$data->id' }}">
      <i class="fas fa-trash">
      </i>
      Delete
  </a>
</td>
</tr>  
        
     @endforeach       </tbody>
        </table>
    </div>
    
        
        </table>
    </div>
 
    </form>