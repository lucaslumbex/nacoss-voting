<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-bluegray" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
            <div class="panel-heading">
                <h2>Add New Category</h2>
            </div>
            <!--enctype="multipart/form-data"-->
            <form method="post" action="/" class="form-horizontal">
                <div class="panel-body">
                    @if($success)
                        <div class="text-center center-block">
                            <br>
                            <div class="alert alert-success col-xs-offset-3 col-xs-9" style="padding: 10px;">{{$success}}</div>
                        </div>
                    @endif
                    <div class="form-group mb-md">
                        <label for="fullname" class="col-xs-3 control-label">Full Name</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="fullname" id="fullname" required>
                        </div>

                    </div>
                    <div class="form-group mb-md">
                        <label for="Email" class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-9">
                            <input type="email" class="form-control" name="email" id="email" required >
                        </div>
                    </div>
                    <div class="form-group mb-md">
                        <label for="sex" class="col-xs-3 control-label">Sex</label>
                        <div class="col-xs-9">
                            <select class="form-control" name="sex" id="sex" required >
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-md">
                        <label for="address" class="col-xs-3 control-label">Address</label>
                        <div class="col-xs-9">
                            <textarea class="form-control" name="address" id="address" rows="2" required ></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-md">
                        <label for="phoneNumber" class="col-xs-3 control-label">Phone Number</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" required>
                        </div>
                    </div>
                    <div class="form-group mb-n">
                        <label for="agentPicture" class="col-xs-3 control-label">Agent Picture</label>
                        <div class="col-xs-9">
                            <div class="fileinput fileinput-new" required style="width: 100%;" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
                                <div>
                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="images">
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($error)
                        <div class="text-center center-block">
                            <br>
                            <div class="col-xs-offset-3 col-xs-9 alert alert-danger" style="padding: 10px;">{{$error}}</div>
                        </div>
                    @endif

                </div>
                <div class="panel-footer">
                    <div class="clearfix">
                        <input type="submit" class="btn btn-primary pull-right" name="" value="Register">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>