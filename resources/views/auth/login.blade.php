<x-guest-layout>

    <div class="card card-border bg-base-100 w-96 shadow-sm">
        <div class="card-body">

            <!-- Session Status -->
            <x-alert :message="session('status')" class="mb-4" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label class="input validator w-full">
                        <input name="email" value="{{ old('email') }}" type="email" required />
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="input validator w-full">
                        <input name="password" type="password" required title="Must be more than 8 characters, including number, lowercase letter, uppercase letter" />
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="checkbox" name="remember">
                        <span class="ms-2 text-sm pointer">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="card-actions flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-primary ms-3">Log In</button>
                </div>
            </form>

        </div>
    </div>
</x-guest-layout>
