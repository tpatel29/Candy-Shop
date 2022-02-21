<?php
    include("../views/header.php")
?>
<div class="centered resposive" >
        <form class="form1" >
            <h1 >Filters </h1>
            <labal for="sort">Sort By: </labal>
            <select id="sort" onchange="ajaxFunction1()">
                <option value=''></option>
                <option value='price'>Price</option>
                <option value='name'>Name</option>
            </select>
            <labal for="price">Filter By Price: </labal>
            <select id="price" onchange="ajaxFunction1()">
                <option value=''></option>
                <option value='1'> ≥ $1</option>
                <option value='2'> ≥ $2</option>
                <option value='5'> ≥ $5</option>
            </select>
            <labal for="size">Filter By Size: </labal>
            <select id="size" onchange="ajaxFunction1()">
                <option value=''></option>
                <option value='Regular'> Regular</option>
                <option value='King'> King </option>
                <option value='Minis'> Minis </option>
                <option value='Share'> Share </option>
            </select>
            <labal for="flavor">Filter By Flavor: </labal>
            <select id="flavor" onchange="ajaxFunction1()">
                <option value=''></option>
                <option value='Chocolate'>Chocolate</option>
                <option value='Fruity'>Fruity</option>
                <option value='Dark Chocolate'>Dark Chocolate</option>
                <option value='Peanut'>Peanut</option>
            </select>
            <labal for="brand">Filter By Brand: </labal>
            <select id="brand" onchange="ajaxFunction1()">
                <option value=''></option>
                <option value='Hershey'>Hershey</option>
                <option value='Jolly Rancher'>Jolly Rancher</option>
                <option value='KitKat'>KitKat</option>
                <option value='M&M'>M&M</option>
            </select>

        </form>
        <div id = 'ajaxDiv'>
            <?php
                $sort = "";
                $size = "";
                $brand = "";
                $flavor = "";
                $price = "";
                include("./product-List-Form.php")
            ?>
        </div>
        <br><br><br>
    </div>
</div>

<?php
    include("../views/footer.php")
?>
