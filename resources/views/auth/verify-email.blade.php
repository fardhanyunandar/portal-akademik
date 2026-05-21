<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </x-slot>

        @if (session('resent'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to your email address.') }}
            </div>
        @endif

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Before proceeding, please check your email for a verification link.') }}
        </div>

        <div class="mb-6 text-sm text-gray-600">
            {{ __('If you did not receive the email,') }}
            <form method="POST" action="{{ route('verification.send') }}" class="inline">
                @csrf
                <button type="submit" class="underline text-blue-600 hover:text-blue-800">
                    {{ __('click here to request another') }}
                </button>.
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
