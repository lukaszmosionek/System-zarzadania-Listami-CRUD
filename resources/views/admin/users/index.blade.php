@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('Czas rejestracji') }}</th>
                                    <th>{{ __('Imie') }}</th>
                                    <th>{{ __('E-mail') }}</th>
                                    <th>{{ __('Strona') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr >
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->website }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
                    </div>
                </div>


            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
@endsection

