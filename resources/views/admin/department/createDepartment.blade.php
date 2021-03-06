@extends('admin.master')

@section('title')
    Add Department
@endsection

@section('mainContent')

<br>
<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Create Department</h3>
<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>     

        <div class="well">
            <!--<h2 class="text-center text-success">Fill this form up to add new Department</h2><br>-->
            {!! Form::open(['url'=>'/department/save','method'=>'POST','class'=>'form-horizontal']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Department Name</label>
            <div class="col-sm-10">
                <input name="departmentName" type="text" class="form-control" id="inputEmail3" required="">
            </div>
          </div><hr/>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Department Description</label>
            <div class="col-sm-10">
                <textarea name="departmentDescription" rows="8" class="form-control" ></textarea>
            </div>
          </div><hr/>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
            <div class="col-sm-10">
                <select class="form-control" name="publicationStatus">
                    <option>...Select Publication Status... </option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </div>
          </div><hr/>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Save Department Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
@endsection