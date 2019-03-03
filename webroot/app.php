<html lang="en">
<head>
<TITLE>Products</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <h1>Products</h1>
    <?php
	require_once "product_gallery.php";
    ?>
    <div class="clear-float"></div>
    <div id="shopping-cart">
        <div class="txt-heading">
            Shopping Cart <a id="btnEmpty" class="cart-action"
                onClick="cartAction('empty','');"><img
                src="images/icon-empty.png" /> Empty Cart</a>
        </div>
        <div id="cart-item">

        </div>
    </div>
</body>
</html>
