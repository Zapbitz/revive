<!doctype html>
<html>
<head>
<title></title>
<style type="text/css">
/* CLIENT-SPECIFIC STYLES */
body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
img { -ms-interpolation-mode: bicubic; }

/* RESET STYLES */
img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
table { border-collapse: collapse !important; }
body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }

/* iOS BLUE LINKS */
a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* MOBILE STYLES */
@media screen and (max-width: 600px) {
  .img-max {
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
  }

  .max-width {
    max-width: 100% !important;
  }

  .mobile-wrapper {
    width: 85% !important;
    max-width: 85% !important;
  }

  .mobile-padding {
    padding-left: 5% !important;
    padding-right: 5% !important;
  }
}

/* ANDROID CENTER FIX */
div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="margin: 0 !important; padding: 0; !important background-color: #ffffff;" bgcolor="#ffffff">

<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
 
    Greetings {{$client->name}}, <br/>This mail consists of the status of the booking in the Revive .
 @if($type == "accept")
<br>
Your Booking of {{$doctor->name}} on {{$booking->date}} at {{$booking->time }} has been Confirmed.
<br>
@elseif($type == "reject")
<br>
Your Booking of {{$doctor->name}} on {{$booking->date}} at {{$booking->time }} has been Declined.
<br>
@endif

</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" valign="top" width="100%" background="bg.jpg" bgcolor="#3b4a69" style="background: #3b4a69 url('https://s3.ap-south-1.amazonaws.com/shells2k19/static/mailbg.jpg'); background-size: cover; padding: 50px 15px;" class="mobile-padding">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 0; font-family: Open Sans, Helvetica, Arial, sans-serif;">
                        <h1 style="margin-top:-20px;font-size: 40px; color: #565656;">Revival</h1>
                    </td>
                </tr>
                <tr>
                    @if($type == "accept")
                    <td align="center" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; padding-top: 0;">
                        <p style="color: #565656; font-size: 16px; line-height: 24px; margin: 0;">
                        Greetings {{$client->name}}, <br/>This mail consists of the status of the booking in the Revive .
                            <br />
                            <b>Note </b>
                            <br />
                            <ul>
                                <li style="text-align: left;">Your Booking of {{$doctor->name}} on {{$booking->date}} at {{$booking->time }} has been Confirmes.
                            </ul>
                            <br/>
                        </p>

                    </td>
                    @elseif($type == "reject")
                    <td align="center" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; padding-top: 0;">
                            <p style="color: #565656; font-size: 16px; line-height: 24px; margin: 0;">
                                 Sorry  {{$client->name}}, <br/>This mail consists of the status of the booking in the Revive .
                                <br />
                                <b>Note </b>
                                <br />
                                <ul>
                                    <li style="text-align: left;">Your Booking of {{$doctor->name}} on {{$booking->date}} at {{$booking->time }} has been Declined.
                                </ul>
                                <br/>
                            </p>
    
                        </td>
                    @endif
                </tr>
                <tr>
                    <td align="center" style="padding: 25px 0 0 0;">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" style="border-radius: 28px;" bgcolor="#2b388f">
                                    <a href="http://revive.in" target="_blank" style="font-size: 15px;letter-spacing: 1.5px; font-family: Open Sans, Helvetica, Arial, sans-serif; font-weight: 900; color: #fff; text-decoration: none; border-radius: 28px; background-color: #2b388f; padding: 10px 25px; border: 1px solid #FFF; display: block;"> VISIT</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td align="center" height="100%" valign="top" width="100%" bgcolor="#f6f6f6" style="padding: 40px 15px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
        </td>
    </tr>
</table>
</body>
</html>