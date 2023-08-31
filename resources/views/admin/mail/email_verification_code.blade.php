<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Document</title>
</head>
<body style="font-family: 'Roboto', 'sans-serif'">
    <table  border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
        <tr>
            <td class="center" align="center" valign="top">
              <center>
                <table class="container">
                    <tr>
                      <td>
                        <div align="right">
                            <img style="width: 44px; height:50px;" src="{{URL::asset('assets/images/kjora-black-logo.png')}}" alt="LOGO">
                        </div>
                        <h1 style="color: black; font-size: 30px; margin-bottom: 0.5rem;">Reset your password?</h1>
                        <p style="font-size: 15px; letter-spacing: 0.3px;">If you requested a password reset for <span>@</span>{{$user_name}},
                            <br>use the confirmation code below to complete the process.<br>
                             If you didn’t make this request, ignore this email. </p>
                             <h2 style="color: black; font-size: 16px; margin: 1rem 0;">{{$code}}</h2>
                             <h1 style="color: black; font-size: 20px; margin-bottom: 0.5rem;">Getting a lot of password reset emails?</h1>
                             <p style="font-size: 15px; letter-spacing: 0.3px;">You can change your <a href="{{url('player/more')}}"> account settings </a> to require <br> personal information to reset your password. </p>
                             <p style="color: grey; text-align: center; margin-top: 3rem; font-size: 14px;" >This email was meant for <span>@</span>{{$user_name}}</p>
                      </td>
                  </tr>
                </table>
              </center>
            </td>
          </tr>
    </table>
</body>

