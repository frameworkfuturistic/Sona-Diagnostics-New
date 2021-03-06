@extends('admin.app')

@section('mycss')
<link rel="stylesheet" href="admin/assets/css/dataTables.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Appointment's Completed Report</h4>
        <p></p>
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th colspan="2">Action</th>
                        <th>Mail</th>
                        <th>Status</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>TestGroup</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td colspan="2"> 
                                <button class="btn btn-success btn-sm" onclick="window.location.href='api/generateReport/{{$appointment->id}}'">Generate Report</button>
                                <button class="btn btn-danger btn-sm" onclick="window.location.href=''"><i class="mdi mdi-cloud-print"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-info btn-warning" onclick="window.location.href='mail_patient/{{$appointment->id}}'"><i class="mdi mdi-mail"></i></button>
                            </td>
                            <td><span class="badge badge-info badge-pill">{{$appointment->status}}</span></td>
                            <td>{{$appointment->name}}</td>
                            <td>{{$appointment->email}}</td>
                            <td>{{$appointment->phone}}</td>
                            <td>{{$appointment->testGroup}}</td>
                            <td>{{$appointment->date}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="admin/assets/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );
</script>
@endsection
