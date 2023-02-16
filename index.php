<?php
$json_data = file_get_contents('https://randomuser.me/api/?results=20');
$jsonRandomUser = json_decode($json_data, true);

?>

<?php foreach ($jsonRandomUser['results'] as $key => $value) {
    $firstName = $value['name']['first'];
    $lastName = $value['name']['last'];
    if ($value['gender'] === 'female') {
        $firstName = '<u>' . $value['name']['first'] . '</u>';
        $lastName = '<u>' . $value['name']['last'] . '</u>';
    }
    //echo $key . '=>' . $val;
?>


    <body style='display:flex;flex-wrap:wrap;'>
        <div style='width:15%;border:1px solid black;flex-direction:column;display:flex;flex-direction:column-reverse;height:20rem;padding:1rem;
        '>

            <img src="<?= $value['picture']['medium'] ?>" alt="" style=''>


            <?=

            $firstName . $lastName ?>


            <?= $value['email'] ?>
        </div>
    <?php } ?>