<?php

/*
Prendere un testo abbastanza lungo, contenente diverse frasi.
Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un
nuovo paragrafo.
*/

$text="

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus euismod enim non finibus. Etiam aliquet, dolor ut commodo convallis, magna lectus laoreet neque, vitae finibus massa orci sed nunc. Mauris mauris augue, dignissim eget congue non, efficitur vel velit. Quisque non est et libero interdum mattis. Vestibulum luctus porttitor ipsum, nec ultricies augue. Aliquam quis ipsum quis diam fermentum luctus. Cras a turpis enim. Donec magna justo, mattis nec iaculis ut, accumsan ut ante. Vivamus et cursus mauris. Sed at varius erat. Mauris ac laoreet massa. Nunc commodo dictum sem, eu cursus nisi egestas ac. Donec laoreet dapibus sem non condimentum. Mauris tempor faucibus eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum aliquet nulla nulla, et semper dui molestie sed.

Maecenas turpis sem, malesuada et orci eleifend, ultricies tristique dolor. Maecenas et mattis elit. Fusce porta, odio venenatis volutpat rhoncus, nisi risus scelerisque diam, sed venenatis mi sem sit amet odio. Nunc sodales tincidunt sem, nec tempor massa. Praesent tempus id mauris egestas pellentesque. Vestibulum vestibulum felis vel magna condimentum, non feugiat elit posuere. Nullam metus ligula, pulvinar ut tempor eget, consectetur non turpis.

Donec interdum cursus nunc id euismod. Aliquam at urna euismod, pharetra massa vel, aliquet lectus. Maecenas iaculis tincidunt turpis, id interdum elit ultricies eu. Morbi dignissim, neque eu tincidunt cursus, arcu magna congue lorem, at hendrerit neque neque nec arcu. Integer condimentum nunc id sem fermentum, vitae posuere felis consequat. Nulla tortor purus, dapibus id venenatis at, pulvinar at elit. Duis dapibus, ante in varius euismod, lacus dui lobortis lacus, a rhoncus libero massa vitae dui.

Curabitur fringilla lacus a pellentesque faucibus. Fusce semper ex vitae velit gravida varius. Fusce mi quam, interdum at faucibus eget, luctus convallis neque. Aliquam finibus est a lectus elementum, quis pretium felis pretium. Cras eu felis rutrum, venenatis dolor non, aliquet dui. In hac habitasse platea dictumst. Mauris nec mi dictum, euismod libero id, pellentesque metus. Curabitur hendrerit mauris sed metus malesuada semper. Donec pretium lacus eget nibh rhoncus, et sollicitudin eros dictum. Proin vel nibh et lorem dictum viverra. Aenean a urna finibus, efficitur metus at, fermentum ex.

Vivamus sit amet dolor volutpat, feugiat dolor nec, interdum justo. Quisque consectetur, neque non suscipit scelerisque, risus lorem pharetra dui, in egestas ex elit in augue. Quisque aliquam sagittis congue. Sed dolor ex, lobortis et dolor non, aliquam semper turpis. Nulla eget molestie ante, a egestas nulla. Morbi aliquam id risus in vulputate. Sed eget condimentum ante. Pellentesque eu mauris dolor. Etiam ac nisl libero. ";

$textArray = explode(".", $text);
for($i=0; $i<count($textArray); $i++){
    echo"<p>";
    echo $textArray[$i];
    echo ".</p>";
};
?>