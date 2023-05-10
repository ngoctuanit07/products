@component('mail::message')
    # Order Confirmation

    Thank you for your order!

    {{-- Custom content goes here --}}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
