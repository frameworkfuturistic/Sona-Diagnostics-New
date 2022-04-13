@extends('admin.app')

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
        <h4 class="card-title"><i class="mdi mdi-account-plus"></i> Add Collection Centers</h4>
        <form class="forms-sample" action="{{ url('add_CC') }}" method="POST" id="submit">
            @csrf 
            <div class="form-group">
                <label for="exampleInputName1">Collection Center Name</label>
                <input type="text" class="form-control1" id="name" name="name" placeholder="Collection Center Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email</label>
                <input type="text" class="form-control1" id="email" name="email" placeholder="Collection Center Email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Phone</label>
                <input type="text" class="form-control1" id="phone" name="phone" placeholder="Phone No" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Address</label>
                <input type="text" class="form-control1" id="address" name="address" placeholder="Address" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Create Password</label>
                <input type="password" class="form-control1" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Confirm Password</label>
                <input type="password" class="form-control1" id="password1" name="password1" placeholder="Password" required>
                <input type="hidden" class="form-control1" id="userType" name="userType" value="2">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#submit').submit(function(){
        var getPass=document.getElementById('password').value;
        var getPass1=document.getElementById('password1').value;
        if(getPass!=getPass1){
            alert("Passwords not Matched");
            return false;
        }
        else{
            return true;
        }
    });
</script>
@endsection
