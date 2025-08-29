<?php
// Q1 tic-tac問題

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 === 0) {
        echo "tic\n";
    } elseif ($i % 5 === 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列

<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//問題1

// var_dump($personalInfos);
echo $personalInfos[1]['name'] .'の電話番号は'.$personalInfos[1]['tel']. "です。\n";  


//問題2

<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

foreach ($personalInfos as $info) {
    echo $info['name'] . 'の電話番号は' . $info['tel'] . "です。\n";
}

//問題3

<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//追加
$ageList = [25, 30, 18];

foreach ($personalInfos as $ages => $info) {
    
    $personalInfos[$ages]['age'] = $ageList[$ages];
}

var_dump($personalInfos);   

// Q3 オブジェクト-1

<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        if (!is_int($id) || $id <= 0) {
            throw new Exception("studentIdは正の整数を指定してください。");
        }

        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
    
    //追加で記載
    public function introduce()
    {
        echo '学籍番号'.$this->studentId.'番の生徒は'.$this->studentName.'です。';
    }
}

$student = new Student(120, "山田");
$student->introduce();

// Q4 オブジェクト-2

<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        if (!is_int($id) || $id <= 0) {
            throw new Exception("studentIdは正の整数を指定してください。");
        }

        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($leson)
    {
        echo  $this->studentName.'は'.($leson).'の授業に出席しました。学籍番号:'.$this->studentId;
    }
    
    //追加で記載
    public function introduce()
    {
        echo '学籍番号'.$this->studentId.'番の生徒は'.$this->studentName.'です。';
    }
}

// $student = new Student(120, "山田");
// $student->introduce();
$yamada = new Student(120, '山田');
$yamada->attend('PHP');



// Q5 定義済みクラス
<?php

//問題1

// 現在の日時を取得して一ヶ月引く
$date = new DateTime('-1 month');

echo $date->format('Y-m-d');

//問題2

<?php

$today = new DateTime();

// 基準日（1992年4月25日）
$specifiedday = new DateTime('1992-04-25');

// 日付の差を計算
$interval = $today->diff($specifiedday);

// 総日数を計算
$totalDays = $interval->days;

// 出力
echo "あの日から" . $totalDays . "日経過しました。";



?>