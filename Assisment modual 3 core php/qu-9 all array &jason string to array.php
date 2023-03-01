
<!-- types of array  -->

<!--  a) index array or numeric array -->
<!--  b) associative array  -->
<!--  c) multidementional array  -->


<!-- jason string -->

<!DOCTYPE html>
<html>
<body>

<h2>Creating an Array from JSON</h2>
<p id="demo"></p>

<script>
const myJSON = '["Ford", "BMW", "Fiat"]';
const myArray = JSON.parse(myJSON);
document.getElementById("demo").innerHTML = myArray;
</script>

</body>
</html>