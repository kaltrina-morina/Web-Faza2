<?php include '../config.php'?>
<?php require_once('../Objects/User.php');
require_once ('../Objects/UserController.php');
$users = new UserController;
$allUsers = $users->readData();?>

<?php require_once('../Objects/Produkti.php');
require_once('../Objects/ProduktiController.php');
$produktet = new ProduktiController;
$allProducts = $produktet->readData();?>

<?php require_once('../Objects/kontakti.php');
require_once('../Objects/ContactController.php');
$kontakti = new ContactController;
$allContacts = $kontakti->readData();?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboardStyle.css?v=<?=$version?>">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php include '../header/header.php'?>
    <div id="categMain">
        <div id="rightSide">
            <table id="userTable">
                <tr><td colspan="9" id="userHeader">Users Table</td></tr>
                <tr><th>Name</th><th>Birthday</th><th>Gender</th><th>Email</th><th>Password</th><th>Role</th></tr>
                <?php foreach($allUsers as $user){
                    $userString = new User($user['userName'],$user['userSurname'],$user['userDay'],$user['userMonth'],$user['userYear'],$user['userGender'],$user['userEmail'],$user['userPassword'],$user['userRole']);

                    echo $userString;
                }?>
            </table>
            <table id="productTable">
                <tr><td colspan="6" id="productHeader">Courses Table</td></tr>
                <tr><th>ID</th><th>Name</th><th>Price</th><th>Category</th></tr>
                <?php foreach($allProducts as $product){
                    $productString = new Produkti($product['indicator'], $product['imageLink'], $product['productName'], $product['productDescription'], $product['productPrice'], $product['category']);
                    
                    echo $productString->writeProduct();
                }
                ?>
                <tr><td colspan="6"><a href="../ProductManagement/createProduct.php" id="newProduct">+ ADD COURSES</a></td></tr>
            </table>

            <table id="userTable">
                <tr><td colspan="9" id="userHeader">Contact Table</td></tr>
                <tr><th>Name</th><th>Last name</th><th>Email</th><th>Message</th>
                <?php foreach($allContacts as $contact){
                    $contactString = new Contact($contact['firstname'],$contact['lastname'],$contact['email'],$contact['message']);

                    echo $contactString;
                }?>
            </table>
        </div>
    </div>
    <?php include '../footer/footer.php'?>
    <script src="main.js"></script>
</body>
</html>