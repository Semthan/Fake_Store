<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Fakestore</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <?php


            $url = "https://fakestoreapi.com/products";


            $json = file_get_contents($url);


            $data = json_decode($json, true);


            foreach ($data as $key => $product) {

                $card = '';
                $card .=
                    "<div class='card m-2' style='width: 18rem;'>
                        <img src='$product[image]' class='card-img-top'>
                        <div class='card-body'>
                            <h3 class='card-title'>$product[title]</h3>
                            <p class='card-text'>$product[description]</p>
                            <h5>$product[price]$</h5>
                        </div>
                    </div>";
                echo $card;
            }
            ?>
        </div>
    </div>
</body>

</html>