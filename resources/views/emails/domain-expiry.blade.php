@component('mail::message')

This is a reminder that {{ $domain->name }} is expiring in {{ $days }} days on {{ $domain->expiration->format('F d, Y') }}. Please renew it as soon as possible.

@component('mail::button', ['url' => $domain->registrar_url])
Login to {{ $domain->registrar }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
