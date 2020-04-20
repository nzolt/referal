@extends('index')

@section('content')
    @php
      //dd($input);
    @endphp
    <div class="mt-4">
        <p class="font-weight-bold">Refer new client</p>
        <form action="/client/create" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-row">
                <div class="col">
                    <input type="text" name="title" required class="form-control" placeholder="* Title" value="{{ old('title') }}">
                    <span class="validity"></span>
                </div>
                <div class="col">
                    <input type="text" name="firstname" required class="form-control" placeholder="* First name" value="{{ old('firstname') }}">
                    <span class="validity"></span>
                </div>
                <div class="col">
                    <input type="text" name="surname" class="form-control" placeholder="Surname" value="{{ old('surname') }}">
                </div>
                <div class="col">
                    <input type="text" name="lastname" required class="form-control" placeholder="* Last name" value="{{ old('lastname') }}">
                    <span class="validity"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="address1" class="form-control" required id="inputAddress" placeholder="* Address line 1" value="{{ old('address1') }}">
                <span class="validity"></span>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="{{ old('address2') }}">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" name="city" required class="form-control" id="inputCity" placeholder="* City" value="{{ old('city') }}">
                    <span class="validity"></span>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">State</label>
                    <input type="text" name="state" class="form-control" id="inputState2" placeholder="State" value="{{ old('state') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Zip</label>
                    <input type="text" name="zip" required class="form-control" id="inputZip" placeholder="* Zip" value="{{ old('zip') }}">
                    <span class="validity"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email" required class="form-control" id="inputEmail" placeholder="* Email" value="{{ old('email') }}">
                    <span class="validity"></span>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail">Phone</label>
                    <input type="text" name="phone" required class="form-control" id="inputPhone" placeholder="* Phone" value="{{ old('phone') }}">
                    <span class="validity"></span>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputDob">Dabe of birth</label>
                    <input type="date" name="dob"  max="{{ $minDate }}"  pattern="\d{4}-\d{2}-\d{2}" class="form-control" id="inputDob" placeholder="* Date of birth" value="{{ old('dob') }}">
                    <span class="validity"></span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Refer</button>
        </form>
    </div>
@endsection
