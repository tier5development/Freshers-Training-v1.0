<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">add product</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('postShop')}}" method="POST">
                        <input type="text" name="product_name" required class="form-control">
                        <button type="submit" class="btn btn-default">submit</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Shop Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $x=>$each_product)
            <tr>
                <td>{{$each_product->name}}</td>
                @foreach($each_product->shops as $y=>$each_shop)
                    <td>{{$each_shop->name}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div >
    <p>duisahdkasjdklsdfkasdopksafpdo</p>
</div>
</body>
</html>
