<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Hello World</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: #f8fafc;
        }
        .card {
            text-align: center;
            padding: 3rem 4rem;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        h1 {
            color: #FF2D20;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        p {
            color: #64748b;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Hello, StudentInk!</h1>
        <p>Served by Laravel {{ app()->version() }}</p>
    </div>
</body>
</html>
