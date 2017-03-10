@extends('layouts.admin_app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-gray" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
                <div class="panel-heading">
                    <h2>Add New Category</h2>
                </div>
                <!--enctype="multipart/form-data"-->
                <form method="post" action="/admin/candidate" class="form-horizontal" enctype="multipart/form-data">
                    <div class="panel-body">
                        @if($success)
                            <div class="text-center center-block">
                                <br>
                                <div class="alert alert-success col-xs-offset-3 col-xs-9" style="padding: 10px;">{{$success}}</div>
                            </div>
                        @endif

                        @if($error)
                            <div class="text-center center-block">
                                <br>
                                <div class="col-xs-offset-3 col-xs-9 alert alert-danger" style="padding: 10px;">{{$error}}</div>
                            </div>
                        @endif
                            {{ csrf_field() }}

                            {{--'category', 'cand_name','cand_course','cand_picture','cand_campaign_pic','cand_campaign_memo'--}}

                        <div class="form-group mb-md{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-xs-4 control-label">Category</label>
                            <div class="col-xs-7">
                                <select  name="category" id="category" class="form-control">
                                    <option value="" disabled>Choose The Category Candidate is Running For</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->cat_name}}">{{$category->cat_name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <span>{{ $errors->first('category') }}</span>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-md{{ $errors->has('cand_name') ? ' has-error' : '' }}">
                            <label for="cand_name" class="col-xs-4 control-label">Candidate Name</label>
                            <div class="col-xs-7">
                                <input type="text" class="form-control" name="cand_name" id="cand_name" required value="{{ old('cand_name') }}">
                                @if ($errors->has('cand_name'))
                                    <span class="help-block">
                                        <span>{{ $errors->first('cand_name') }}</span>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-n">
                            <label for="cand_picture" class="col-xs-4 control-label">Candidate Picture</label>
                            <div class="col-xs-7">
                                <div class="fileinput fileinput-new" required style="width: 100%;" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                                    <div>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="cand_picture">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-md{{ $errors->has('cand_course') ? ' has-error' : '' }}">
                            <label for="cand_course" class="col-xs-4 control-label">Course</label>
                            <div class="col-xs-7">
                                <select  name="cand_course" id="cand_course" class="form-control">
                                    <option value="" disabled>Choose your course</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="MIS">MIS</option>
                                </select>
                                @if ($errors->has('cand_course'))
                                    <span class="help-block">
                                    <span>{{ $errors->first('cand_course') }}</span>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-n">
                            <label for="cand_campaign_pic" class="col-xs-4 control-label">Candidate Picture</label>
                            <div class="col-xs-7">
                                <div class="fileinput fileinput-new" required style="width: 100%;" data-provides="fileinput">
                                    <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                                    <div>
                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="cand_campaign_pic">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-md{{ $errors->has('cand_campaign_memo') ? ' has-error' : '' }}">
                            <label for="cand_campaign_memo" class="col-xs-4 control-label">Campaign Memeo</label>
                            <div class="col-xs-7">
                                <textarea name="cand_campaign_memo" id="cand_campaign_memo" class="form-control" rows="3" value="{{ old('cand_campaign_memo') }}"></textarea>
                                @if ($errors->has('cand_campaign_memo'))
                                    <span class="help-block">
                                        <span>{{ $errors->first('cand_campaign_memo') }}</span>
                                    </span>
                                @endif
                            </div>
                        </div>



                    </div>
                    <div class="panel-footer">
                        <div class="clearfix">
                            <input type="submit" class="btn btn-primary pull-right" name="" value="Create">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
