@extends('user.app')

@section('page-content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<!-- error msg -->
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <section id="my_appointment" class="my_appointment">
        <div class="section-title">
            <h2>My Appointments</h2>
        </div>
        <!-- Table -->
        <div class="container">
                <div class="row">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message Status</th>
                        <th scope="col">Delete Appointments</th>
                        <th scope="col">See Lab Report</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                        @foreach($appoints as $appoint)
                        <tr>
                            <th scope="row"><?php echo $count; ?></th>
                            <td>{{$appoint->name}}</td>
                            <td>{{$appoint->date}}</td>
                            <td><span class="badge bg-success">{{$appoint->status}}</span></td>
                            <td>
                                <form action="{{ url('deleteappointment',$appoint->id) }}" method="post" onclick="return deleteconfirm('{{$appoint->name}}','{{$appoint->date}}');">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Cancel</button>
                                </form>
                            </td>
                            <td>
                                <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                        <?php $count++; ?>
                        @endforeach
                </tbody>
            </table>
                </div>
            </div>
        <!-- Table -->
    </section>
@endsection

@section('page-script')
<script>
      function deleteconfirm(name,scedule){
          $getcnf=confirm("Are You Sure to delete the appointment "+name+" Scedule On "+scedule);
          if($getcnf==true){
              return true;
          }
          else{
              return false;
          }
      }
  </script>
@endsection