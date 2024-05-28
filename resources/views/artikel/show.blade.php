@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('artikel') }}
                    </div>
                    <div class="float-end">
                        <a href="http://127.0.0.1:8000/" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <h4>{{ $artikel->judul }}</h4>
                    <hr>
                    <img src="{{ asset('storage/artikels/' . $artikel->image) }}" class="w-100 rounded">

                    <p class="tmt-3">
                        {!! $artikel->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
