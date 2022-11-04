<div class="card-body">
    {{-- <div class="form-group">
        <label for="">Select course Type</label>
        <select name="course_type_id" id="" class="form-control" required>
            @foreach (App\Models\courseType::latest()->get() as $type)
                <option value="{{ $type->id }}" @if (isset($course->course_type_id)) selected @endif>
                    {{ $type->type }}</option>
            @endforeach
        </select>
    </div> --}}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" placeholder="Enter title"
            value="{{ $course->title ?? old('title') }}" name="title" required>
        @if ($errors->has('title'))
            <small class="text-red">{{ $errors->first('title') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Duration</label>
        <input type="text" class="form-control" placeholder="Enter duration"
            value="{{ $course->duration ?? old('duration') }}" name="duration" required>
        @if ($errors->has('duration'))
            <small class="text-red">{{ $errors->first('duration') }}</small>
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
        <label for="exampleInputPassword1">Overview</label>
        <textarea name="overview" class="form-control"  rows="5" id="summernote2"
            value="{{ old('overview') }}">{{ $course->overview ?? old('overview') }}</textarea>
        @if ($errors->has('overview'))
            <small class="text-red">{{ $errors->first('overview') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="description" class="form-control" cols="25" rows="10" id="summernote1"
            value="{{ old('description') }}">{{ $course->description ?? old('description') }}</textarea>
        @if ($errors->has('description'))
            <small class="text-red">{{ $errors->first('description') }}</small>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Syllabus</label>
        <textarea name="syllabus" class="form-control" cols="25" rows="10" id="summernote3"
            value="{{ old('syllabus') }}">{{ $course->syllabus ?? old('syllabus') }}</textarea>
        @if ($errors->has('syllabus'))
            <small class="text-red">{{ $errors->first('syllabus') }}</small>
        @endif
    </div>

    <div class="form-group">
        <label for="exampleInputFile">Status</label>
        <select name="status" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
</div>

@section('script')
    <script>
        $('#summernote1').summernote({
            placeholder: 'Write your course description',
            tabsize: 2,
            height: 100
        });
        $('#summernote2').summernote({
            placeholder: 'Write your course overview',
            tabsize: 2,
            height: 100
        });
        $('#summernote3').summernote({
            placeholder: 'Write your course syllabus',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
