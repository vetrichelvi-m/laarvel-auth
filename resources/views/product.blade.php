

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
 
    <div class="card" style="width: 18rem;">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      
        @foreach ($Product as $product)
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <form action="/add_to_card" method="POST">
            @csrf 
            <input type="hidden" placeholder="Enter Email" name="product_id" value="{{ $product->id }}" required>
            <button class="btn btn-primary">Add Card</button>
            </form>

        </div>
        @endforeach
    </div>
    </div>
</body>
</html>