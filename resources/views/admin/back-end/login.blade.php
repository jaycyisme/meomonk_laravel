<style>
    /* Styles for the login box */
    .col-xxl-4 {
        margin: auto !important;
        text-align: center;
    }
    .log-in-box {
        background-color: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .log-in-title h3 {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .log-in-title h4 {
        color: #666;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .input-box {
        margin-top: 20px;
    }

    /* Styles for form inputs */
    .theme-form-floating label {
        color: #666;
    }

    .theme-form-floating input[type="text"],
    .theme-form-floating input[type="password"] {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 12px;
    }

    .forgot-box {
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .remember-box {
        margin-bottom: 0;
    }

    .forgot-password {
        color: #666;
        text-decoration: none;
        font-size: 14px;
    }

    /* Styles for the error message */
    .alert {
        margin-top: 20px;
        border-radius: 5px;
    }

    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
    }

    /* Button styles */
    .btn-animation {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 12px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-animation:hover {
        background-color: #0056b3;
    }

</style>


<div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
    <div class="log-in-box">
        <div class="log-in-title">
            <h3>Welcome To Fastkart Admin</h3>
            <h4>Log In Your Account</h4>
        </div>

        <div class="input-box">
            <form class="row g-4" method="POST" action="{{ route('adminLoginFunction') }}">
                @csrf
                <div class="col-12" style="margin-bottom: 10px;">
                    <div class="form-floating theme-form-floating log-in-form">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating theme-form-floating log-in-form">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="col-12">
                    <div class="forgot-box">
                        <div class="form-check ps-0 m-0 remember-box" style="margin: auto; margin-bottom: 20px">
                            <input class="checkbox_animated check-box" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-animation w-100 justify-content-center" type="submit">Log In</button>
                </div>
            </form>
        </div>

        @if (session('error'))
            <div class="alert alert-danger mt-3">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
