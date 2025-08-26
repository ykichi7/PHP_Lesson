<?php
// Q1 変数と文字列
<?php

$name = '吉野耕平';

echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
<?php

$num = 5 * 4;

echo $num . "\n";
echo $num /= 2;


// Q3 日付操作
<?php

date_default_timezone_set('Asia/Tokyo');

echo date('現在時刻は、Y年m月d日 H時i分s秒です。');

// Q4 条件分岐-1 if文
<?php

$device = 'mac';

//windows||mac の時
if ($device === 'windows' || $device === 'mac')
{
    echo '使用OSは、' .$device .'です。';
}
else //その他
{
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
<?php

$age = 21;
$message = ($age > 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$county = ['茨城県','群馬','埼玉県','栃木県','千葉県','東京都','神奈川県'];

echo $county[3].'と'.$county[4].'は関東地方の都道府県です。';

// Q7 連想配列-1
<?php

$county = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
];

foreach ($county as $city) {
    echo $city . "\n";
}

// Q8 連想配列-2
<?php

$county = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

echo "埼玉県の県庁所在地は、" . $county['埼玉県'] . "です。";


// Q9 連想配列-3
<?php

$county = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '静岡県' => '静岡市',
    '山梨県' => '甲府市'
];

foreach ($county as $prefecture => $city) {
    if (in_array($prefecture, $kanto)) {
        // 関東地方の場合
        echo $prefecture . "の県庁所在地は、" . $city . "です。\n";
    } else {
        // 関東地方以外の場合
        echo $prefecture . "は関東地方ではありません。\n";
    }
}

// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>