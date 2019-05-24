<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>
    </head>
    <body>
        <div class='container'>
            @if(session()->get('success'))
            <div class='alert alert-success'>
                {{session()->get('success')}}
            </div> <br/>
            @endif
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header">Add Your Product</div>
                <div class="card-body">
                    <form action="/createProduct" method="post" enctype="multipart/form-data" id="createProductForm">
                        @csrf
                        <div class="form-group">
                            <input type ="text" class="form-control" name="name" style=" margin-top:2%;" placeholder="Enter Product Name" > 
                        </div>
                        <select class="form-control" name="size" style=" margin-top:2%;">
                            <option value="1">S</option>
                            <option value="2">M</option>
                        </select>
                        <select class="form-control" name="gender" style=" margin-top:2%;">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                        <div class="form-group">
                            <input type ="text" class="form-control" name="price" style=" margin-top:2%;" placeholder="Enter Product PRice" > 
                        </div>
                        <div class="form-group">
                            <input type ="text" class="form-control" name="discount" style=" margin-top:2%;" placeholder="Enter Discount" > 
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <input type="file" name='image' id='image' class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type = "submit" class="btn btn-primary form-control" name = "add">ADD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>