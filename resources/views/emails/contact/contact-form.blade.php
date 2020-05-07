@component('mail::message')

# Thank you for your message

<strong>Name</strong> <br/> {{ $data['name'] }} <br/>
<strong>Email</strong> <br/> {{ $data['email'] }} <br/>
<strong>Message</strong> <br/>
{{ $data['message'] }}
@endcomponent
