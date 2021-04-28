<?php
// คำสั่งแสดงผล
// echo "Hello PHP";
// echo "สวัสดี PHP";

/*
    ชื่อคลาสจะต้องขึ้นต้นด้วยตัวพิมพ์ใหญ่
    ชื่อไฟล์และชื่อ class ควรเป็นชื่อเดียวกัน
    ในหนึ่งไฟล์ควรมีแค่ class เดียว
    ใช้คำว่า class สำหรับการเริ่มต้นสร้าง
    ใน class จะต้องเปิดและปิดด้วย { }
*/

class Car
{
    // method หรือฟังก์ชันการทำงานใน class
    public function helloClass(){
        echo 'Hello from Car Class';
    }
}

