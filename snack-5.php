<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque odio non voluptatem laboriosam possimus amet consequatur ad mollitia ducimus aperiam id vitae ex animi totam tempore, incidunt impedit tempora nobis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse consectetur quas sapiente molestias tempora, quis nihil quam assumenda atque temporibus neque dolore voluptatem distinctio laborum vitae magnam tenetur suscipit debitis!. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis a porro blanditiis sit doloremque sint eos voluptates eveniet earum quod? Itaque laborum consequatur porro dolor est quidem, quaerat voluptatem quia. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae dignissimos id, fugiat iure doloremque impedit? Quo esse rerum illum, odio magnam labore numquam ea corporis provident maiores velit veniam ad';

    // con str_replace
    $paragNew = str_replace('.', '. <br>', $paragraph);
    echo $paragNew;

    // con replace
    // $paragNew = explode('.', $paragraph);

    // for ($i=0; $i < count($paragNew) ; $i++) { 
    //     echo ($paragNew[$i]) . '.' . '<br>';
    // }
?>