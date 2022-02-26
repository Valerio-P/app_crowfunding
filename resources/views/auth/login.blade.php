<x-layout>

    <div class="container mt-3 mt-md-5">
        <div class="row mx-0 align-items-center py-5">
            <div class="col-md-6 border-end-md p-4 p-sm-5">
                <h2 class="h3 mb-4 mb-sm-5">Hey there!<br>Welcome back.</h2><img class="d-block mx-auto" src="images/signin.svg" width="344" alt="Illustartion">
                <div class="mt-4 mt-sm-5">Don't have an account? <a href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">Sign up here</a></div>
            </div>
            <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
                <div class="d-flex align-items-center py-3 mb-3">
                    <hr class="w-100">
                    <div class="px-3">Or</div>
                    <hr class="w-100">
                </div>
                <form class="needs-validation" novalidate action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label mb-2" for="signin-email">Email address</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" id="signin-email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <label class="form-label mb-0" for="signin-password">Password</label><a class="fs-sm" href="#">Forgot password?</a>
                        </div>
                        <div class="password-toggle">
                            <input class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" type="password" id="signin-password" placeholder="Enter password" required>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox"><i id="eye" class="fas fa-eye"></i>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="submit">Sign in </button>
                </form>
            </div>
        </div>
        <script>
            let passwordShow = document.querySelector(".password-toggle-check")
            let password = document.querySelector("#signin-password")

            passwordShow.addEventListener('click', () => {
                
                if(password.type == "password"){

                    password.type = "text"

                } else {

                    password.type = "password"

                }

            })
        </script>
    </div>

</x-layout>