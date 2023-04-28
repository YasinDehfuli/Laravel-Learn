@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>
            User
        </h1>

        <form class="" method="get" action="">
            @csrf

            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <label for="name">
                        {{__('name')}}
                    </label>
                    <input name="name" type="undefined" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('name')}}" value="{{old('name')}}"  />
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <label for="email">
                        {{__('email')}}
                    </label>
                    <input name="email" type="undefined" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('email')}}" value="{{old('email')}}"  />
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <div class="form-group">
                    <label for="mobile">
                        {{__('mobile')}}
                    </label>
                    <input name="mobile" type="undefined" class="form-control @error('mobile') is-invalid @enderror" placeholder="{{__('mobile')}}" value="{{old('mobile')}}"  />
                </div>
            </div>
        </form>

    </div>

@endsection

