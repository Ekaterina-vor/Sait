<?php session_start(); 
include_once './db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $formData = $_POST;
    $fields = [
        'email',
        'password',
    ];
    $errors = [];
    foreach ($formData as $key => $value){
        $formData[$key] = htmlspecialchars($value);
    }
    foreach($fields as $idx => $field){
        if(array_key_exists($field, $formData)){
            if($formData[$field]){
            continue;
        }
        
      }
        $errors[$field][] = 'Zapolni polya ishak';
    }
    // Проверка на совпадение почты
    $email = $formData['email'];
    $user = $db->query("
        SELECT id FROM users WHERE email = '$email'
    ")->fetchAll();
    if(empty($user)){
        $errors['email'][] = 'User not found ';
    } else {
    // Проверка на совпадение пароля
    $password = $formData['password'];
    $CheckUser = $db->query("
        SELECT id FROM users WHERE email = '$email' AND password = '$password'
    ")->fetchAll();
    if(!empty($user) && empty($CheckUser)){
        $errors['password'][] = 'Wrong password';
    }
    }
    //проверка на совпадение пороля
    if (empty($errors)){
        echo 123;
    }
    if (!empty($errors)){
        $_SESSION['auth-errors'] = $errors;
        header('Location: ../login.php');
    }
} else {
    echo 'Запрос неверный';
}
?>