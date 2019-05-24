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
        <h1>YOUR SHOPPING BAG</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>SIZE</th>
                        <th>GENDER</th>
                        <th>DISCOUNT</th>
                        <th>Image</th>
                        <th>PRICE</th>
                        <th>remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>
                            {{$data->size == 1 ? 'M':'S'}}
                        </td>
                        <td>
                            {{$data->gender == 1 ? 'MALE':'FEMALE'}}
                        </td>
                        <td>{{$data->discount}}</td>
                        <td>
                            <img class="img-responsive" style="max-height:40px;max-width:40px" src="{{!empty($data->image) && file_exists(public_path('images/').$data->image) ? asset('images/'.$data->image): asset('images/noimage.png') }}">
                        </td>
                        <td>{{$data->price}}</td>
                        <td>
                            <span>
                                <form action="{{ route('deleteProduct', $data->id)}}" method="post">
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class='col-md-12'>
            <div class="col-md-6"><h5>Enter Promotional code</h5></div>
            <div class="col-md-3"><input type="text" id="promoCode"></div>
            <div class="col-md-3"><button type="button" id ="apply">Apply</button></div>
        </div>

        <div class='col-md-12'><h5>Subtotal</h5></div>

    </body>
</html>
