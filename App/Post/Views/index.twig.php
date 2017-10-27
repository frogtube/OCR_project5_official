<?php

echo $twig->render('homepage.twig', array(
'pageTitle' => 'Welcome to Penguins R Us!',
'products' => array(
'Tuxedo',
'Bow tie',
'Black Boxers',
),
));