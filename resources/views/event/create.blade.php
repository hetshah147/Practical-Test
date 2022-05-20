@extends('event.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2>Add new Events</h2>
    </div>

</div>
<a class="btn btn-primary" href="{{ route('events.index') }}">Back</a>

@if ($errors-> any())
    <div class="alert alert-danger">
        <b>Sorry</b> There are some issues in your input
        <br>
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('events.store') }}" method="POST">

    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Event Name</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Start Date</label>
                <input type="date" name="start_date" class="form-control" id="start_date">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>End Date</label>
                <input type="date" name="end_date" class="form-control" id="end_date">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Recurrence</label>
                <input type="date" name="recurrence" class="form-control" id="recurrence">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
