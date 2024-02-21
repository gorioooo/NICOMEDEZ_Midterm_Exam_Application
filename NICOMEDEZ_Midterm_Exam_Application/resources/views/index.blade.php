<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realme Phones</title>
</head>
<body>
    <h1>Realme Phones</h1>

    <ul>
        @foreach($products as $product)
            <li>
                <strong>Name:</strong> {{ $product['name'] }}<br>
                <strong>Spec:</strong> {{ $product['spec'] }}<br>
                <strong>Price Range:</strong> {{ $product['price_range'] }}
            </li>
            <br>
        @endforeach
    </ul>
</body>
</html>
