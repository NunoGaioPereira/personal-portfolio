<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ $data['name'] }} - New Inquiry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body style="margin: 0; padding: 0; background: #F6F9FC; color: f4f3f1; font-family: 'Poppins', Arial, sans-serif; font-weight: 500;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
                    <tr>
                        <td align="center" style="padding: 40px 0 50px 0; color: #fff; font-size: 28px; font-weight: bold;">
                            <img style="width: 180px;" src="{{ env('APP_URL') }}/img/logo/logo_dark.svg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#fff" style="border-bottom: 1px solid #eee; padding: 30px 0 20px 0; color: #333; font-size: 24px; font-weight: 600;">
                            New Project Inquiry
                        </td>
                    </tr>
                    <!-- <tr align="center">
                        <td align="center" bgcolor="#fff" width="75%">
                            <hr color="#eee" width="%">
                        </td>
                    </tr> -->
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 30px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-size: 16px;">
                                        <p>Hello, Nuno</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-size: 16px; line-height: 20px;">
                                        <p>You have received a new project inquiry!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; font-size: 16px;">
                                        <b>Name:</b> {{ $data['name'] }}
                                        <br />
                                        <b>Email:</b> {{ $data['email'] }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #153643; padding-top: 20px; font-size: 16px; line-height: 20px;">
                                        {{$msg}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <table cellspacing="0" cellpadding="0" style="margin-top:24px;">
                                            <tr>
                                                <td bgcolor="#54b4f8">
                                                    <a href="mailto:{{$data['email']}}" target="_blank" style="padding: 14px 20px; border: 1px solid #54b4f8;border-radius: 2px;font-family: Helvetica, Arial, sans-serif;font-size: 14px; color: #ffffff;text-decoration: none;font-weight:bold;display: inline-block;">
                                                        Send email
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr align="center">
                                    <td style="color: #aaa; font-size: 14px; font-weight: 500;" width="100%">
                                        Copyright © 2022-2023, Nuno Pereira<br />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>