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
                            <button class="btn btn-primary" type="submit">{{ __('Edytuj podgrupę') }}</button>
                        </div>
                    </form>
                </div>
                <div class="mt-3">
                    <form class="" action="{{ route('admin.checklist_groups.checklists.destroy', [$checklistGroup, $checklist]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" role="submit" onclick="return confirm('{{__('Are you sure?')}}')">{{ __('Usuń tą grupę') }}</button>
                    </form>

                    <hr />

                    <h2>{{ __('Lista zadań') }}</h2>

                    <table class="table">
                        <tbody>
                        @foreach($checklist->tasks as $task)
                        <tr>
                            <td>{{ $task->name }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.checklists.tasks.edit', [$checklist, $task]) }}">{{__('Edytuj')}}</a>
                                <form style="display: inline-block" action="{{ route('admin.checklists.tasks.destroy', [$checklist, $task]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" role="submit" onclick="return confirm('{{__('Are you sure?')}}')">{{ __('Usuń') }}</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    @if ($errors->storetask->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->storetask->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card">
                    <form action="{{ route('admin.checklists.tasks.store', [$checklist]) }}" method="POST">
                        @csrf
                        <div class="card-header">{{ __('Dodaj nowe zadanie') }}</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label" for="name">{{ __('Nazwa') }}</label>
                                <input value="{{ old('name') }}" class="form-control" placeholder="{{__('nazwa tasku')}}" name="name" id="name" type="text">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="name">{{ __('Opis') }}</label>
                                <textarea class="form-control" placeholder="{{__('nazwa tasku')}}" rows="5" name="description">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                                <button class="btn btn-primary" type="submit">{{ __('Dodaj zadanie') }}</button>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
    <br>
@endsection
