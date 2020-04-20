@extends('index')

@section('content')
    <div  class="mt-4">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">City</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <th scope="row">{{ $client->getFullName() }}</th>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->city }}</td>
                    <td>
                        <a href="/client/accept/{{ $client->id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Approve</a>
                        <a href="/client/reject/{{ $client->id }}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Reject</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>{{ $clients->links() }}</div>
@endsection
