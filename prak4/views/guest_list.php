<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>

    <style>
        body {
            background-color: #f8f9fa; 
            font-family: Arial, sans-serif; 
        }
        .container {
            width: 80%;
            margin: 50px auto; 
            padding: 20px;
            background-color: #fff; 
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        h3 {
            text-align: center; 
            color: #343a40; 
            margin-bottom: 30px;
        }
        table {
            width: 100%; 
            border-collapse: collapse;
        }
        th, td {
            padding: 12px; 
            text-align: left; 
            border: 1px solid #dee2e6; 
        }
        th {
            background-color: #007bff;
            color: white; 
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }
        tr:hover {
            background-color: #e9ecef;
        }
    </style>

</head>
<body>
<h3>Daftar Komentar</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Komentar</th>
            <th>Waktu</th>
        </tr>
        <?php while ($row = $guests->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['comment']); ?></td>
            <td><?php echo $row['created_at']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>