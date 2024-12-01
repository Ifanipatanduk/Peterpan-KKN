<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Document</title>
</head>
<body>
    <iframe src="{{ storage::url($dokumen->path)}}" width="100%" height="600px"></iframe>
</body>
</html>