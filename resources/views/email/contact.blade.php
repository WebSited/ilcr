@component('mail::message')

Dear Admin, 

#New Enquiry from <strong>{{ $data['name'] }}</strong>

<strong>Email: </strong>{{$data['email']}}

<strong>Subject: </strong>{{$data['subject']}}

<strong>Message: </strong>

{{ $data['message']}}

Please respond promptly to this enquiry
@endcomponent
