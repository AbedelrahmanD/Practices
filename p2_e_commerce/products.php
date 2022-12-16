<?php include("template/components/head.php");
$products = Product::get();



print_r($products);
?>
<?php foreach ($products as $product) : ?>
    <?=$product["name_ar"]?>

    <?php endforeach; ?>

<?php include("template/components/footer.php") ?>