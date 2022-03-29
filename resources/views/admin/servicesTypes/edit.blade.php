@extends('admin.layout.master')
@section('content')
    <div class=" content mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Edit Service Type</h3>
                    </div>
                    @if ($errors)
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{ route('service-types.update', $type->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Type</label>
                                <input type="text" class="form-control" placeholder="Enter Type"
                                    value="{{ $type->type }}" name="type" required>
                                @if ($errors->has('type'))
                                    <small class="text-red">{{ $errors->first('type') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Status</label>
                                <select name="status" class="form-control">
                                    <option value="active" @if ($type->status === 'active') selected @endif>Active
                                    </option>
                                    <option value="inactive" @if ($type->status === 'inactive') selected @endif>Inactive
                                    </option>
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
