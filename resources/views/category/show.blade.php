@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('category') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('category.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <h4>{{ $category->nama }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
