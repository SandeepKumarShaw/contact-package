@component('mail::message')
# Introduction

There is a nuw query from. {{ $name }}

{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
