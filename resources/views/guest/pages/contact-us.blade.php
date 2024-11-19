@extends('layouts.app')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold">
                    Contact us!
                </h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('guest.leads.store')}}" method="POST" class="col-12">
                @method('POST')
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="mb-3">
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>

                </div>
            </form>
        </div>
    </div>
</section>
@endsection
