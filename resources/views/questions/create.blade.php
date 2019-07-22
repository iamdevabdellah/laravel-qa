@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-secondary btn-sm">Back</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="question-title"><h5>Question Title</h5></label>
                            <input type="text" name="title" id="question-title" class="form-control {{ $errors->has('') ? 'is-invalid' : '' }}">
                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="question-body"><h5>Explain your question</h5></label>
                            <textarea name="body" id="question-body" cols="30" rows="10" class="form-control {{ $errors->has('') ? 'is-invalid' : '' }}"></textarea>
                            @if ($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Submit question</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
