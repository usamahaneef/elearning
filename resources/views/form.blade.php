@extends('layouts.master')
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Form Elements</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
    <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Basic Elements <small>different form elements</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Default Input</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Default Input">
                            </div>
                        </div>
          
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <textarea class="form-control" rows="3" placeholder="Date Of Birth"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Password</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="password" class="form-control" value="passwordonetwo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">AutoComplete</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Select</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select class="form-control">
                                    <option>Choose option</option>
                                    <option>Option one</option>
                                    <option>Option two</option>
                                    <option>Option three</option>
                                    <option>Option four</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Select Custom</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                </select>
                            </div>
                        </div>
                  
                        <div class="form-group row">
                            <label class="col-md-3 col-sm-3  control-label">Checkboxes and radios
                                <br>
                                <small class="text-navy">Normal Bootstrap elements</small>
                            </label>

                            <div class="col-md-9 col-sm-9 ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value=""> Option one. select more than one options
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value=""> Option two. select more than one options
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="button" class="btn btn-primary">Cancel</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
