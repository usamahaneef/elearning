@extends('layouts.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>User Profile</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">

            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                            href="#account-vertical-general" aria-expanded="true">
                            <i class="feather icon-globe mr-50 font-medium-3"></i>
                            General
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                            href="#account-vertical-password" aria-expanded="false">
                            <i class="feather icon-lock mr-50 font-medium-3"></i>
                            Change Password
                        </a>
                    </li>
                </ul>
            </div>
            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form novalidate method="post" action="{{ url('admin/profile/edit', $admin->id) }}"
                                        enctype="multipart/form-data">
                                        <div class="media">
                                            <a href="javascript: void(0);">
                                                @if (!empty(auth()->user()->image))
                                                    <img src="{{ asset('images/users/' . auth()->user()->image) }}"
                                                        class="rounded mr-75" alt="profile image" height="64"
                                                        width="64">
                                                @else
                                                    <img src="{{ asset('images/users/profile.png') }}"
                                                        class="rounded mr-75" alt="profile image" height="64"
                                                        width="64">
                                                @endif
                                            </a>
                                            <div class="media-body mt-75 ml-2">
                                                <div
                                                    class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                    <label class="btn btn-sm btn-primary ml-50  cursor-pointer"
                                                        for="account-upload">Upload new photo</label>
                                                    <input type="file" name="img" id="account-upload" hidden>
                                                    <button type="reset"
                                                        class="btn btn-sm btn-outline-warning ml-50">Reset</button>
                                                </div>
                                                <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                        size of
                                                        800kB</small></p>
                                            </div>
                                        </div>
                                        <hr>
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Username</label>
                                                        <input type="text" class="form-control" name="name"
                                                            id="account-username" placeholder="Username"
                                                            value="{{ $admin->name }}" required
                                                            data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-e-mail">E-mail</label>
                                                        <input type="email" class="form-control" id="account-e-mail"
                                                            placeholder="Email" value="{{ $admin->email }}" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-company">Phone</label>
                                                    <input type="text" class="form-control" name="phone"
                                                        id="account-company" placeholder="Phone"
                                                        value="{{ $admin->phone }}">
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 ">Save
                                                    changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                                    aria-labelledby="account-pill-password" aria-expanded="false">
                                    <form novalidate method="post" action="{{ url('admin/password/edit', $admin->id) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-old-password">Old Password</label>
                                                        <input type="password" class="form-control"
                                                            name="current_password" id="account-old-password" required
                                                            placeholder="Old Password"
                                                            data-validation-required-message="This old password field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-new-password">New Password</label>
                                                        <input type="password" name="new_password"
                                                            id="account-new-password" class="form-control"
                                                            placeholder="New Password" required
                                                            data-validation-required-message="The password field is required"
                                                            minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-retype-new-password">Retype New
                                                            Password</label>
                                                        <input type="password" name="confirm_password"
                                                            class="form-control" required id="account-retype-new-password"
                                                            data-validation-match-match="password"
                                                            placeholder="New Password"
                                                            data-validation-required-message="The Confirm password field is required"
                                                            minlength="6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 ">Save
                                                    changes</button>
                                                <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
