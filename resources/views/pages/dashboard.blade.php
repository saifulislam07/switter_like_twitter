@extends('include.layout')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('include.left-sidebar')
        </div>
        <div class="col-6">

            @include('alert.success-message')

            @include('pages.shared.submit-idea')
            <hr>
            @foreach ($ideas as $idea)
                <div class="mt-3">
                    @include('pages.idea-card')
                </div>
            @endforeach
            <div class="mt-3">
                {{ $ideas->links() }}
            </div>
        </div>
        <div class="col-3">
            @include('pages.shared.search-bar')
            @include('pages.shared.follow-box')
        </div>
    </div>
@endsection
