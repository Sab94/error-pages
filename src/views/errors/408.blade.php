<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script src="https://use.fontawesome.com/9eade826f1.js"></script>

    <title>Opps!! | 408 - Request Timeout</title>
    <link rel="shortcut icon" href="{{config('error-pages.favicon')}}" type="image/x-icon">
    <style type="text/css">
        body{margin:0 }body,html{width:100%;height:100%;background-color:{{config('error-pages.bg-color')}} }body{color:#fff;text-align:center;text-shadow:0 2px 4px rgba(0,0,0,.5);padding:0;min-height:100%;-webkit-box-shadow:inset 0 0 75pt rgba(0,0,0,.8);box-shadow:inset 0 0 75pt rgba(0,0,0,.8);display:table;font-family:"Open Sans",Arial,sans-serif }a{text-decoration:none;color:#fff;font-size:inherit;border-bottom:dotted 1px #707070 }footer{display: block;position:fixed;width:100%;height:40px;left:0;bottom:0;color:#a0a0a0;font-size:14px }.face{font-size: 10rem;}.code{display:table-cell;padding:40px 20px }.message{margin-top: 150px;}.code h1{font-size: 100px;margin-top: 30px;margin-bottom: 0;}.code h3{font-size: 30px;margin: unset;}.message h3{font-size: 20px;}
    </style>
</head>

<body>
<div class="code">
    <i class="fa fa-frown-o face" aria-hidden="true"></i>
    <h1>408</h1>
    <h3>Request Timeout</h3>
    <div class="message">
        <h3>The server timed out waiting for the reques.</h3>
    </div>
</div>



<footer>
    <p>Technical Contact: <a href=mailto:{{config('error-pages.email')}}>{{config('error-pages.email')}}</a></p>
</footer>

</body>
</html>