@extends('website.backend.layouts.main')
@section('content')
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Update Contact  </h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br>
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action="{{route('contact.update', $contact->id)}}">
            @csrf
            @method('PUT')

                <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Location<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" id="location" name="location" required="required" class="form-control " value="{{$contact->location}}">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="email" id="email" name="email" required="required" class="form-control " value="{{$contact->email}}">
                </div>
              </div>



              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Address<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <textarea id="address" required="required" class="form-control" name="address" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10">
                        {{$contact->address}}
                    </textarea>


                </div>
              </div>



              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                <input type="text" id="phone" name="phone" required="required" class="form-control " value="{{$contact->phone}}">
                </div>
              </div>



              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
      </div>
    </div>
  </div>
@endsection

