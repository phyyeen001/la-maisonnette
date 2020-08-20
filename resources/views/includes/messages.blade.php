@if(session('success'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>{{session('success') }}</p>
    <hr>
    {{-- <p class="mb-0">As you pray with us , May your prayers be answered.</p> --}}
  </div>
@endif
