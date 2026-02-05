<!DOCTYPE html>
<html>

<head>
    <title>Preview Absensi</title>
    <style>
        body {
            background: #eee;
            font-family: Arial;
        }

        .page {
            width: 297mm;
            min-height: 210mm;
            background: white;
            margin: 10px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        @media print {
            body {
                background: white;
            }

            .page {
                box-shadow: none;
                margin: 0;
            }
        }
    </style>
</head>

<body>

    <div class="page">
        <?= $html_preview ?>
    </div>

</body>

</html>