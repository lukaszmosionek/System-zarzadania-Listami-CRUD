@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.pages.update', [$page]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edutyj strone') }}</div>

                        <div class="card-body">

                            @if (session('message'))
                                <div class="alert alert-info">{{session('message')}}</div>
                            @endif

                            <div class="mb-3">
                                <label class="form-label" for="name">{{ __('Nazwa') }}</label>
                                <input value="{{ $page->title }}" class="form-control" name="title" id="name" type="text">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="content">{{ __('Zawartość') }}</label>
                                <textarea class="form-control" id="editor" name="content" id="content" row="5">{{ $page->content }}</textarea>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">{{ __('Edytuj strone') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
    <br>
    <br>
    <br>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
