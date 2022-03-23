@extends('user.master')
@section('title')
    List Posts
@endsection
@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Content</th>
                <th scope="col">User Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $key => $value)
                @foreach ($users as $u_key => $user)
                    @if ($user->id == $value->user_id)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->content }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                <a href="{{ route('user.post.show', $value->user_id) }}" class="btn btn-info">Show
                                    User</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('user.list.view') }}" class="btn btn-danger mt-4">Back to list user</a>
@endsection
