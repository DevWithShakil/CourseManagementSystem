@extends('layouts.app')

@section('content')
    @if(session('name'))
        <h2>Welcome, {{ session('name') }}!</h2>
    @endif

    @php
        $contacts = [
            ['name' => 'Shakil', 'email' => 'shakil@example.com'],
            ['name' => 'shakib', 'shakib' => 'shakib@example.com'],
            ['name' => 'hridoy', 'email' => 'hridoy@example.com']
        ];
    @endphp

    @if(count($contacts) > 0)
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact['name'] ?? 'N/A' }}</td>
                    <td>{{ $contact['email'] ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No Contacts Found</p>
    @endif
@endsection
