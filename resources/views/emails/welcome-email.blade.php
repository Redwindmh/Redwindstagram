@component('mail::message')
# Welcome to <span style="color:red;">Redwindstagram</span>!
Thanks for joining. Click the button below. Or don't. Your call, really.


@component('mail::button', ['url' => 'https://www.youtube.com/watch?v=kZwhNFOn4ik', 'color' => 'error'])
Click me!!
@endcomponent
Sincerely,<br>
The <span style="color:red;">{{ config('app.name') }}</span> Team (lol it's just me)
@endcomponent
