@component('mail::message')
# Dear Applicant

Your application request has been confirmed. Please click the button to print admit card.

@component('mail::button', ['url' => 'http://localhost/laravel_app/university-admission/student/admit-card'])
Admit Card
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
