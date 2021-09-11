@component('mail::message')
Hello **{{$name}}**,  {{-- use double space for line break --}}
Welcome to SaidalyiaOnline WebSite as Admin!  
This Link will expire after 10 m
@component('mail::button', ['url' => $link])
Login Now
@endcomponent
Mayer Emad Milad :)
@endcomponent