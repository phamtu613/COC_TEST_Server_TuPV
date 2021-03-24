<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful course registration</title>
</head>

<body>
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#dcf0f8"
        style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
        <tbody>
            <tr>
                <td align="center" valign="top"
                    style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">


                    <table border="0" cellpadding="0" cellspacing="0" width="600" style="margin-top:15px">
                        <tbody>

                            <tr>
                                <td>
                                    <table border="0" cellpadding="0" cellspacing="0" style="line-height:0">
                                        <tbody>

                                        </tbody>
                                    </table>
                                </td>

                            </tr>

                            <tr>
                                <td align="center" valign="bottom" id="m_-9033387575067664876headerImage">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>

                                                <td valign="top" bgcolor="#FFFFFF" width="100%" style="padding:0">
                                                    <a style="border:medium none;text-decoration:none;color:#007ed3"
                                                        href="" target="_blank">
                                                        <img alt="Stock"
                                                            src="http://localhost/testTupv/public/client/img/banner-mail.png"
                                                            style="border:none;outline:none;text-decoration:none;display:inline;height:auto"
                                                            class="CToWUd">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>

                            <tr style="background:#fff">
                                <td align="left" width="600" height="auto" style="padding:15px">
                                    <table>
                                        <tbody>
                                            <tr>

                                                <td>
                                                    <h1
                                                        style="font-size:14px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">
                                                        Congratulations {{ $name }} Test on successful
                                                        registration for the course!
                                                    </h1>


                                                    <p
                                                        style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                                        We have just checked your order. We will contact Contact you as
                                                        soon as possible, please pay attention to the number electricity
                                                        phone ({{ $tel }}) for care by a counselor The earliest
                                                    </p>
                                                    <h3
                                                        style="font-size:13px;font-weight:bold;color:#02acea;text-transform:uppercase;margin:20px 0 0 0;border-bottom:1px solid #ddd">
                                                        INFORMATION LINE </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th align="left" width="50%"
                                                                    style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold">
                                                                    Billing Information</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td valign="top"
                                                                    style="padding:3px 9px 9px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                                                    <span style="text-transform:capitalize">Name:
                                                                        {{ $name }}</span><br>
                                                                    <span>Email: {{ $email }}</span><br>
                                                                    <span>Birthday: {{ $birthday }}</span><br>
                                                                    <span>Address: {{ $address }}</span><br>
                                                                    <span>Phone: {{ $tel }}</span><br>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2
                                                        style="text-align:left;margin:10px 0;border-bottom:1px solid #ddd;padding-bottom:5px;font-size:13px;color:#02acea">
                                                        COURSE DETAILS</h2>
                                                    <table cellspacing="0" cellpadding="0" border="0" width="100%"
                                                        style="background:#f5f5f5">
                                                        <thead>
                                                            <tr>
                                                                <th align="left" bgcolor="#02acea"
                                                                    style="padding:6px 9px;color:#fff;text-transform:uppercase;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                    Course</th>
                                                                <th align="left" bgcolor="#02acea"
                                                                    style="padding:6px 9px;color:#fff;text-transform:uppercase;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">
                                                                    Detail</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody bgcolor="#eee"
                                                            style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                                                            <tr>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <strong>Name of the course</strong>
                                                                </td>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <span>{{ $course_name }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <strong>Start date</strong>
                                                                </td>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <span>{{ $start_date }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <strong>End date</strong>
                                                                </td>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <span>{{ $end_date }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <strong>Start time</strong>
                                                                </td>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <span>{{ $start_study }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <strong>End time</strong>
                                                                </td>
                                                                <td align="left" valign="top" style="padding:3px 9px">
                                                                    <span>{{ $end_time }}</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <br>
                                                    <p
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">
                                                        TuPv thank you very much<br>
                                                    </p>
                                                    <p
                                                        style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right">
                                                        <strong><a
                                                                style="color:#00a3dd;text-decoration:none;font-size:14px"
                                                                href="" target="_blank">TestTuPv</a></strong><br>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <table width="600">
                        <tbody>
                            <tr>
                                <td>
                                    <p style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal"
                                        align="left">
                                        You have received this email because you signed up for the course at TestTuPv
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
