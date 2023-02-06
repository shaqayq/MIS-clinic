 <div class="tab-pane" id="salaryHistory">
           <div class="post">
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>نام</th>
                  <th>تخلص</th>
                  <th>وظیفه</th>
                  <th>مجموع</th>
                  <th>پرداخت</th>
                  <th>باقی</th>
                  <th>تاریخ پرداخت</th>
                  <th>جزییات</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($h_salary as $h)
                    <tr>
                      <td>{{$h->e_name}}</td>
                      <td>{{$h->last_name}}</td>
                      <td>{{$h->Pr_name}}</td> 
                       <td>{{$h->total}}</td>
                      <td>{{$h->cash}}</td>
                      <td>{{$h->loan}}</td>
                      <td>{{$h->date}}</td>  
                      <td>
                        <div class="btn-group btn-group-xs" >
                            <a href="detail/{{$h->emp_id}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                         </div>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
  </div>
 </div>

                 