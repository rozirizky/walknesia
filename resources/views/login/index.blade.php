@extends('login.layouts')


@section('container')

                <p class="text-center"></p>
                <form action="/login" method="post">
                  @csrf
              
                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" >
                 
                  </div>
                     @error('email')
                    
                     <p class="text-danger"> {{ $message }}</p>
                    
                @enderror
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                  
                   @error('password')
                  
                       <p class="text-danger"> {{ $message }}</p>
                   
                @enderror 
              </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                
               
                </form>
 
                @endsection