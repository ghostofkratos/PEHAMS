@extends('layouts.app')

@section('title')
    Contact US
@endsection

@section('content')
<div class="section">
    <div class="container">

      <div class="row gap-y">
        <div class="col-md-6">

        <form action="{{ route('message-store') }}" method="POST">
          @csrf
            <!-- <div class="alert alert-success d-on-success">We received your message and will contact you back soon.</div> -->
            

            <div class="form-group">
              <input class="form-control form-control-lg" id="subject" type="text" name="subject" placeholder="Subject">
            </div>

            <div class="form-group">
              <textarea class="form-control form-control-lg" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Send Inquiry</button>
          </form>

        </div>


        <div class="col-md-5 ml-auto">
          <div class="bg-gray h-full p-5">
            <p>Give us a call to report strange behaviour or request features and changes on the website. You can aloso report errors experienced here.</p>

            <hr class="w-20 my-6">

            <div>
              <span class="d-inline-block w-5 text-lighter" title="Email">E:</span>
              <span class="small-1">giftkasonya@gmail.com</span>
            </div>

            <div>
              <span class="d-inline-block w-5 text-lighter" title="Phone">P:</span>
              <span class="small-1">+265998658213</span>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
@endsection