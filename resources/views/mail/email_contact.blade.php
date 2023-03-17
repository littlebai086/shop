<style>
  #intro {
    background-color:#398653;";
    background-size: cover;
    height: 100vh;
  }
</style>
  <div id="intro" class="bg-image shadow-2-strong">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-md-8">
              <!-- Email input -->
              <div class="mb-4">
                <h1 class="h3 mb-3 fw-normal">聯絡我們</h1>
              </div>
              <div class="form-floating form-outline mb-4">
                <label for="floatingInput">姓名:{{ $params['name'] }}</label>
              </div>

              <div class="form-floating form-outline mb-4">
                <label for="floatingInput">電話:{{ $params['phone'] }}</label>
              </div>

              <!-- Password input -->
              <div class="form-floating form-outline mb-4">
                <label for="floatingEmail">郵件:{{ $params['email'] }}</label>
              </div>

              <div class="form-floating form-outline mb-4">
                <label for="floatingTextarea">訊息內容:{{ $params['message'] }}</label>
              </div>

              <!-- Submit button -->
          </div>
        </div>
      </div>
    </div>
  </div>
