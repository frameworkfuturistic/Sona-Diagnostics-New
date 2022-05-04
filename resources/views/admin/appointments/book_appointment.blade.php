@extends('admin.app')

@section('mycss')
<!-- select 2 -->
<link rel="stylesheet" href="admin/assets/vendors/select2/select2.min.css">
<link rel="stylesheet" href="admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
<!-- select 2 -->
@endsection

@section('content')
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
<!-- error msg -->
<div class="card">
    <div class="card-body">
        <h4 class="card-title"><i class="mdi mdi-account-plus"></i> Book Home Collections</h4>
        <form action="{{ url('appointment') }}" method="post" role="form" class="php-email-form" data-aos="fade-up"
                data-aos-delay="100">
                @csrf
                @method('post')
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control1" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control1" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control1" name="phone" id="phone" placeholder="Your Phone"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="date" name="date" class="form-control1 datepicker" id="date"
                            placeholder="Appointment Date" required>
                    </div>
                </div>
                <div class="row">
                
                    <div class="col-md-10 form-group mt-3">
                        <label for="testGroup">Select Test Group</label>
                        <select name="testGroup[]" id="testGroup" class="form-select form-control1 js-example-basic-multiple" multiple="multiple">
                            <option value="" disabled>Select Test Group</option>
                            @foreach($testGroups as $testGroup)
                            <option data-price="{{$testGroup->Charge}}" value="{{$testGroup->GroupName}}">{{$testGroup->GroupName}} ({{$testGroup->Charge}} ₹)</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 form-group mt-3">
                        <label for="Total Price">Total</label>
                        <input class="form-control" type="text" name="opt_price" id="opt_price" value="0" readonly style="color:black;"/>
                    </div>

                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control1" name="message" id="message" rows="5"
                        placeholder="Message (Optional)"></textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Book Test</button>
                </div>
            </form>
    </div>
</div>
@endsection

@section('script')
<script src="admin/assets/vendors/select2/select2.min.js"></script>
<script src="admin/assets/js/select2.js"></script>

<script>
    $(document).ready(function() {
    $('#testGroup').on('change', function() {
    $('#opt_price').val(valueFunction());
  });
});

function valueFunction(quan){
    var $selection = $('#testGroup').find(':selected');
    // var total=0;
    var total=document.getElementById("opt_price").value;
    var grandTotal=0;
    $selection.each(function(){
        var price=$(this).data('price');
        grandTotal=(-total-price);
    })
    return (-grandTotal);
}
</script>
@endsection
