<?php require "views/partials/heading.php"; ?>

<?php foreach ($users as $key => $user): ?>
     <ul>
        <li><?= $user->name ?></li>
     </ul>
<?php endforeach; ?>

<h1>Summit Your Name</h1>
<form action="/names" method="POST">
    <input type="text" name="name">
    <input type="submit" value="submit">
</form>


<?php require "views/partials/footer.php"; ?>


