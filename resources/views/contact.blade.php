@extends('layout')

@section('content')

<div id="wrapper" >
    <div id="page" class="container">
        <div id="content" >
            <form method="POST" action="/contact"  class ='bg-white p-6 rounded shadow-md' style='width:300px'>

@csrf
                <div class='mb-5'>  
                    <label for='email' class='block test-xs uppercase font-semibold mb-1'>Email Address</label> 


                    <input type='text' id='email' name='email' class='border px-2 py-1 text-sm w-full'>
                    
                    @error('email')
                    <div class="text-red-500 text-xs">{{$message}}</div>    
                    @enderror
                </div>
                <button type='submit' class='bg-blue-500 py-2 text-white rounded-full text-sm w-full'>email me</button>
                
                @if (session('message'))
                <div>  <p class='text-green-500 text-xs mt-2'> {{session(('message'))}} </p>   </div>
                @endif
            </form>
        </div>
    </div>
</div>

@endsection
