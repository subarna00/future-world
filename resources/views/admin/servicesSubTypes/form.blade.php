<div class="card-body">
    <div class="form-group">
        <label for="">Select Service </label>
        <select name="service_type_id" id="" class="form-control" required>
            @foreach (App\Models\ServiceType::latest()->get() as $service)
                <option value="{{ $service->id }}"
                    @isset($type->id) @if ($service->id === $serviceTypeSub->id)
                    selected
                @endif @endisset>
                    {{ $service->type }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Service Sub Title</label>
        <input type="text" class="form-control" placeholder="Enter Type" value="{{$serviceTypeSub->title ?? old('title') }}" name="title"
            required>
        @if ($errors->has('title'))
            <small class="text-red">{{ $errors->first('title') }}</small>
        @endif
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Short Description</label>
        <textarea name="short_description" class="form-control"  rows="5"
            value="{{$serviceTypeSub->short_description ?? old('short_description') }}">{{ $serviceTypeSub->short_description ?? old('short_description') }}</textarea>
        @if ($errors->has('short_description'))
            <small class="text-red">{{ $errors->first('short_description') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="description" class="form-control" cols="25" rows="10" id="summernote1"
            value="{{$serviceTypeSub->description ?? old('description') }}">{{ $serviceTypeSub->description ?? old('description') }}</textarea>
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
            @isset($serviceTypeSub->id) @if ($serviceTypeSub->status==="active")
            selected
        @endif @endisset
            >Active</option>
            <option value="inactive"  @isset($serviceTypeSub->id) @if ($serviceTypeSub->status==="inactive")
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
