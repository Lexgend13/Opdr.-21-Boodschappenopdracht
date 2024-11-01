 <?php require('partials/header.php'); ?>

    <h1>Edit your grocery list</h1>
    <form method="POST" action="/NAME">
        <input name="NAME" placeholder="Product"></input>
        <input name="NUMBER" placeholder="Quantity" type="number"></input>
        <input name="price" placeholder="Price"></input>
        <button type="submit">Add to list</button>
    </form>

    

<?php require('partials/footer.php'); ?>