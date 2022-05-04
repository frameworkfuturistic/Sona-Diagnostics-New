@extends('admin.app')

@section('mycss')
<link rel="stylesheet" href="admin/assets/css/dataTables.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Appointment's Approved Report</h4>
        <p></p>
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Mail</th>
                        <th></th>
                        <th>Status</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>TestGroup</th>
                        <th>Date</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="admin/assets/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        getData();
    } );

    function getData(){
        $.ajax({
            type:"GET",
            url:"/getApprovedReport",
            contentType:"application/json;",
            success: function(results){
                showData(results);
            }
        })
    }

    function showData(data){
        $('#dataTable').DataTable({
            "data":data,
            "processing":true,
            "method":"GET",
            "columns":[
                {
                   "title":"Action",
                   "data":"id",
                   "render":function(data){
                            return "<button class='btn btn-success btn-sm' onclick='report(" + data + ");'><i class='fa fa-solid fa-thumbs-up'></i>Report</button>&nbsp;<button class='btn btn-danger btn-sm' onclick='cancel(" + data +");'><i class='fa fa-solid fa-ban'></i> Cancel</button>"
                    }
                },
                {
                   "data":"id",
                   "render":function(data){
                            return "<button class='btn btn-warning btn-sm' onclick='mail_patient(" + data + ");'><i class='fa fa-envelope'></i> Mail</button>"
                    }
                },
                {
                    "data":"phone",
                    "render":function(data){
                        return "<button class='btn btn-success btn-sm' onclick='whatsapp(" + data + ");'><i class='fa fa-phone'></i></button>"
                    }
                },
                {
                    "data":"status",
                    "render":function(data){
                        return "<span class='badge badge-info badge-pill'>" + data + "</span>"
                    }
                },
                {
                    "data":"name"
                },
                {
                    "data":"email"
                },
                {
                    "data":"phone"
                },
                {
                    "data":"testGroup"
                },
                {
                    "data":"date"
                }
            ]
        });
    }

    function report(id){
        window.location.replace('api/generateReport/'+id);
    }

    function cancel(id){
        $getcnf=confirm("Are You Sure to delete the appointment");
          if($getcnf==true){
                window.location.replace('cancel_patient/'+id);
          }
          else{
              return false;
          }
    }

    function mail_patient(id){
        window.location.replace('mail_patient/'+id);
    }

    function whatsapp(id){
        window.open('https://web.whatsapp.com/send?phone=' + id + '','_blank');
    }
</script>
@endsection
