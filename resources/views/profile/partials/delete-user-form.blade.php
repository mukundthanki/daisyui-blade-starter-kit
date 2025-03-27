<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium ">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm ">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button
        x-data=""
        x-on:click.prevent="my_modal_1.showModal()"
        class="btn btn-error"
    >{{ __('Delete Account') }}</button>
    <dialog id="my_modal_1" class="modal">

        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <h2 class="text-lg font-medium ">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm ">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="">
                <form method="post" action="{{ route('profile.destroy') }}" class="">
                    @csrf
                    @method('delete')

                    <div class="mt-6">
                        <label class="input validator w-full">
                            <input name="password" type="password" required placeholder="Confirm Password" title="Must be more than 8 characters, including number, lowercase letter, uppercase letter" />
                        </label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <button type="submit" class="mt-3 btn btn-error">
                        {{ __('Delete Account') }}
                    </button>
                </form>
            </div>
        </div>

    </dialog>
</section>
