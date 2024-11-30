<?php
$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";
$response = file_get_contents($URL);
$results = json_decode($response, true);

// Since it returns a nested array, we need to access the 'results' key first
/*
Array
(
    [total_count] => 45
    [results] => Array
        (
            [0] => Array
                (
                    [year] => 2018-2019
                    [semester] => First Semester
                    [lfsl_ldrsy] => الفصل الدراسي الاول
                    [the_programs] => Number of students enrolled in bachelor programs
                    [lbrmj] => عدد الطلبة المقيدين في برامج البكالوريوس
                    [nationality] => Bahraini
                    [ljnsy] => بحريني
                    [colleges] => College of IT
                    [lklyt] => كلية تقنية المعلومات
                    [number_of_students] => 1622
                )
*/
?>
