<?php
    include("../views/header.php")
?>
<div class="centered" >
        <form class="form1" >
            <h1 >Filters </h1>
            <labal for="sort">Sort By: </labal>
            <select id="sort" onchange="ajaxFunction1()">
                <option value='price'>Price</option>
                <option value='name'>Name</option>
            </select>
            <labal for="filter">Filter By: </labal>
            <select id="filter" onchange="ajaxFunction1()">
                <option value='price'>Price</option>
                <option value='name'>Name</option>
                <option value='flavor'>Flavor</option>
                <option value='brand'>Brand</option>
            </select>
        </form>
        <div id = 'ajaxDiv'>
            <?php
                $sort="";
                $filter="";
                include("./product-List-Form.php")
            ?>
        </div>
        <br><br><br>

    </div>

</div>

<?php
    include("../views/footer.php")
?>
