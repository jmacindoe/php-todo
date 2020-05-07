@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All tasks</div>

                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Task</td>
                            <td>Completed</td>
                            <td>Actions</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $key => $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->completed ? "Yes" : "No" }}</td>

                                <!-- Action buttons -->
                                <td>
                                    {{ Form::open(array('url' => 'tasks/' . $value->id)) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete task', array('class' => 'btn btn-small btn-warning')) }}
                                    {{ Form::close() }}

                                    <a class="btn btn-small btn-success" href="{{ URL::to('tasks/' . $value->id) }}">Show task details</a>

                                    <a class="btn btn-small btn-info" href="{{ URL::to('tasks/' . $value->id . '/edit') }}">Edit task</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
