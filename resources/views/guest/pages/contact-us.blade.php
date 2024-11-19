@extends('layouts.app')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="fw-bold">
                    Contact us!
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <form action="{{ route('guest.leads.store')}}" method="POST" class="col-12 col-md-8 col-lg-6">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="message">Type your message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send contact</button>
            </form>
        </div>
    </div>
</section>
@endsection
