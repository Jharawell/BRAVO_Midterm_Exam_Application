<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romance Book List</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #fce4ec;
            margin: 20px;
            text-align: center;
        }
        h1 {
            color: #c2185b;
            font-size: 36px;
            text-shadow: 2px 2px #f8bbd0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff0f5;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #f8bbd0;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f06292;
            color: white;
            font-size: 18px;
        }
        td {
            font-size: 16px;
        }
        tr:nth-child(even) {
            background-color: #fdeef4;
        }
        .color-box {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 50%;
            border: 1px solid #c2185b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>💖 Romantic Reads 💖</h1>
        <table>
            <tr>
                <th>📖 Title</th>
                <th>✍️ Author</th>
                <th>📅 Year</th>
                <th>🎨 Cover Color</th>
            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
                <td>
                    <span class="color-box" style="background-color: {{ strtolower($book['color']) }};"></span>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
