@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                    <form action="{{ route('new-brand') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-3" >Brand Name</label>
                            <div class="col-md-9">
                                <input type="text" name="brand_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" >Brand Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"name="brand_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" >Publication Status</label>
                                <div class="col-md-9 radio">
                                    <label><input type="radio" name="publication_status" value="1">Published</label>
                                    <label><input type="radio" name="publication_status" value="0">Unpublished</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3" ></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="Save Brand Info" class="btn btn-success btn-block">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection