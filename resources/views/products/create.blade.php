<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="form-container">
<h2>Product Form</h2>

        <div>
            @if($errors->any())
            <ul>
                @foreach(@errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
           @endif
        </div>
    
    <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method("post")

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty">
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" placeholder="Price">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" placeholder="Description">
        </div>

        <div class="form-group">
            <label>Save</label>
            <input type="submit" value="Save">
        </div>




        
    </form>
    </div>
</body>
</html>