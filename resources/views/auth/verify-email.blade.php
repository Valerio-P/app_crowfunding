<x-layout>

    <main class="container">
        <div class="row mt-5 mb-3">
            <div class="col-12">
                <h1 class="my-3">You must verify your email address, please check your email for a verification link.</h1>

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


                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning">Resend email verification</button>
                </form>
                
            </div>
        </div>
    </main>

</x-layout>
