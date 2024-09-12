<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Bài tập buổi 2</h1>

<?php
// 1. Đếm số ký tự trong một chuỗi sử dụng hàm strlen()
$string1 = "Hello, World!";
$length = strlen($string1);
echo "1. Số ký tự trong chuỗi '$string1' là: $length<br>";

// 2. Đếm số từ trong một chuỗi sử dụng hàm str_word_count()
$string2 = "Hello, World!";
$wordCount = str_word_count($string2);
echo "2. Số từ trong chuỗi '$string2' là: $wordCount<br>";

// 3. Đảo ngược một chuỗi sử dụng hàm strrev()
$string3 = "Hello, World!";
$reversedString = strrev($string3);
echo "3. Chuỗi đảo ngược của '$string3' là: $reversedString<br>";

// 4. Tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()
$string4 = "Hello, World!";
$substring4 = "World";
$position = strpos($string4, $substring4);
if ($position !== false) {
    echo "4. Chuỗi con '$substring4' được tìm thấy trong chuỗi '$string4' tại vị trí: $position<br>";
} else {
    echo "4. Chuỗi con '$substring4' không được tìm thấy trong chuỗi '$string4'<br>";
}

// 5. Thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace()
$string5 = "Hello, World!";
$search = "World";
$replace = "PHP";
$newString = str_replace($search, $replace, $string5);
echo "5. Chuỗi mới sau khi thay thế là: $newString<br>";

// 6. Kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()
$string6 = "Hello, World!";
$prefix = "Hello";
$length6 = strlen($prefix);
if (strncmp($string6, $prefix, $length6) === 0) {
    echo "6. Chuỗi '$string6' bắt đầu với chuỗi con '$prefix'<br>";
} else {
    echo "6. Chuỗi '$string6' không bắt đầu với chuỗi con '$prefix'<br>";
}

// 7. Chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()
$string7 = "Hello, World!";
$upperString = strtoupper($string7);
echo "7. Chuỗi viết hoa: $upperString<br>";

// 8. Chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower()
$string8 = "Hello, World!";
$lowerString = strtolower($string8);
echo "8. Chuỗi viết thường: $lowerString<br>";

// 9. Chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()
$string9 = "hello, world!";
$capitalizedString = ucwords($string9);
echo "9. Chuỗi in hoa chữ cái đầu tiên của mỗi từ: $capitalizedString<br>";

// 10. Loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
$string10 = "   Hello, World!   ";
$trimmedString = trim($string10);
echo "10. Chuỗi sau khi loại bỏ khoảng trắng: '$trimmedString'<br>";

// 11. Loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim()
$string11 = " Hello, World!";
$trimmedLeftString = ltrim($string11);
echo "11. Chuỗi sau khi loại bỏ ký tự đầu tiên: '$trimmedLeftString'<br>";

// 12. Loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim()
$string12 = "Hello, World! ";
$trimmedRightString = rtrim($string12);
echo "12. Chuỗi sau khi loại bỏ ký tự cuối cùng: '$trimmedRightString'<br>";

// 13. Tách một chuỗi thành một mảng các phần tử sử dụng hàm explode()
$string13 = "Hello,World,PHP";
$array13 = explode(",", $string13);
echo "13. Mảng sau khi tách chuỗi: ";
print_r($array13);
echo "<br>";

// 14. Nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode()
$array14 = ["Hello", "World", "PHP"];
$string14 = implode(" ", $array14);
echo "14. Chuỗi sau khi nối: $string14<br>";

// 15. Thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad()
$string15 = "Hello";
$paddedString = str_pad($string15, 10, "!", STR_PAD_RIGHT);
echo "15. Chuỗi sau khi thêm ký tự: '$paddedString'<br>";

// 16. Kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm substr_compare()
$string16 = "Hello, World!";
$substring16 = "World!";
if (substr_compare($string16, $substring16, -strlen($substring16)) === 0) {
    echo "16. Chuỗi '$string16' kết thúc với chuỗi con '$substring16'<br>";
} else {
    echo "16. Chuỗi '$string16' không kết thúc với chuỗi con '$substring16'<br>";
}

// 17. Kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr()
$string17 = "Hello, World!";
$substring17 = "World";
if (strstr($string17, $substring17)) {
    echo "17. Chuỗi '$string17' chứa chuỗi con '$substring17'<br>";
} else {
    echo "17. Chuỗi '$string17' không chứa chuỗi con '$substring17'<br>";
}

// 18. Thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()
$string18 = "Hello, World! 123";
$replacedString = preg_replace("/[^a-zA-Z0-9]/", "*", $string18);
echo "18. Chuỗi sau khi thay thế: $replacedString<br>";

// 19. Kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm filter_var()
$string19 = "123";
if (filter_var($string19, FILTER_VALIDATE_INT) !== false) {
    echo "19. Chuỗi '$string19' là một số nguyên.<br>";
} else {
    echo "19. Chuỗi '$string19' không phải là một số nguyên.<br>";
}

// 20. Kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var()
$email = "example@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "20. Chuỗi '$email' là một email hợp lệ.<br>";
} else {
    echo "20. Chuỗi '$email' không phải là một email hợp lệ.<br>";
}

?>
    
</body>
</html>
