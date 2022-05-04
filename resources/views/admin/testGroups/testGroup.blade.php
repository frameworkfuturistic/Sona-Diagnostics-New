@extends('admin.app')

@section('mycss')
<link rel="stylesheet" href="admin/assets/css/dataTables.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Edit Test Group Price</h4>
        <p></p>
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>GroupName</th>
                        <th>TestCode</th>
                        <th>Charge</th>
                        <th>ShortName</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editLabel">Edit Test Group Price</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- Edit Form -->
            <form class="forms-sample" action="{{ url('editTestGroup') }}" method="POST" id="editTestGroup">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Group Name</label>
                <input type="hidden" id="id" name="id">
                <input type="text" class="form-control1" id="groupName" name="groupName" readonly required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Price</label>
                <input type="text" class="form-control1" id="price" name="price" placeholder="Price" required>
            </div>
            <!-- Edit Form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Save changes</button>
      </div>
        </form>
        <!-- Form Close -->
    </div>
  </div>
</div>
<!-- Bootstrap Modal -->
@endsection

@section('script')
<script src="admin/assets/js/dataTables.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        getData();
    } );

    function getData() {
        $.ajax({
            type:"GET",
            url:"/testGroups",
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
                            return "<button class='btn btn-outline-primary' data-toggle='modal' data-target='#edit' data-myid=" + data + "><i class='mdi mdi-border-color'></i> Edit</button>";
                    },
                    "orderable":"false",
                    "searchable":"false",
                    "width":"50px"
                },
                {
                    "data":"GroupName"
                },
                {
                    "data":"TestCode"
                },
                {
                    "data":"Charge"
                },
                {
                    "data":"ShortName"
                }
            ],
            "columnDefs": [
                {"width":"20px", "targets":0},
                {"width":"20px", "targets":1},
                {"width":"20px", "targets":2},
                {"width":"20px", "targets":3},
                {"width":"20px", "targets":4}
            ]
        });
    }

    // Show Data On Modal
    $('#edit').on('show.bs.modal', function(e){
        var button=$(e.relatedTarget)
        var myid=button.data('myid')
        var mUrl="/testGroups/"+myid

        showModalWithData(mUrl);

    })
    // Show Data On Modal

    // Show Modal With Data
    function showModalWithData(url){
        $.ajax({
            url:url,
            type:"GET",
            cache:false,
            contentType:"application/json;charset=utf-8",
            datatype:'json',
            success:function (result){
                if(result==false){
                    alertify.error('Error! No Records Found');
                }
                else{
                    $('#id').val(result.id);
                    $('#groupName').val(result.GroupName);
                    $('#price').val(result.Charge);
                }
            }
        });
    }
    // Show Modal With Data

    // Edit Data Through ajax
    $('#editTestGroup').submit(function(e) {
        var targetform = $('#editTestGroup');
        var murl = targetform.attr('action');
        var mdata = $("#editTestGroup").serialize();
        e.preventDefault();

        $.ajax({
            url: murl,
            type: "post",
            data: mdata,
            datatype: "json",
            success: function(mdata) {
                swal({
                    title: "Good job!",
                    text: "You Updated the Price List!",
                    icon: "success",
                    button: "Ok!",
                });
                setTimeout(function(){// wait for 3 secs(2)
                    location.reload(); // then reload the page.(3)
                }, 3000);
            },
            error: function(error) {
                alert(error);
            },
        });
    });
    // Edit Data Through ajax
</script>
@endsection
