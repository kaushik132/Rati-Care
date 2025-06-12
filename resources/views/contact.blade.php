@extends('dashboard.layout.main')

@section('main-containers')
<div class="container my-5">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('contact.submit') }}" method="POST">

                    @csrf
  @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" 
                                   class="form-control @error('firstname') is-invalid @enderror" 
                                   value="{{ old('firstname') }}">
                            @error('firstname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" 
                                   class="form-control @error('lastname') is-invalid @enderror" 
                                   value="{{ old('lastname') }}">
                            @error('lastname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phonenumber">Phone Number</label>
                        <input type="text" id="phonenumber" name="phonenumber" 
                               class="form-control @error('phonenumber') is-invalid @enderror" 
                               value="{{ old('phonenumber') }}">
                        @error('phonenumber')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="4" 
                                  class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
