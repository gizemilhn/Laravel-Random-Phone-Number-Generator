<!doctype html>
<html lang="en">
<head>
    <title>Phone Number Generating</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial SansSerif, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            height: 100vh;
            background-color: #3c4653;
        }
        .container {
            background-color: #363d53;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .btn-custom {
            padding: 10px 20px;
            color: #ffffff;
            border-color: #f8f9fa;
            background-color: transparent;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: steelblue;
            color: lightsteelblue;
        }
        .number {
            margin-top: 20px;
            font-size: 1.6em;
            color: #9ca3af;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Generate Random Phone Number</h1>
    <button class="btn-custom" id="generate">Create</button>
    <div class="number" id="phonenum"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#generate').click(function() {
            $.ajax({
                url: '/',
                type: 'POST',
                data: {
                    "_token": $("meta[name='csrf-token']").attr("content"),
                },
                success: function(data) {
                    $('#phonenum').text(data.number);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
</body>
</html>
