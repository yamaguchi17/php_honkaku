<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>配列の配列 - honkaku</title>
</head>
<body>
    <?php
        $chars = [
            ['あ', 'い', 'う', 'え', 'お'],
            ['か', 'き', 'く', 'け', 'こ'],
            ['さ', 'し', 'す', 'せ', 'そ']
        ];
        $chars[] = ['た', 'ち', 'つ', 'て', 'と'];
    ?>
    <p>chars[0][0]：<?=$chars[0][0]?></p>
    <p>chars[0][1]：<?=$chars[0][1]?></p>
    <p>chars[0][2]：<?=$chars[0][2]?></p>
    <p>chars[1][0]：<?=$chars[1][0]?></p>
    <p>chars[1][1]：<?=$chars[1][1]?></p>
    <p>chars[1][2]：<?=$chars[1][2]?></p>
    <p><pre><?php print_r($chars);?></pre></p>
</body>
</html>
