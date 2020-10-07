<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <!-- For development, pass document through inliner -->
    <link href="{{ asset('css/simple.css') }}" rel="stylesheet">
    <style type="text/css">
    /* Your custom styles go here */
    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <h1>Hoky</h1>

                    </td>
                </tr>
                <tr>
                    <td class="content">
                        <h2>Hi {{$memberEmail}},</h2>

                        <p>{{!!$content!!}}</p>

                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        <a href="#" class="button">Share the Awesomeness</a>
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <p>By the way, if you're wondering where you can find more of this fine meaty filler, visit <a href="http://baconipsum.com">Bacon Ipsum</a>.</p>

                        <p><em>– Mr. Pen</em></p>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>Sent by <a href="#">Company Name</a>, 1234 Yellow Brick Road, OZ, 99999</p>
                        <p><a href="mailto:">hello@company.com</a> | <a href="#">Unsubscribe</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>