<x-guest-layout>
    <div class="card card-border bg-base-100 w-96 shadow-sm">
        <div class="card-body">

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div>
                    <label class="input validator w-full">
                        <input name="email" value="{{ old('email') }}" type="email" required/>
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="input validator w-full">
                        <input name="password" type="password" required placeholder="Password" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter" />
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label class="input validator w-full">
                        <input name="password_confirmation" type="password" required placeholder="Confirm Password" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter" />
                    </label>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-guest-layout>
