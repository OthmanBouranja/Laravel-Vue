<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> --}}
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    {{-- <div class="my-3 d-flex justify-content-center align-items-center">

        {{ $categories->links('pagination::bootstrap-4') }}
    </div> --}}



<div class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">category_id</th>
            <th scope="col">sub_categories</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                
                
            <tr>
                <th scope="row"> {{$product->id }} </th>
                <td> {{ $product->name }} </td>
                <td>{{$product->category_id  }}  </td>

                
                @foreach ($sub_category as $sub_cat)
                    <td>{{$sub_cat->category_id  }}</td>
                @endforeach

                {{-- <td>{{$product->$sub_category->category_id  }}  </td> --}}
              </tr>


            @endforeach



        
        
        
        </tbody>
      </table>
    
</div>




</body>
</html>