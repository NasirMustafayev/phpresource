<?php
$Date = date('d-m-Y');

$Getmonth = date('F');
$Replacedate = array('January' => 'Yanvar', 'Februrary' => 'Fevral', 'March' => 'Mart', 'April' => 'Aprel', 'May' => 'May', 'June' => 'Iyun', 'July' => 'Iyul', 'August' => 'Avqust', 'September' => 'Sentyabr', 'October' => 'Oktyabr', 'Novomber' => 'Noyabr', 'December' => 'Dekabr');
$Month = $Replacedate[$Getmonth];

$Getday = date('j');

$Days = array(
	"03-03-2019" => "1", "04-03-2019" => "1", "05-03-2019" => "1", "06-03-2019" => "1", "07-03-2019" => "1",
	"08-03-2019" => "1", "09-03-2019" => "0", "10-03-2019" => "0", "11-03-2019" => "0", "12-03-2019" => "0",
	"13-03-2019" => "0", "14-03-2019" => "0", "15-03-2019" => "0", "16-03-2019" => "1", "17-03-2019" => "1",
	"18-03-2019" => "1", "19-03-2019" => "1", "20-03-2019" => "1", "21-03-2019" => "1", "22-03-2019" => "1",
	"23-03-2019" => "0", "24-03-2019" => "0", "25-03-2019" => "0", "26-03-2019" => "0", "27-03-2019" => "0",
	"28-03-2019" => "0", "29-03-2019" => "0", "30-03-2019" => "1", "31-03-2019" => "1", "01-04-2019" => "1",
	"02-04-2019" => "1", "03-04-2019" => "1", "04-04-2019" => "1", "05-04-2019" => "1", "06-04-2019" => "0",
	"07-04-2019" => "0", "08-04-2019" => "0", "09-04-2019" => "0", "10-04-2019" => "0", "11-04-2019" => "0",
	"12-04-2019" => "0", "13-04-2019" => "1", "14-04-2019" => "1", "15-04-2019" => "1", "16-04-2019" => "1",
	"17-04-2019" => "1", "18-04-2019" => "1", "19-04-2019" => "1", "20-04-2019" => "0", "21-04-2019" => "0",
	"22-04-2019" => "0", "23-04-2019" => "0", "24-04-2019" => "0", "25-04-2019" => "0", "26-04-2019" => "0",
	"27-04-2019" => "1", "28-04-2019" => "1", "29-04-2019" => "1", "30-04-2019" => "1", "01-05-2019" => "1",
	"02-05-2019" => "1", "03-05-2019" => "1", "04-05-2019" => "0", "05-05-2019" => "0", "06-05-2019" => "0",
	"07-05-2019" => "0", "08-05-2019" => "0", "09-05-2019" => "0", "10-05-2019" => "0", "11-05-2019" => "1",
	"12-05-2019" => "1", "13-05-2019" => "1", "14-05-2019" => "1", "15-05-2019" => "1", "16-05-2019" => "1",
	"17-05-2019" => "1", "18-05-2019" => "0", "19-05-2019" => "0", "20-05-2019" => "0", "21-05-2019" => "0",
	"22-05-2019" => "0", "23-05-2019" => "0", "24-05-2019" => "0", "25-05-2019" => "1", "26-05-2019" => "1",
	"27-05-2019" => "1", "28-05-2019" => "1", "29-05-2019" => "1", "30-05-2019" => "1", "31-05-2019" => "1",
);

$Weekselect = $Days[$Date];
?>