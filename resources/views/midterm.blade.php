<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-2">
        <div class="row">
            <div class="col">
                <h3 class="bg-success text-center rounded p-2 text-white" style="font-family: Times New Roman">( INVOICE )</h3>

                <table class="table table-bordered  text-center">
                    <tr class="bg-info text-white">
                        <th>ID</th>
                        <th>Item</th>
                        <th>QTY</th>
                        <th>UNIT Price</th>
                        <th>Discount</th>
                        <th>AMOUNT</th>
                    </tr>
                    @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item['item'] }}</td>
                            <td>{{ $item['qty'] }}</td>
                            <td>${{ number_format($item['unit_price'], 2) }}</td>
                            <td>{{ $item['discount'] * 100 }}%</td>
                            <td>${{ number_format($item['amount'], 2) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="3" class="bg-info text-white">Thank you for your business!!</th>
                        <th colspan="2">SUBTOTAL:</th>
                        <th>${{ number_format($subtotal, 2) }}</th>
                    </tr>
                    <tr>
                        <th colspan="2">Max Price:</th>
                        <th>${{ number_format($maxPrice, 2) }}</th>
                        <th colspan="2">TAX RATE:</th>
                        <th>5.00%</th>
                    </tr>
                    <tr>
                        <th colspan="2" class="price">Min Price:</th>
                        <th>${{ number_format($minPrice, 2) }}</th>
                        <th colspan="2">TAX:</th>
                        <th>${{ number_format($tax, 2) }}</th>
                    </tr>
                    <tr>
                        <th colspan="2" class="price">Total Item:</th>
                        <th>{{ $totalItems }}</th>
                        <th colspan="2">TOTAL:</th>
                        <th>${{ number_format($total, 2) }}</th>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</body>
</html>