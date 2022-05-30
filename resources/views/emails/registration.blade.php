<!DOCTYPE html>
<html lang="en">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ URL::asset('public/frontend/assets/css/style.css') }}">

<body>
	
<p>Dear {{ $name }},</p>
<p>Your account has been created, please activate your account by clicking this link</p>
<p><a href="{{ url('student/verify/'.$remember_token) }}" class="default-btn">
	Click Here
</a></p>

<p>Thanks</p>

</body>

</html> 