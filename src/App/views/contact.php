<?php include $this->resolve("partials/_header.php"); ?>

<section class="container mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
    <!-- Page Title -->
    <h3>Contact Us</h3>

    <hr />

    <!-- Escaping Data -->
    <div style="display: flex;
    flex-direction: column;
            position: relative;">
        <h1 style="font-size: 30px;font-weight: 300;margin-bottom: 10px">Fill Up your details </h1>
        <form>
            <label for="Name" style="font-size: 25px;">Name : </label>
            <input type="text">
            <br>
            <hr>
            <label for="Name" style="font-size: 25px;">Email : </label>
            <input type="text">
            <br>
            <hr>
        </form>
    </div>

</section>

<?php include $this->resolve("partials/_footer.php"); ?>