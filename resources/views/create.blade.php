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

                    <div class="form-group row">
                        <label for="card_id" class="col-md-4 col-form-label text-md-right">ID</label>

                        <div class="col-md-6">
                            <input id="card_id" type="text" class="form-control @error('card_id') is-invalid @enderror" name="card_id" value="{{ old('card_id') }}" required autocomplete="card_id" autofocus>

                            @error('card_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pin" class="col-md-4 col-form-label text-md-right">PIN</label>

                        <div class="col-md-6">
                            <input id="pin" type="text" class="form-control @error('pin') is-invalid @enderror" name="pin" value="{{ old('pin') }}" required autocomplete="pin">

                            @error('pin')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="activation_date" class="col-md-4 col-form-label text-md-right">Activation date</label>

                        <div class="col-md-6">
                            <input id="activation_date" type="date" class="form-control @error('activation_date') is-invalid @enderror" name="activation_date" value="{{ old('activation_date') }}" required autocomplete="activation_date">

                            @error('activation_date')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="expiration_date" class="col-md-4 col-form-label text-md-right">Expiration date</label>

                        <div class="col-md-6">
                            <input id="expiration_date" type="date" class="form-control @error('expiration_date') is-invalid @enderror" name="expiration_date" value="{{ old('expiration_date') }}" required autocomplete="expiration_date">

                            @error('expiration_date')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="balance" class="col-md-4 col-form-label text-md-right">Balance (PLN)</label>

                        <div class="col-md-6">
                            <input id="balance" type="text" class="form-control @error('balance') is-invalid @enderror" name="balance" value="{{ old('balance') }}" required autocomplete="balance">

                            @error('balance')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
