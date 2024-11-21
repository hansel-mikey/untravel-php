<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment page</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="container">
        <form action="">
        <div class="row">
            <div class="col">
                <h3>Billing Address</h3>
                <div class="input-box">
                    <span>Full name:</span>
                    <input type="text" placeholder="John Deo">
                </div>
                <div class="input-box">
                    <span>Email:</span>
                    <input type="text" placeholder="abc@gmail.com">
                </div>
                <div class="input-box">
                    <span>Address:</span>
                    <input type="text" placeholder="room no - street - locality">
                </div>
                <div class="input-box">
                    <span>city:</span>
                    <input type="text" placeholder="Mumbai">
                </div>
                <div class="input-box">
                    <span>State:</span>
                    <input type="text" placeholder="India">
                </div>
                <div class="flex">
                    <div class="input-box">
                        <span>Zip code:</span>
                        <input type="text" placeholder="123">
                    </div>
                </div>
            </div>

            <!--payment-->
            <div class="col">
                <h3>Payment</h3>
                <div class="input-box">
                    <span>Card accepted:</span>
                    <input type="text" placeholder="Mr.John Deo">
                </div>
                <div class="input-box">
                    <span>Name on card:</span>
                    <input type="text" placeholder="Mr.John Deo">
                </div>
                <div class="input-box">
                    <span>Credit card number:</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="input-box">
                    <span>Exp Month:</span>
                    <input type="text" placeholder="January">
                </div>
                <div class="input-box">
                    <span>Exp year:</span>
                    <input type="number" placeholder="2022">
                </div>
                <div class="flex">
                    <div class="input-box">
                        <span>cvv:</span>
                        <input type="number" placeholder="1234">
                    </div>
                </div>
            </div>
        </div>
           <input type="submit" value="Proceed to checkout" class="submit-btn"> 
        </form>
    </div>
</body>
</html>