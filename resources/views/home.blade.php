@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <span>Cards</span>
                <a href="{{ route('create') }}" class="float-right"><i class="fas fa-plus"></i> Add card</a>
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
                            <td><a href="{{ route('edit', $card)}}" class="pr-3"><i class="fas fa-edit" title="Edit"></i></a> <delete-card card="{{ $card->id }}" card_id="{{ $card->card_id }}"></delete-card></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    {{ $cards->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <form method="POST" action="">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
