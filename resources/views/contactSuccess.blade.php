@extends('layouts.app')
@section('title', 'Confirmation')
@section('content')
  <div class="success-message">
    <h2>We're on it! 📩</h2>
    <p>Thanks {{ $data['firstName'] }} {{ $data['lastName'] }} for your message. A confirmation email has been sent to
      {{ $data['email'] }}. Speak to you soon!</p>

  </div>
@endsection
