<?php
// 日付のオブジェクトで指定
$today = new DateTime();
print($today->format('G時 i分 s秒'));
?>

<?php
    // Define a class
    class User {
        // Properties (attributes)
        public $name;
        // Methods (functions)
        public function sayhello(){
            return $this->name .' say Hello';
        }
    }

    // Instaiate a user object from the user class
    $user1 = new User();
    $user1->name = 'Yu';
    echo $user1->name;
    echo '<br>';
    echo $user1->sayhello();

    echo '<br>';

    // Create new user
    $user2 = new User();
    $user2 ->name = 'ninja';
    echo $user2->name;
    echo '<br>';
    echo $user2->sayhello();