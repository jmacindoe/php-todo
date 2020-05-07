@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create task</div>

                <div class="card-body">
                    {{ Html::ul($errors->all()) }}

                    {{ Form::open(array('url' => 'tasks')) }}

                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title') }}
                    </div>

                    {{ Form::submit('Create the task', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
