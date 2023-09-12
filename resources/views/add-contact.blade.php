@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex card justify-content-center">
        <div class="card-header text-center">Add Contact</div>
        <div class="card-body">
            @if (session('message'))
            <h6 class="alert alert-success">{{ session('message') }}</h6>
            @endif
            <form method="POST" action="{{ route('addContact') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                    @if ($errors->has('image'))
                    <span class="text-danger text-left">{{ $errors->first('image') }}</span>
                    @endif
                </div>
                <div class="d-flex mb-2 flex-column flex-sm-row md-flex-column justify-content-between">
                    <div class="form-group col-md-5">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="d-flex mb-2 flex-column flex-sm-row md-flex-column justify-content-between">
                    <div class="form-group col-md-5">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone"
                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                            value="{{ old('phone') }}" required autocomplete="phone">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="city">city</label>
                        <input type="text" class="form-control" id="city"
                            class="form-control @error('city') is-invalid @enderror" name="city"
                            value="{{ old('city') }}" required autocomplete="city">
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-md-5">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address"
                        class="form-control @error('address') is-invalid @enderror" name="address"
                        value="{{ old('address') }}" required autocomplete="address">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button style="margin-top:10px;" type="submit" class="btn btn-primary btn-md btn-sm">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection