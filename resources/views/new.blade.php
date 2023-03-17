{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<div class="container">
  <div class="list-group">
    @foreach($news as $new)
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">{{ $new->title }}</h6>
                    <p class="mb-0 opacity-75">{{ $new->content }}</p>
                </div>
                <small class="opacity-50 text-nowrap">{{ $new->created_at }}</small>
            </div>
        </a>
    @endforeach
  </div>
</div>
@endsection

{{--  填名為title的洞，並繼承父視圖的內容 --}}
@section('title')
{{--  繼承父視圖 section show裡頭的內容  --}}
@parent
{{--  <title>My Laravel Shop | Canvas</title>  --}}
@endsection
