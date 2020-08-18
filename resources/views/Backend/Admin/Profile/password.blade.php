@extends('Backend.layouts.main')
@section('title', '|| Password Change')
@section('head_name', 'Password Change')
@section('content')

<div class="modal-dialog">
	<br><br><br><br><div><h4 style="text-align: center; font-family: cursive;">Password Updated</h4></div>
        <div class="modal-body">
        	
            <div class="panel-body">
                <div class="form-group has-feedback">
                    <label for="password">Password</label>
                    <input id="c_password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Current Password">
                    <span class="icon"></span>
                </div>
                <br>

                <div class="form-group has-feedback">
                    <label for="password-confirm">New Password</label>
                    <input id="n_password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="New Password" disabled>
                    <span class="r-icon"></span>
                </div>
                <br>

                <div class="form-group has-feedback">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="r_password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Confirm Password" disabled>
                    <span class="r-icon"></span>
                </div>
                <br>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('backend_assets/js/password.js')}}"></script>
@endsection