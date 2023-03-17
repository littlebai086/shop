{{--  繼承了master.blade.php  --}}
@extends('layouts.master')

{{--  填名為content的洞  --}}
@section('content')
<!-- Slider
============================================= -->
    @foreach( $cartContent as $item )
    <div class="row featurette">
      <div class="col-md-2">
        <img  width="150" height="150"  src ="{{ $item->associatedModel->picture_url }}"  >
      </div>
      <div class="col-md-7">
        <h2 class="featurette-heading">{{ $item->associatedModel->name }}</h2>
        <p class="lead">${{ $item->price }} x {{ $item->quantity }}</p>
      </div>
      <div class="col-md-3">
      </div>
    </div>
    <hr>
    @endforeach

    <!-- /END THE FEATURETTES -->

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">購物資料訂單</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('buyCart') }}">
                        @csrf
                        <div class="form-group row mb-1">
                            <label for="receive_name" class="col-md-4 col-form-label text-md-right">收貨人名稱</label>

                            <div class="col-md-6">
                                <input id="receive_name" type="text" class="form-control @error('receive_name') is-invalid @enderror" name="receive_name" value="{{ old('receive_name') }}" required autocomplete="receive_name" autofocus>

                                @error('receive_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-1">
                            <label for="receive_phone" class="col-md-4 col-form-label text-md-right">收貨人電話</label>

                            <div class="col-md-6">
                                <input id="receive_phone" type="text" class="form-control @error('receive_phone') is-invalid @enderror" name="receive_phone" required autocomplete="receive_phone">

                                @error('receive_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-1">
                            <label for="receive_address" class="col-md-4 col-form-label text-md-right">收貨人地址</label>

                            <div class="col-md-6">
                                <input id="receive_address" type="text" class="form-control @error('receive_address') is-invalid @enderror" name="receive_address" required autocomplete="receive_address">

                                @error('receive_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label for="pay_type_id" class="col-md-4 col-form-label text-md-right">付款方式</label>
                            <div class="col-md-6">
                                <select id="pay_type_id" name="pay_type_id" class="form-control @error('pay_type_id') is-invalid @enderror" >
                                    @foreach ($payTypes as $payType)
                                        <option value='{{ $payType->id }}'>{{ $payType->pay_type_chinese }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row  mb-1">
                            <label for="remark" class="col-md-4 col-form-label text-md-right">備註</label>

                            <div class="col-md-6">
                                <input id="remark" type="text" class="form-control @error('remark') is-invalid @enderror" name="remark" required autocomplete="remark">

                                @error('remark')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row  mb-1">
                            <label for="total" class="col-md-4 col-form-label text-md-right">總金額</label>

                            <div class="col-md-6">
                                ${{ \Cart::getTotal() }}
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    確認訂單
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section><!-- #content end -->
@endsection

{{--  填名為title的洞，並繼承父視圖的內容 --}}
@section('title')
{{--  繼承父視圖 section show裡頭的內容  --}}
@parent
{{--  <title>My Laravel Shop | Canvas</title>  --}}
@endsection
