<x-guest-layout>
    <div class="card card-border bg-base-100 w-96 shadow-sm">
        <div class="card-body">

            <div class="mb-4 text-sm">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-alert :message="session('status')" class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label class="input validator w-full">
                        <input name="email" value="{{ old('email') }}" type="email" required/>
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary ms-3">{{ __('Email Password Reset Link') }}</button>
                </div>
            </form>

        </div>
    </div>
</x-guest-layout>
