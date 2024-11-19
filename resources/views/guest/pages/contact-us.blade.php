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
            </form>
        </div>
    </div>
</section>
@endsection
