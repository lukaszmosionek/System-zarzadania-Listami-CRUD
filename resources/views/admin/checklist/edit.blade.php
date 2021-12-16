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

                    <form action="{{ route('admin.checklist_groups.checklists.update', [$checklistGroup, $checklist]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edutyj nową grupę') }}</div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="name">{{ __('Nazwa') }}</label>
                                <input value="{{ $checklist->name }}" class="form-control" name="name" id="name" type="text">
                            </div>



                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">{{ __('Edytuj') }}</button>
                        </div>
                    </form>
                </div>
                <div class="mt-3">
                    <form class="" action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" role="submit" onclick="return confirm('{{__('Are you sure?')}}')">{{ __('Usuń tą grupę') }}</button>
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
