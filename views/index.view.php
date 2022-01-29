<?php //dd(asset("hello/worle/hhh"));?>
<?php require "views/partials/heading.php"; ?>

<div>{{ message }}</div>
<div class="grid grid-cols-[minmax(min-content,1fr)_minmax(min-content,5fr)] justify-items-stretch shadow-lg">
    <div class="justify-self-stretch bg-green-500 flex flex-col items-center items-stretch gap-2 px-4 py-5 border-r-[35px] -mr-[30px] border-r-gray-800">
        <div class="dark:text-white px-4 py-3 bg-orange-400 hover:bg-orange-500">Create</div>
        <div class="dark:text-white px-4 py-3 bg-orange-400 hover:bg-orange-500">Show</div>
        <div class="dark:text-white px-4 py-3 bg-orange-400 hover:bg-orange-500">Delete</div>
        <div class="dark:text-white px-4 py-3 bg-orange-400 hover:bg-orange-500">Update</div>
    </div>
    <div class="justify-self-stretch bg-red-500 rounded-l-[2rem] flex flex-col">
        <div class="self-start flex items-center flex-col my-3 mx-6">
            <h1 class="dark:text-white self-start">Summit Your Name</h1>
            <form action="/names" method="POST">
                <input type="text" name="name"
                       class="transform bg-gray-300 px-3 py-2 text-blue-600 focus:outline-none rounded placeholder-blue-400" placeholder="Add Item" autofocus>
                <input type="submit" class="px-5 py-2 ml-2 rounded text-white bg-blue-500 " value="submit">
            </form>
        </div>
        <div class="self-center rounded-xl mx-4 mb-4 grid bg-blue-400 flex justify-center items-center p-5 ">
            <div class="grid grid-cols-3 auto-cols-min gap-3 my-3">
                <?php foreach ($users as $key => $user): ?>
                    <div class="font-bold font-Dancing bg-slate-500 text-left text-white hover:bg-slate-600 flex items-center overflow-hidden px-4 py-2.5"><?= $user->name ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php require "views/partials/footer.php"; ?>


