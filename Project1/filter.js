//add ajax function
//
function ajaxFunction1() {
    var ajaxRequest;  // The variable that makes Ajax possible!
    try {
        // Opera 8.0+, Firefox, Safari
        ajaxRequest = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer Browsers
        try {
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    ajaxRequest.onreadystatechange = function () {
        if (ajaxRequest.readyState == 4) {
            var ajaxDisplay = document.getElementById('ajaxDiv');
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    }
    var sort = document.getElementById('sort').value;
    var price = document.getElementById('price').value;
    var size = document.getElementById('size').value;
    var flavor = document.getElementById('flavor').value;
    var brand = document.getElementById('brand').value;
    var queryString = "?sort=" + sort + "&price=" + price + "&size=" + size + "&flavor=" + flavor + "&brand=" + brand;
    ajaxRequest.open("GET", "./product_ajax.php" + queryString, true);
    ajaxRequest.send(null);
}
