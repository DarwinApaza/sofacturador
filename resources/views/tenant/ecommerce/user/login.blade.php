<div class="product-single-container product-single-default product-quick-view container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2 class="title mb-2">Login</h2>

            <form method="POST" action="{{ route('login') }}" class="mb-1">
                 @csrf
                <label for="login-email">Email address <span class="required">*</span></label>
                <input id="email" type="email" name="email" class="form-input form-wide mb-2" id="login-email" required="">

                <label for="login-password">Password <span class="required">*</span></label>
                <input  name="password" type="password" class="form-input form-wide mb-2" id="login-password" required="">

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-md">LOGIN</button>
                    <div class="custom-control custom-checkbox form-footer-right">
                        <input type="checkbox" class="custom-control-input" id="lost-password">
                        <label class="custom-control-label form-footer-right" for="lost-password">Remember Me</label>
                    </div>
                </div><!-- End .form-footer -->
                <a href="#" class="forget-password"> Forgot your password?</a>
            </form>
        </div><!-- End .col-md-6 -->
        <div class="col-md-4"></div>


       
    </div>
</div><!-- End .product-single-container -->
