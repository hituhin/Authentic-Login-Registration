@extends('master')
 <form action=" {{ route('register') }}" method="post" enctype='multipart/form-data'>
    @csrf

    @if ($errors->any())
     <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
         <li>{{ $error}}</li>
       @endforeach
      </ul>
     </div>
    @endif 
    
     @if(session()->has('message'));
       <div class="alert alert-{{session('type') }}">
          {{ session('message') }}
       </div>
     @endif
 <div class="mb-3">
    <label for="text" class="form-label">Email address</label>
    <input type="text" class="form-control" name="Email">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="Password">
  </div>
   <div class="mb-3">
    <label for="exampleInputPhoto" class="form-label">Photo</label>
    <input type="file" class="form-control" name="photo" placeholder="Upload Photo">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 
 </form>