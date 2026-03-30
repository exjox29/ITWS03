<?php
$announcementList = [
    [
        "title" => "Midterm Examination",
        "time" => "12:30 PM - 5:30 PM",
        "date" => "March 5, 2026",
        "details" => "It is a sample long and super long details"

    ],
    [
        "title" => "Final Examination",
        "time" => "6:30 AM - 5:30 PM",
        "date" => "March 10, 2026",
        "details" => "It is a sample long and super long details"

    ],
    [
        "title" => "Enrollment for College",
        "time" => "1:30 PM - 8:30 PM",
        "date" => "March 8, 2026",
        "details" => "It is a sample long and super long details"

    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p,h2 {
            margin:0px;
        }

        .announcement {
            border: 1px solid black;
            border-radius: 4px;
            display: inline-block;
            width: calc(100% / 3 - 10px);
        }

        .announcement > .title {
            border-bottom: 1px solid black;
            padding: 12px;
            margin: 0px;
        }

        .announcement > .body {
            padding: 12px;
        }

        .time-value, .date-value {
            color: pink;
        }
    </style>
</head>
<body>
    <h1>Announcementssssssss</h1>
    <h1>Announcementssssssss</h1>

    <?php
    foreach ($announcementList as $announcement) {
    ?>

    <div class="announcement">
        <h2 class="title">
            <?php echo $announcement["title"];?>
        </h2>

        <div class="body">
            <p>
                <strong>Date: </strong>
                <span class="date-value">
                    <?php echo $announcement["date"];?>
                </span>
            </p>

            <p>
                <strong>Time: </strong>
                <span class="time-value">
                    <?php echo $announcement["time"];?>
                </span>
            </p>
            <br>
            <p class="details">
                <?php echo $announcement["details"];?>
            </p>
        </div>
    </div>

    <?php
    }
    ?>
</body>
</html>