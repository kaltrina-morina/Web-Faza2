<?php
require_once ('CartController.php');
require_once ('WishlistController.php');
class Produkti{
    public $indicator;
    public $imageLink;
    public $productName;
    public $description;
    public $price;
    public $category;

    public function __construct($indicator, $imageLink, $productName, $description, $price, $category){
        $this->indicator=$indicator;
        $this->imageLink=$imageLink;
        $this->productName=$productName;
        $this->description=$description;
        $this->price=$price;
        $this->category=$category;
    }

    public function writeProduct(){
        return "<tr><td>".$this->indicator."</td><td>".$this->productName."</td><td>".$this->price."$</td><td>".$this->category."</td>
        <td><a href=\"../ProductManagement/editProduct.php?id=".$this->productName."\" id=\"editButton\">Edit</a></td><td><a href=\"../ProductManagement/deleteProduct.php?id=".$this->productName."\" id=\"deleteButton\">Delete</a></td><tr>";
    }
    public function __toString(){
        $wishlist = new WishlistController;
        $cart = new CartController;
        if($wishlist->exists($this->productName)){
            $favImage = '../img/favFillProd.png';
            $favLink = '../Wishlist/deleteFromWishlist.php';
        }else{
            $favImage = '../img/favProd.png';
            $favLink = '../Wishlist/addToWishlist.php';
        }
        if($cart->exists($this->productName)){
            $cartImage = '../img/cartFillProd.png';
            $cartLink = '../Cart/deleteFromCart.php';
        }else{
            $cartImage = '../img/cartProd.png';
            $cartLink = '../Cart/addToCart.php';
        }
        return "<div class=\"product\" id=\"".$this->category."\">
                    <a href=\"../ProductPage/productPage.php?id=".$this->productName."\"><img src=".$this->imageLink." ></a>
                    <div id=\"prodDesc\">
                        <div id=\"prodCart\">
                        <a href=\"".$favLink."?id=".$this->productName."\"><img src=\"".$favImage."\" class=\"Wish\"><a>
                        <a href=\"".$cartLink."?id=".$this->productName."\"><img src=\"".$cartImage."\" class=\"Cart\"></a>
                        </div><a href=\"../ProductPage/productPage.php?id=".$this->productName."\">
                        <div id=\"prodName\">
                            <h4>$this->productName</h4>
                        </div>
                        <h5>$this->price$</h5>
                    </div></a>
                </div>";
    }
}
?>