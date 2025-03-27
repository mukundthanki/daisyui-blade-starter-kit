<x-guest-layout>
    <div class="card card-border bg-base-100 w-96 shadow-sm">
        <div class="card-body">

            <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label class="input validator w-full">
                <input name="name" value="{{ old('name') }}" type="text" placeholder="Name" required/>
            </label>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label class="input validator w-full">
                <input name="email" value="{{ old('email') }}" type="email" placeholder="mail@site.com" required/>
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

        <div class="card-actions flex items-center justify-end mt-4">
            <a class="underline text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="ms-4 btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </form>

        </div>
    </div>
</x-guest-layout>
