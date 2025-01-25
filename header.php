<?php
$itens = ["Home", "Sobre", "Contato"];
?>

<header class="bg-gray-800 text-white p-4">
    <ul>
        <?php
            foreach ($itens as $item) { 
                echo "<li>$item</li>";
            }
        ?>
    </ul>
</header>