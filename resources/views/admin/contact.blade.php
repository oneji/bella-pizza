@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>                                
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Message</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($contactMessages as $message)
                                <tr>
                                    <td>{{ $message['name'] }}</td>
                                    <td>{{ $message['email'] }}</td>
                                    <td>{{ $message['message'] }}</td>
                                    <td>
                                        {{ Carbon\Carbon::parse($message['created_at'])->toFormattedDateString() }} -
                                        {{ Carbon\Carbon::parse($message['created_at'])->toTimeString() }}
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <form method="POST" action="{{ route('admin.contact.delete', [ 'id' => $message['id'] ]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-default btn-danger btn-sm" type="submit">Delete</button>
                                            </form>                                    
                                        </div>
                                    </td>
                                </tr>                        
                            @endforeach                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection