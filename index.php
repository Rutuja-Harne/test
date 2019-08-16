<!doctype>
<html>
<head>
</head>
<body>
<?php
require_once "PHPExcel.php";
        $tmpfname = "blog.xlsx";
        $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
        $excelObj = $excelReader->load($tmpfname);
        $worksheet = $excelObj->getSheet(0);//
        $lastRow = $worksheet->getHighestRow();

        $data = [];

        for ($row = 1; $row <= $lastRow; $row++) {
            $data[$worksheet->getCell('A'.$row)->getValue()] = $worksheet->getCell('B'.$row)->getValue();

        }


echo "<pre>";
echo json_encode($data);
echo "</pre>";
?>
</body>
</html>
