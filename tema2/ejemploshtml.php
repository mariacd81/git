<?php
echo "maria<br>";
echo "maria 'a'";
?>
<script language="php">
    echo "<p>con php</p>";
</script>


<?php
printf("%d", "17.999");
echo "<br>";
printf("%.3f", "17.999");
echo "<br>";
printf("%s", "17.999");



$var = “uno”;
$$var = “dos”;
print ($var); // produce el texto: “uno”
print ($uno); // produce el texto: “dos”
print ($$var); // produce el texto: “dos”
print (${$var});
