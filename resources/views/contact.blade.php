@extends('layouts/app')

@section('title', 'Contact Page')
    

@section('content')

<body>

    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-12">
        <h1> Contact US </h1>
{{--  show error  --}}
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{--  Success data  --}}
@if (session('msg'))
    <div class="alert alert-success">
      {{session('msg')}}
    </div>
@endif


            <form method="POST" action="contact">
                @csrf
                <div class="mb-3">
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{ old('name') }}">
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"  value="{{ old('email') }}">
                  @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                </div>
                <div class="mb-3">
                  <input type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject" value="{{ old('subject') }}">
                  @error('subject')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Messege</label> <br>
                  <textarea name="message" id=""  cols="100" rows="5" placeholder="Write Your Message" value="{{ old('message') }}"></textarea>
                </div>

                {{-- <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div> --}}
         
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
       
          
        </div>
    
      </div>
    </div>

    
    </body>
@endsection



