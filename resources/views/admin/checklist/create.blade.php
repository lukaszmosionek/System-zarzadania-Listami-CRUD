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

                    <form action="{{ route('admin.checklist_groups.checklists.store', $checklistGroup) }}" method="POST">
                        @csrf
                        <div class="card-header">{{ __('Dodaj nową podgrupe w') }} {{ $checklistGroup->name }}</div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="name">{{ __('Nazwa') }}</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="{{ __('Checklist group nazwa') }}">
                            </div>



                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary mb-3" type="submit">{{ __('Dodaj') }}</button>
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
