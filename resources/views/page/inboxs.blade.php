@extends('layouts.main')

@extends('layouts.inbox-layout')

@section('inbox')
<!-- ISI -->

<div class="chatfield">

@foreach ($inboxs as $inbox)
<p>{{ $inbox->name }}</p>

<p>{{ $inbox->excerpt }}</p>
<p>{{ $inbox->message }}</p>

</article>
@endforeach
</div>

@endsection
