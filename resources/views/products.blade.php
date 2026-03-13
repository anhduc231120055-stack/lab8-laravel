<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Danh sách sản phẩm</h2>

    <table class="table table-bordered table-striped table-hover">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
            </tr>
        </thead>

        <tbody>
        @foreach($products as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ number_format($p->price) }} VND</td>
            </tr>
        @endforeach
        </tbody>

    </table>

</div>

</body>
</html>