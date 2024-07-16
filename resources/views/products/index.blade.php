<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .link-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .link-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .link-container a:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .delete-form {
            display: inline-block;
        }
        .delete-form input[type="submit"] {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .delete-form input[type="submit"]:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }

        .edit-link {
            display: inline-block;
            padding: 8px 16px;
            background-color: #ffc107;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .edit-link:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }
    </style>
<body>
<div class="table-container">
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
    <div class="link-container">

            <a href="{{route('product.create')}}">Create Product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('product.edit',['product'=> $product])}}"  class="edit-link" >Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy',['product'=>$product])}} " class="delete-form">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>