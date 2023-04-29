@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>
            User
        </h1>

    </div>
    <div class="container">
        <form class="" method="post" action="{{route('user.store')}}">
            @csrf

            <div class="row">
                <div class="col-md-4 mt-3">
                    <div class="form-group">
                        <label for="name">
                            {{__('Name')}}
                        </label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('Name')}}" value="{{old('name',$user->name??null)}}"  />
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="form-group">
                        <label for="email">
                            {{__('Email')}}
                        </label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email')}}" value="{{old('email',$user->email??null)}}"  />
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="form-group">
                        <label for="mobile">
                            {{__('Mobile')}}
                        </label>
                        <input name="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror" placeholder="{{__('Mobile')}}" value="{{old('mobile',$user->mobile??null)}}"  />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <label for="password">
                            {{__('Password')}}
                        </label>
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('Password')}}" value="{{old('password',$user->password??null)}}"  />
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="form-group">
                        <label for="password_confirm">
                            {{__('Confirm Password')}}
                        </label>
                        <input name="password_confirm" type="password" class="form-control @error('password_confirm') is-invalid @enderror" placeholder="{{__('Confirm Password')}}" value="{{old('password_confirm',$user->password_confirm??null)}}"  />
                    </div>
                </div>
                <div class="col-md-12">
                    <label> &nbsp; </label>
                    <input name="" type="submit" class="btn btn-primary mt-2" value="{{__('Save')}}"   />
                </div>
            </div>
        </form>
    </div>

@endsection

