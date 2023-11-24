@extends('layouts.auth')

@section('title', 'Forgot Password')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Forgot Password</h4>
        </div>

        <div class="card-body">
            <p class="text-muted">We will send a link to reset your password</p>
            @if (session('status'))
            {{-- <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @else
            <p class="text-success">Your alternative message here</p> --}}
            <p class="text-success">{{ session('status') }}</p>
            @endif
            <form method="POST" action="{{route('password.email')}}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email"
                        type="email"
                        class="form-control @error('error')
                        is-invalid
                        @enderror"
                        name="email"
                        tabindex="1"
                        autofocus>
                        @error('error')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                </div>

                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block"
                        tabindex="4">
                        Forgot Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
