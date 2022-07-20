<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hanflix</title>
	<link rel="stylesheet" type="text/css" href="verification.css">
</head>
<body>
	<div class="container">
        <div class="logo">
        <img src="./images/logo2.png">
            <!-- <a href="/">
                <div class="w-20 h-20 fill-current text-gray-500" />
            </a> -->
        </div>

        <div class="container">
            <!-- {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }} -->

            <h3>Verify your Email</h3><br>
			<p id="p1">We have sent an email to <b>---------</b></p><br>
			<p id="p2">You need to verify your email to continue. Ifyou have not received the verification email, please check your "Spam" or "Bulk Email" folder. You can also click the resend button below to have another email sent to you.</p><br><br>
			<button>Resend verification</button>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="">
                @csrf

                <div>
                    <button>
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>

	</div>
</body>
</html>