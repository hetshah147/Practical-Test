@extends('event.layout')

@section('content')

<div class="container text-center pt-4">
    <h2>Event Management</h2>
</div>

<div class="row p-4">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route('events.create') }}">Create new Event</a>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ message }}</p>
    </div>
@endif

<table>
    <tr>
        <th>Event</th>
        <th>Create Date</th>
        <th>End Date</th>
        <th>Recurrence</th>
    </tr>
    @foreach ($events as $event)
    <tr>
        <td>{{ $event->title }}</td>
        <td>{{ $event->start_date }}</td>
        <td>{{ $event->end_date }}</td>
        <td>{{ $event->recurrence }}</td>
        <td>
            <form action="{{ route('events.destroy',$event->id) }}" method="POST">
                <a href="{{ route('events.show',$event->id) }}">Show</a>

                <a href="{{ route('events.edit',$event->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
