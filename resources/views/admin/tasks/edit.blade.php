@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if ($errors->storetask->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->storetask->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.checklists.tasks.update', [$checklist, $task]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edutyj nową grupę') }}</div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="name">{{ __('Nazwa') }}</label>
                                <input value="{{ $checklist->name }}" class="form-control" name="name" id="name" type="text">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="description">{{ __('Opis') }}</label>
                                <textarea class="form-control" name="description" id="description" row="5">{{ $task->description }}</textarea>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">{{ __('Edytuj podgrupę') }}</button>
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
