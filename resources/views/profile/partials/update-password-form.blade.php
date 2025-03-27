<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        @if (session('status') === 'profile-updated')
            <x-alert :message="'Your password has been updated successfully.'" class="mt-1" />
        @endif
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="mt-4">
            <label class="input validator w-full">
                <input name="current_password" type="password" required placeholder="Password" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter" />
            </label>
            <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
        </div>

        <!-- New Password -->
        <div class="mt-4">
            <label class="input validator w-full">
                <input name="password" type="password" required placeholder="New Password" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter" />
            </label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm New Password -->
        <div class="mt-4">
            <label class="input validator w-full">
                <input name="password_confirmation" type="password" required placeholder="Confirm New Password" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter" />
            </label>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </form>
</section>
