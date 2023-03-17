{{--  繼承了master.blade.php  --}}
@extends('layouts.master')
<style>
  #intro {
    background-color:#398653;";
    background-size: cover;
    height: 100vh;
  }
</style>
{{--  填名為content的洞  --}}
@section('content')

  <div id="intro" class="bg-image shadow-2-strong">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-md-8">
            <form method="post" action="{{ route('contactSendMail') }}" class="bg-white  rounded-5 shadow-5-strong p-5">
              @csrf
              <!-- Email input -->
              <div class="mb-4">
                <h1 class="h3 mb-3 fw-normal">聯絡我們</h1>
              </div>
              <div class="form-floating form-outline mb-4">
                <input type="text" class="form-control" id="name" name="name" required="required">
                <label for="floatingInput">姓名</label>
              </div>

              <div class="form-floating form-outline mb-4">
                <input type="text" class="form-control" id="phone" name="phone" required="required">
                <label for="floatingInput">電話</label>
              </div>

              <!-- Password input -->
              <div class="form-floating form-outline mb-4">
                <input type="email" class="form-control" id="email" name="email"  required="required">
                <label for="floatingEmail">郵件</label>
              </div>

              <div class="form-floating form-outline mb-4">
                <textarea class="form-control" name="message"  style="height: 150px"  required></textarea>
                <label for="floatingTextarea">訊息內容</label>
              </div>

              <!-- Submit button -->
              <input type="submit" name="emp_submit" class="btn btn-success" value="寄出訊息">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

{{--  填名為title的洞，並繼承父視圖的內容 --}}
@section('title')
{{--  繼承父視圖 section show裡頭的內容  --}}
@parent
{{--  <title>My Laravel Shop | Canvas</title>  --}}
@endsection
