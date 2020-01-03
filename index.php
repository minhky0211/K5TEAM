<?php require '/home/vol3_3/epizy.com/epiz_22728212/htdocs/PhPStrucs/strucsPage.php';
        require '/home/vol3_3/epizy.com/epiz_22728212/htdocs/Database/getData_PlusPlus.php';
?>
<!DOCTYPE html>
<html lang="vi-VN"
<head>
    <?php
    echo HeadPages();
    ?>
    <title>TimeTable - K5TEAM.CF</title>
</head>
<body >
<?php //Header
echo header_body();
?>
<?php //Thanh MENU
echo nav();
?>
    <article>
        <section class="container-tb">
            <div class="cover">
                <table class="table" id="table-c1">
                    <tr>
                        <th id="fixed-tb" colspan="7">Thời khóa biểu 11A3</th>
                    </tr>
                    <tr>

                        <td id="fixed-tb" rowspan="6">Sáng</td>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<th>" . $class_11A3[$i][0] . "</th>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][1] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][2] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][3] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][4] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][5] . "</td>";
                        }
                        ?>
                    </tr>

                    <tr>
                        <td colspan="7" id="fixed-tb">Lịch học CA2</td>
                    </tr>
                    <tr>
                        <td id="fixed-tb" rowspan="5">Chiều</td>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][6] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][7] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][8] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][9] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <td id="fixed-tb" colspan="7">Lịch học CA3</td>
                    </tr>
                    <tr>
                        <td id="fixed-tb" rowspan="5">Tối</td>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][10] . "</td>";
                        }
                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i <= 5; $i++){
                            echo "<td>" . $class_11A3[$i][11] . "</td>";
                        }
                        ?>
                    </tr>

                </table>
            </div>
            <!--
                <div class="cover">
                    <table class="table" id="table-c2">
                        <tr>
                            <th colspan="4" id="fixed-tb">Lịch kiểm tra 1 tiết | Học kì I 2019-2020</th>
                        </tr>
                        <tr>
                            <td id="fixed-tb" colspan="1" rowspan="2">Tuần</td>
                            <td id="fixed-tb" colspan="3">Khối</td>
                        </tr>
                        <tr>
                            <td>Khối 10</td>
                            <td>Khối 11</td>
                            <td>Khối 12</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Hóa</td>
                            <td>Hóa</td>
                            <td>Hóa</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Toán</td>
                            <td>Toán | Anh</td>
                            <td>Anh</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Anh | Lý</td>
                            <td></td>
                            <td>Toán</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td></td>
                            <td></td>
                            <td>Lý</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Hóa</td>
                            <td>Hóa</td>
                            <td>Toán | Hóa</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Toán</td>
                            <td>Toán | Lý</td>
                            <td>Văn</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Văn</td>
                            <td>Văn</td>
                            <td>Anh</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Toán | Anh</td>
                            <td>Anh | Toán</td>
                            <td>Toán</td>
                        </tr>


                    </table>

                </div>
                <div class="cover">
                    <table id="table-c3" class="table">
                        <tr>
                            <th colspan="8" id="fixed-tb">Lịch kiểm tra HKI, năm 2019 - 2020</th>
                        </tr>
                        <tr>
                          <td rowspan="2">Ngày</td>
                          <td rowspan="2">Buổi</td>
                          <td rowspan="2">Môn thi</td>
                          <td rowspan="2">Khối</td>
                          <td rowspan="2">Thời gian làm bài</td>
                          <td rowspan="2">Giờ phát đề thi cho thí sinh</td>
                          <td colspan="2">Thời điểm</td>
                        </tr>
                        <tr>

                          <td>Bắt đầu tính giờ</td>
                          <td>Kết thúc</td>
                        </tr>
                        <tr>
                          <td>Từ 09/12 đến 14/12</td>
                          <td>Sáng</td>
                          <td>TD, QP</td>
                          <td></td>
                          <td>Theo tiết tại lớp</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td rowspan="2">Ngày 16/12 (Thứ Hai)</td>
                          <td>Sáng</td>
                          <td>Vật Lý<br>Lịch Sử</td>
                          <td>11, 12<br>11, 12</td>
                          <td rowspan="4">45 phút</td>
                          <td></td>
                          <td>7h30'<br>8h45'</td>
                          <td>8h15'<br>9h30'</td>
                        </tr>
                        <tr>
                          <td>Chiều</td>
                          <td>Vật Lý<br>Lịch Sử</td>
                          <td>10<br>10</td>
                          <td></td>
                          <td>13h30'<br>14h45'</td>
                          <td>14h15'<br>15h30'</td>
                        </tr>
                        <tr>
                          <td rowspan="2">Ngày 17/12 (Thứ 3)</td>
                          <td>Sáng</td>
                          <td>Hóa Học<br>Địa Lý</td>
                          <td>11,12<br>11,12</td>
                          <td></td>
                          <td>7h30'<br>8h45'</td>
                          <td>8h15'<br>9h30'</td>
                        </tr>
                        <tr>
                          <td>Chiều</td>
                          <td>Hóa Học<br>Địa Lý</td>
                          <td>10<br>10</td>
                          <td></td>
                          <td>13h30'<br>14h45'</td>
                          <td>14h15'<br>15h30'</td>
                        </tr>
                        <tr>
                          <td rowspan="2">Ngày 18/12 (Thứ 4)</td>
                          <td>Sáng</td>
                          <td>Ngữ Văn<br>Tin Học</td>
                          <td>11, 12<br>11, 12</td>
                          <td>90 phút<br>45 phút</td>
                          <td></td>
                          <td>7h30'<br>9h30'</td>
                          <td>9h00'<br>10h15'</td>
                        </tr>
                        <tr>
                          <td>Chiều</td>
                          <td>Ngữ văn<br>Tin học</td>
                          <td>10<br>10</td>
                          <td>90 phút<br>45 phút</td>
                          <td></td>
                          <td>13h30'<br>15h30'</td>
                          <td>15h00'<br>16h15'</td>
                        </tr>
                        <tr>
                          <td rowspan="2">Ngày 18/12 (Thứ 5)</td>
                          <td>Sáng</td>
                          <td>Tiếng Anh<br>Công Nghệ</td>
                          <td>11, 12<br>11, 12</td>
                          <td>50 phút<br>45 phút</td>
                          <td></td>
                          <td>7h30'<br>8h50'</td>
                          <td>8h20'<br>9h35'</td>
                        </tr>
                        <tr>
                          <td>Chiều</td>
                          <td>Tiếng Anh<br>KTNN</td>
                          <td>10<br>10</td>
                          <td>50 phút<br>45 phút</td>
                          <td></td>
                          <td>13h30'<br>14h50'</td>
                          <td>14h20'<br>15h35'</td>
                        </tr>
                        <tr>
                          <td rowspan="6">Ngày 20/12 (Thứ 6)</td>
                          <td rowspan="4">Sáng</td>
                          <td rowspan="4">Toán</td>
                          <td rowspan="2">11</td>
                          <td rowspan="2">90 phút</td>
                          <td>Trắc nghiệm</td>
                          <td>7h30'</td>
                          <td>8h05'(35')</td>
                        </tr>
                        <tr>
                          <td>Tự luận</td>
                          <td>8h10'</td>
                          <td>9h05'(55')</td>
                        </tr>
                        <tr>
                          <td rowspan="2">12</td>
                          <td rowspan="2">90 phút</td>
                          <td>Trắc nghiệm</td>
                          <td>7h30'</td>
                          <td>8h40'(70')</td>
                        </tr>
                        <tr>
                          <td>Tự luận</td>
                          <td>8h45'</td>
                          <td>9h05'(20')</td>
                        </tr>
                        <tr>
                          <td rowspan="2">Chiều</td>
                          <td rowspan="2">Toán</td>
                          <td rowspan="2">10</td>
                          <td rowspan="2">90 phút</td>
                          <td>Trắc nghiệm</td>
                          <td>13h30'</td>
                          <td>13h55'(25')</td>
                        </tr>
                        <tr>
                          <td>Tự luận</td>
                          <td>14h00'</td>
                          <td>15h05'(65')</td>
                        </tr>
                        <tr>
                          <td rowspan="2">Ngày 21/12 (Thứ 7)</td>
                          <td>Sáng</td>
                          <td>Sinh Học<br>Công Dân</td>
                          <td>11, 12<br>11, 12</td>
                          <td rowspan="2">45 phút</td>
                          <td></td>
                          <td>7h30'<br>8h45'</td>
                          <td>8h15'<br>9h30'</td>
                        </tr>
                        <tr>
                          <td>Chiều</td>
                          <td>Sinh Học<br>Công Dân</td>
                          <td>10<br>10</td>
                          <td></td>
                          <td>13h30'<br>14h45'</td>
                          <td>15h15'<br>15h30'</td>
                        </tr>

                    </table>
                  </div>
                  -->
        </section>
    </article>
<?php //Footer
echo footer();
?>
<?php
echo  accessories();
?>
</body>
</html>
