<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product Details</title>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    max-width: 1200px;
    /* width: 100%; */
    margin: 20px auto;
    /* height: 800px; */
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.product-image img {
    max-width: 100%;
    height: auto;
    border-radius: 20px;
    margin-top: 120px;
    margin-left: 60px;
}

/* .product-details {
    margin-left: 20px;
} */

h1 {
    font-size: 2em;
    margin-bottom: 10px;
    
}
h2{
    font-size: 1.5em;
    margin-top: 40px;
    margin-left: 90px;
}
.price {
    font-size: 1.5em;
   margin-top: 1px;
    margin-bottom: 15px;
    margin-left: 90px;
}


h6 {
    font-size: 1.3em;
   margin-top: 1px;
    margin-bottom: 15px;
    margin-left: 90px;
}
.stock{
    font-size: 1.4em;
color: #21b321;
margin-top: 1px;
    margin-left: 90px;
    margin-bottom: 15px;
}
.feature{
    margin-left: 130px;
    margin-top: 1px;
    margin-bottom: 8px;
}

.buy-button {
    padding: 10px 20px;
    font-size: 1em;
    color: #fff;
    background-color: blue;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    margin-left: 120px;

    
}

.buy-button:hover {
    background-color: #3232bc;;
}
.title{
    text-align: center;
    color: #b605c9;
}
</style>
</head>
<body><h1 class="title">WELCOME TO SAANJEEVMART</h1>
    <div class="container">
        <div class="product-image">
            <img  src="box8-img.jpg" alt="Product Image">
        </div>
        <div class="product-details">
            <h1>Product Details</h1>
            <h2>Latest styles | Dresses, kurta & more | 50% - 80% off</h2>
         
            <h3 class="price">Price <del style="color: red;"> ₹300</del> ₹200</h3>
           <h5 class="stock">Stock : Available</h5>
           <h6>Product Feature</h6>
           <ul class="feature">
         <li class=""> Enhances body shape</li>
         <li>Comfortable against skin</li>
         <li> Up-to-date fashion choices</li>
         <li>Suitable for occasions</li>
        
         <li>Fast & free Delevery</li>
         <li>  100% Orginal</li>
         <li>Inclusive fit option</li>
         <li>..more</li>
        </ul>
            <button class="buy-button"onclick="window.location.href='form.php'">Buy Now</a></button>
        </div>
        <div class="im">
            <img src="girl-removebg-preview.png" alt="img">
        </div>
    </div>
</body>
</html>