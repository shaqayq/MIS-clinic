<div class="active tab-pane" id="salary">
 <div class="post">
            <div class="card-body">
              <table id="#" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>نام</th>
                  <th>تخلص</th>
                  <th>شماره تماس</th>
                  <th>وظیفه</th>
                  <th>پرداخت معاشات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($salary as $s)
                <tr>
                  <td>{{$s->e_name}}</td>
                  <td>{{$s->last_name}}</td>
                  <td>{{$s->e_phone}}</td>
                  <td>{{$s->Pr_name}}</td>   
                  <td>
                    <div class="btn-group btn-group-xs" >
                        <a href="{{ route('salary.show', $s->id) }}" class="btn btn-sm btn-success"><i class="fa fa-money"></i></a>
                     </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
  </div>
</div>