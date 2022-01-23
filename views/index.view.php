<?php require "views/partials/heading.php"; ?>

<div class="flex">
    <div class="">Create</div>
    <div class="">Show</div>
    <div class="">Delete</div>
    <div class="">Update</div>
</div>
<div class="w-1/2 flex items-center flex-col mb-3">
    <h1 class="dark:text-blue-500 text-black">Summit Your Name</h1>
    <form action="/names" method="POST">
        <input type="text" name="name"
               class="transform bg-gray-300 px-3 py-2 text-blue-600 focus:outline-none rounded-l-full" autofocus>
        <input type="submit" class="px-5 py-2 rounded-full cus-sumit text-white" value="submit">
    </form>
</div>
<div class="bg-blue-400 flex justify-center items-center w-2/3 p-5 rounded">
    <div class="grid grid-cols-3 auto-cols-min gap-3 my-3">
        <?php foreach ($users as $key => $user): ?>

            <div class="p-3 text-[400px] bg-green-500 text-left text-white hover:bg-black flex items-center overflow-hidden"><?= $user->name ?></div>

        <?php endforeach; ?>
    </div>

</div>

<?php require "views/partials/footer.php"; ?>


