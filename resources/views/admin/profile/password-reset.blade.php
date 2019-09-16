@extends('admin.layouts.profile_sidebar')

@section('profile-edit')
    <form action="{{route('password.doReset') }}" method="POST" class="horizontal-form" role="form">
        {{csrf_field() }}
        <div class="form-body">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password"
                           class="form-control form-control-solid placeholder-no-fix"
                           placeholder="Password" autocomplete="off" required/>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="password_confirmation" class="control-label">Re-type Your
                        Password</label>
                    <input type="password" name="password_confirmation"
                           class="form-control form-control-solid placeholder-no-fix"
                           placeholder="Re-type Your Password" autocomplete="off" required/>
                </div>
            </div>
        </div>
        <div class="form-body">
            <input type="submit" name="submit" class="btn btn-primary control-label" value="Submit"/>
        </div>
    </form>
@endsection