@extends('admin.layouts.profile_sidebar')
@section('profile-edit')
        <form action="{{route('profile.update') }}" method="POST"
              class="horizontal-form" role="form">
            {{csrf_field() }}

            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" value="{{$user->name}}" name="name"
                       class="form-control"/></div>
            <div class="form-group">
                <label class="control-label">Email</label>
                <input type="email" value="{{$user->email}}" name="email"
                       class="form-control"/></div>
            <div class="form-group">
                <label class="control-label">Mobile Number</label>
                @if(isset($user->userInfo->phone))
                    <input type="text" value="{{$user->userInfo->phone}}" name="phone"
                           placeholder="+1 646 580 DEMO (6284)" class="form-control"/>
                @else
                    <input type="text" placeholder="+1 646 580 DEMO (6284)" name="phone"
                           class="form-control"/>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label">Occupation</label>
                @if(isset($user->userInfo->occupation))
                    <input type="text" value="{{$user->userInfo->occupation}}"
                           placeholder="Web Developer" name="occupation"
                           class="form-control"/>

                @else
                    <input type="text" placeholder="Web Developer" name="occupation"
                           class="form-control"/>
                @endif
            </div>

            <div class="form-group">
                <label for="about" class="control-label">About</label>
                @if(isset($user->userInfo->about))
                    <textarea class="form-control" rows="3" name="about" id="about"
                              placeholder="I'm awesome!!!">{{$user->userInfo->about}}</textarea>
                @else
                    <textarea class="form-control" rows="3" name="about"
                              placeholder="I'm awesome!!!"></textarea>
                @endif
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary control-label"
                       value="Save Changes"/>
            </div>
        </form>

@endsection