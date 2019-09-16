@extends('admin.layouts.profile_sidebar')

@section('profile-edit')
    <form action="{{route('profile.pic.update') }}" method="POST" class="horizontal-form" role="form"
          enctype="multipart/form-data">
        {{csrf_field() }}
        <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/></div>
                <div class="fileinput-preview fileinput-exists thumbnail"
                     style="max-width: 200px; max-height: 150px;"></div>
                <div>
                                                        <span class="btn default btn-file">
                                                            <span class="fileinput-new"> Select image </span>
                                                            <span class="fileinput-exists"> Change </span>
                                                            <input type="file" name="photo"> </span>
                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                </div>
            </div>
            <!-- <div class="clearfix margin-top-10">
                <span class="label label-danger">NOTE! </span>
                <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
            </div> -->
        </div>
        <div class="margin-top-10">
            <input type="submit" name="submit" class="btn btn-primary control-label" value="Submit"/>
        </div>
    </form>
@endsection