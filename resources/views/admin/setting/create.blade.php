@extends('admin.layout.master')
@section('content')
    <div class=" content mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Create Site Settings</h3>
                    </div>

                    <form method="POST" action="{{ route('site-setting.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Site Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="exampleInputFile" name="logo"
                                            value="{{ old('logo') }}">
                                    </div>
                                </div>
                                @if ($errors->has('logo'))
                                    <small class="text-red">{{ $errors->first('logo') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Favicon Icon</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="exampleInputFile" name="fav_icon">
                                    </div>
                                </div>
                                @if ($errors->has('logo'))
                                    <small class="text-red">{{ $errors->first('fav_icon') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" placeholder="Enter email"
                                    value="{{ old('email') }}" name="email" required>
                                @if ($errors->has('email'))
                                    <small class="text-red">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone Number</label>
                                <input type="number" class="form-control" placeholder="Enter phone number"
                                    value="{{ old('phone_number') }}" name="phone_number" required>
                                @if ($errors->has('phone_number'))
                                    <small class="text-red">{{ $errors->first('phone_number') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" placeholder="Enter address"
                                    value="{{ old('address') }}" name="address" required>
                                @if ($errors->has('address'))
                                    <small class="text-red">{{ $errors->first('address') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input type="url" class="form-control" placeholder="facebook"
                                    value="{{ old('facebook') }}" name="facebook">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Youtube</label>
                                <input type="url" class="form-control" placeholder="Youtube"
                                    value="{{ old('youtube') }}" name="youtube">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Twitter</label>
                                <input type="url" class="form-control" placeholder="Twitter"
                                    value="{{ old('twitter') }}" name="twitter">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Instagram</label>
                                <input type="url" class="form-control" placeholder="Instagram"
                                    value="{{ old('instagram') }}" name="instagram">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiktok</label>
                                <input type="url" class="form-control" placeholder="Tiktok" value="{{ old('tiktok') }}"
                                    name="tiktok">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Experience</label>
                                <input type="number" class="form-control" placeholder="experience" value="{{ old('experience') }}"
                                    name="experience">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Satisfied Clients</label>
                                <input type="number" class="form-control" placeholder="satisfied" value="{{ old('satisfied') }}"
                                    name="satisfied">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Projects</label>
                                <input type="number" class="form-control" placeholder="projects" value="{{ old('projects') }}"
                                    name="projects">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Finished Works</label>
                                <input type="number" class="form-control" placeholder="finished_works" value="{{ old('finished_works') }}"
                                    name="finished_works">
                            </div>



                            <div class="form-group">
                                <label for="exampleInputFile">Status</label>
                                <select name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
