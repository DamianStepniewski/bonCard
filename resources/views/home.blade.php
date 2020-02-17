@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <span>Cards</span>
                <a href="{{ route('create') }}" class="float-right">Add card</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>PIN</th>
                        <th>Activation date</th>
                        <th>Expiration date</th>
                        <th>Balance</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!$cards->count())
                        <tr><td colspan="6" class="text-center font-italic">No cards found</td></tr>
                    @endif
                    @foreach($cards as $card)
                        <tr>
                            <td>{{ $card->card_id }}</td>
                            <td>{{ $card->pin  }}</td>
                            <td>{{ $card->activation_date }}</td>
                            <td>{{ $card->expiration_date }}</td>
                            <td>{{ \App\Helpers\Formatter::formatCurrency($card->balance, 'zł', ',') }}</td>
                            <td><a href="{{ route('edit', ['id' => $card->id]) }}" class="pr-3">Edit</a> <a href="#">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $cards->links() }}
            </div>
        </div>
    </div>
@endsection
