<x-layout>

    <main class="container">
        <div class="row mt-5 mb-3">
            <div class="col-12">
                <h1 class="my-3">Register</h1>

                @if (session('status'))
                <div class="alert alert-success py-2 shadow my-4">
                    <p>{{ session('status') }}</p>
                </div>
                @endif

                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger shadow my-4 py-2">
                    <p>{{ $error }}</p>
                </div>
                @endforeach
                @endif


                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror " id="name" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input name="surname" value="{{ old('surname') }}" type="text" class="form-control @error('surname') is-invalid @enderror " id="surname" aria-describedby="surnameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror " id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" value="{{ old('password') }}" type="password" class="form-control @error('password') is-invalid @enderror " id="password" aria-describedby="passwordHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input name="password_confirmation" value="{{ old('password_confirmation') }}" type="password" class="form-control @error('password_confirmation') is-invalid @enderror " id="password_confirmation" aria-describedby="password_confirmationHelp">
                    </div>
                    <div class="w-100 d-flex flex-column flex-md-row justify-content-between">
                        <button type="submit" class="btn btn-warning">Register</button>
                        <div class="mt-3 mt-md-0">
                            <a class="" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>

</x-layout>