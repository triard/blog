<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div>
                <x-jet-label for="mobile" value="{{ __('Mobile') }}" />
                <x-jet-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autofocus autocomplete="mobile" />
            </div>
            <div>
                <x-jet-label for="about" value="{{ __('About') }}" />
                <x-jet-input id="about" class="block mt-1 w-full" type="text" name="about" :value="old('about')" required autofocus autocomplete="about" />
            </div>
            <div>
                <x-jet-label for="expression" value="{{ __('Expression') }}" />
                <x-jet-input id="expression" class="block mt-1 w-full" type="text" name="expression" :value="old('expression')" required autofocus autocomplete="expression" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>