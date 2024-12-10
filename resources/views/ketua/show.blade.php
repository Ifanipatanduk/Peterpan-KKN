<!DOCTYPE html>
<html>
<head>
    <title>PDF Viewer</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
</head>
<body>
    <div>
        <iframe 
            src="/path/to/pdfjs/web/viewer.html?file={{ asset('storage/' . $dokumen->File) }}" 
            width="100%" 
            height="600">
        </iframe>
    </div>
</body>
</html>
