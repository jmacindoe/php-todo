@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $task->title }}</div>

                <div class="card-body">
                    <strong>ID:</strong> {{ $task->id }}<br>
                    <!-- TODO: i18n -->
                    <strong>Completed:</strong> {{ $task->completed ? "Yes" : "No" }}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
