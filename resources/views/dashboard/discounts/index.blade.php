@extends('layouts.dashboard')

@section('contents')
<div class="h-100 d-flex flex-column">
    <x-toolbar :route="false"></x-toolbar>
    
    <div class="container-fluid py-3 flex-fill overflow-y-auto">
        @foreach ($data as $item)
        <div class="row mb-3 mx-2 align-items-center py-1 border rounded">
            <div class="col-1 text-center text-truncate">{{ $loop->iteration }}</div>
            <div class="col text-truncate">{{ $item->name }}</div>
            <div class="col-2 d-none d-sm-block col-md-2 text-center text-truncate">999</div>
            <div class="col-auto d-flex gap-2">
                <a href="/{{ Request::path()."/".$item->code }}" class="btn p-1 btn-secondary d-flex">
                    <span class="material-symbols-outlined">visibility</span>
                </a>
                <a href="/{{ Request::path()."/".$item->code }}/edit" class="btn p-1 btn-primary d-flex">
                    <span class="material-symbols-outlined">edit</span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    
    <x-paginate :paginateContent="$data"></x-paginate>
</div>
@endsection

@section('scripts')
    
@endsection