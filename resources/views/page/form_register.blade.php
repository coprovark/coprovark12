@extends('layouts.main')


@section('content')
<h1 class="page-header">สมัครสมาชิก</h1>
<form action="/form_register_save" method="post">
                                <div class="form-group">
                                        <label for="name">ID</label>
                                        <div class="form-inline" style="width:100%">
                                          <input type="text" class="form-control" name="ID" placeholder="ID"  style="width:50%">
                                        </div>
                                      </div>
                                    <div class="form-group">
                                            <label >User</label>
                                            <input type="text" class="form-control" name="USERNAME" placeholder="User" style="width:50%">
                                    </div>
                                    <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="PASSWORD" placeholder="Password" style="width:50%">
                                    </div>
                                    
                                <div class="form-group">
                                  <label>Status</label>
                                  <input type="text" class="form-control" name="STATUS" placeholder="Status" style="width:50%">
                                </div>
                              <div>
                                <button type="Submit" class="btn btn-success">Submit</button>
                                <button type="Clear" class="btn btn-danger">Clear</button>
                              </div>  
                              </form>

@endsection