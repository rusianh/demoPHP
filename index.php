<?php

    $a = 0;
    var_dump($a);//show ra kieu du lieu
    die();//exit();


    //bài 5 toán tử
   /* && hoặc and
    || hoặc or
    ! : phủ định
*/

// Bài 6: Chuỗi Php
$a = "phong" ;
$b = "cin chào $a";
echo $b; // xin chào phong

$a = "phong";
$b = 'xin chao $a'
echo $b; // xin chao $b


//Nối chuỗi
$a = "dai ka";
$b = "phong";
echo $a.$b; // dai ka phong

//lấy độ dài chuỗi
echo strlen("phong")//5
echo str_word_count("hi every body")//3 đếm số từ 
echo strpos("hello world","world");// tìm kiếm trong chuỗi
echo str_replace("world","dolly","hello world")// output hello dolly

//bài 7: Mảng
$a = array(1,2,3);
$a = [1,2,3];

//mảng tuần tự
$a = [1,2,3,4,"phong"];
// $a[0]=1
// thêm phần tử $a[]="world";

//------------------------------
//mảng không tuần tự
$a = ["key1"=>1,"key2"=>"hello"];
//index nhất thiết không phải kiểu int
//truy xuất phần tử trong mảng dùng key: $a["key2"]="hello"
//thêm phần tử: $a["key3"]="world";
var_dump(a); // với mảng không dùng echo được

//------------------------------
//mảng đa chiều ex:
$a = [
    "key1"=>1,
    "key2"=>"hello",
    "key3"=> [
        "sub_child"=>"test"
    ]
]
;

$a["key3"]["sub1"]=1 //add thêm một phần tử mới trong mảng con
var_dump($a)
//phần tử trong mảng có thể là một mảng

//-----------------------------------------------------------------------------
//Bài 8: câu điều kiện trong PHP
if(condition) {

}
elseif(condition2) {

}//có thể có nhieefi elseif
else {
    
}//th còn lại


//---------------------
//switch case: hỗ trợ if else, bài toán có quá nhiều điều kiện so sánh
switch(n) {
    case 1:
        //thực hiện dòng code nếu n==1
        break; //break dùng để thỏa mãn đk và không chạy case tiếp theo
    case 2:
            //thực hiện code nếu n==2
            break;
    default:
    //nếu n không bằng giá trị nào trên case trên
}
//ex
$n=1;
switch ($n) {
    case 1:
        echo "hi"; //vì $n = 1 nên hiển thị là hi và break luôn
        break;
    case 2:
        echo "ba";
        break;
}

//------------------------------------------------------------------------
//Bài 9: Hàm php
//syntax
function function_name() {
    //lệnh thực thi
}
//Có 2 loại hàm: có giá trị trả về, và không có giá trị trả về

//Hàm là ctrinh thực hiện một tác vụ cụ thể, thực chất là những đoạn chương trình nhỏ giup giả quyết vấn đề lớn 
//Hàm là một phương pháp lập trình hướng thủ tục trong PHP và các ngôn ngư bậc cao khác
//Giúp người kiểm soát mạch lạc và không phải viết code cho các chức năng giống nhau

function show_my_name(){
    echo "phong";
}
function get_my_name(){
    return "phong";
}
show_my_name() //phong
var_dump(get_my_name()) // phong

//-----------------------------------
//tham trị -  tham số trong hàm:là các biến được truyền vào hàm đó để xử lí
function show_value($value,$value2){
    var_dump($value);
}
show_value("dai ka phong") //dai ka phong

//ex
function show_may_name($name,$age,$adress="hanoi"){
    echo $name."<br>";
    echo $age;
}
show_my_name("phong","21"); //do hàm có 3 tham trị nên lúc truyền vào cũng phải có 3 tham trị. ở đây do adress mặc định là HN nên chỉ cần 2 tham số

//-----------------------
//Tham chiếu trong hàm: chỉ truyền vào địa chỉ bộ nhớ của biến đó, Vì vậy khi giá trị biến được truyền vào trong hàm thay đổi sẽ kéo theo biến bên ngoài cũng thay đổi gtri
//ex
function change_value (&$value) { //& : định nghĩa kiểu biến truyền vào là kiểu tham chiếu
    $value = 20;
}
$hi = 10;
change_value($hi);
var_dump($hi); //$hi sẽ là 20

//----------------
//require, include trong PHP
// nạp thư viện vào file bạn đã code tạm
//Require: sau khi chèn file nếu bị có lỗi xảy ra thì sẽ xuất ra thông báo lỗi và không chạy các đoạn code tiếp theo
//Include : Sau khi chèn file nếu bị có lỗi xảy ra thì chương trình vẫn tiếp tục chạy các đoạn code tiếp theo
//Còn có require_once và include_once, chỉ nạp file một lần
//https://youtu.be/G9lLHGny-Vw

//---------------------------------------------------------------
// Bài 10: Vòng lặp PHP
// for- lặp một hành động với số lần nhất định 
for($x = 0; $x<=100;$x++) {
    echo "$x<br>";
} // syntax


// while - lặp một hành động dựa theo một điều kiện cụ thể mà nó trả về là true
// do while - vòng lặp này tương tự while, nhưng bạn có thể đặt một tập hợp các code vào hàm do() rồi nó sẽ lặp lại các code dựa theo một điều kiện nhaasts định
//foreach -  sử dunjng để lặp các khóa và giá trị trong một dữ liệu mảng. Cái này cũng được sử dụng rất nhiều khi làm việc các mảng.
//foreach($array as $value)
$colors = ["red","green","blue","yeallow"];

foreach ($colors as $value) {
    echo "$value <br>";
}

foreach($colors as $key=>$val){
    echo $key.'_'.$val."<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}

<<<<<<< HEAD
//------------------------------------------------------------------------
//Bài 11: Phương thức $_GET, $_POST trong PHP

// Phương thức GET tạo ra một chuỗi ký tự dài nhất xuất hiện trong server log của bạn, trong location: box của trình duyệt.
//Được giới hạn gửi tối đa 1024 ký tự
//Không bao giờ sử dụng phương thức GET nếu gửi password hoặc thông tin nhạy cảm lên server 
//GET không thể gui dữ liệu nhị phân, vi dụ như hình ảnh hoặc tài liệu lên word lên server
//Sử dụng biến global $_GET để lấy dữ liệu

//-----------------------
//phương thức POST không có bát kỳ hạn chế nào về kích thước dữ liệu sẽ gửi
//có thể sử dụng để dữ liệu nhị  phân
// dữ liệu đc gửi bởi phương thức POST thông qua HTTP header, vì vậy việc bảo mật phụ thuộc vào giao thức HTTP. Bằng việc sử dụng Secure HTTP, bạn có thể chắc chắn rằng thông tin của mình là an toàn.
// Sử dụng biến global $_POST để lấy dữ liệu
$_GET
=======
//Dung return: https://daynhauhoc.com/t/return-trong-function-php/12860
>>>>>>> 40a8cae012ff156a3889f302b70461d52e67df77
?>