<div class="card-body">
    <div class="form-group">
        <label for="">Select Service Type </label>
        <select name="service_id" id="" class="form-control" required>
            @foreach (App\Models\Service::latest()->get() as $service)
                <option value="{{ $service->id }}"
                    @isset($type->id) @if ($service->id === $type->id)
                    selected
                @endif @endisset>
                    {{ $service->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Type</label>
        <input type="text" class="form-control" placeholder="Enter Type" value="{{ old('type') }}" name="type"
            required>
        @if ($errors->has('type'))
            <small class="text-red">{{ $errors->first('type') }}</small>
        @endif
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Short Description</label>
        <textarea name="short_description" class="form-control"  rows="5"
            value="{{ old('short_description') }}">{{ $type->short_description ?? old('short_description') }}</textarea>
        @if ($errors->has('short_description'))
            <small class="text-red">{{ $errors->first('short_description') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="description" class="form-control" cols="25" rows="10" id="summernote1"
            value="{{ old('description') }}">{{ $type->description ?? old('description') }}</textarea>
        @if ($errors->has('description'))
            <small class="text-red">{{ $errors->first('description') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="form-control" id="exampleInputFile" name="image"
                    value="{{ old('image') }}">
            </div>
        </div>
        @if ($errors->has('image'))
            <small class="text-red">{{ $errors->first('image') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Status</label>
        <select name="status" class="form-control">
            <option value="active"
            @isset($type->id) @if ($type->status==="active")
            selected
        @endif @endisset
            >Active</option>
            <option value="inactive"  @isset($type->id) @if ($type->status==="inactive")
                selected
            @endif @endisset>Inactive</option>
        </select>
    </div>
</div>

@section('script')
    <script>
        $('#summernote1').summernote({
            placeholder: 'Write your service description',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
