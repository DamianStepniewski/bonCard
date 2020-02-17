@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <span>New Card</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('store') }}">
                    @csrf

                    @include('create_edit_form_fields')

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                            <a href="{{ route('index') }}">
                                <button type="button" class="btn btn-secondary">
                                    Back
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
