@extends('app')

@section('content')

    @include('common.modals.success.message')
    @include('common.modals.action.form')
    @include('common.modals.failure.message')

    <div class="modal" id="successModal" data-template="modal-success">
        <button class="show-modal"
                @click="showModal = true">Show Success Modal
        </button>
    </div>

    <div class="modal" id="failModal" data-template="modal-failure">
        <button class="show-modal"
                @click="showModal = true">Show Failure Modal
        </button>
    </div>

    <div class="modal" id="formModal" data-template="modal-form">
        <button class="show-modal"
                @click="showModal = true">Show Form Modal
        </button>
    </div>

@endsection
