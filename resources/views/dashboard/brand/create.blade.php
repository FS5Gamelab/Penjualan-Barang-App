@extends('layouts.dashboard')

@section('contents')
<div class="container-fluid">
    <div class="row justify-content-center py-3">
        <form class="col-11 col-sm-10 col-md-9 col-lg-8 col-xl-7 col-xxl-6 form-light p-3 border rounded shadow" method="post" action="{{ route('brands.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 container-fluid">
                <label for="brandName" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="brandName" value="{{ old('name') }}" placeholder="Enter category name..." required>
                @error('name')
                <div class="text-danger text-truncate">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 container-fluid">
                <label for="brandDescription" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="brandDescription" rows="4" placeholder="Enter brand description" required>{{ old('description') }}</textarea>
                @error('description')
                <div class="text-danger text-truncate">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 container-fluid">
                <div id="imagePreview" class="mb-3 text-center"></div>
                <label for="brandImage" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="brandImage" onchange="previewImage(event)">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 container-fluid d-flex">
                <button class="btn btn-success mx-auto" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.innerHTML = '<img src="' + reader.result + '" class="border" height="160px" alt="Product Image">';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection