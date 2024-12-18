<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posting Kegiatan</title>
    <!-- Tambahkan Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">
    <!-- Container Utama -->
    <div class="bg-white border rounded-lg shadow-lg p-4 w-3/4 md:w-1/2">
        <!-- Rectangle Box (Area Caption) -->
        <div class="relative border border-gray-300 rounded-lg h-32 flex justify-center items-center">
            <input 
                type="text" 
                id="caption" 
                class="w-full h-full absolute inset-0 border-none text-gray-700 text-sm focus:outline-none p-4"
                placeholder="Apa kegiatan yang ingin anda bagikan?" />
        </div>

        <!-- Area Preview Foto -->
        <div id="preview-container" class="flex flex-wrap mt-4 gap-2"></div>

        <!-- Tombol Upload Foto dan Posting -->
        <div class="flex justify-between items-center mt-4">
            <!-- Tombol Upload Foto -->
            <label for="upload" class="cursor-pointer flex items-center text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553 4.553a1.5 1.5 0 01-2.121 2.121L12 12.121l-5.432 5.432a1.5 1.5 0 11-2.121-2.121L9 10m6 0V5a1.5 1.5 0 10-3 0v5m3 0h-3" />
                </svg>
                <span class="ml-2">Pilih Foto</span>
                <input type="file" id="upload" multiple accept="image/*" class="hidden">
            </label>
            
            <!-- Tombol Posting -->
            <button id="post-button" style="background-color: #1A5319; color: white; padding: 10px 20px; border-radius: 5px;" onclick="window.location.href='/createpostingan'">Posting</button>
        </div>
    </div>

    <!-- Script JavaScript -->
    <script>
        const uploadInput = document.getElementById('upload');
        const previewContainer = document.getElementById('preview-container');

        // Event untuk menampilkan preview gambar
        uploadInput.addEventListener('change', function(event) {
        const files = event.target.files;
        previewContainer.innerHTML = ""; // Reset preview container

    // Loop melalui semua file yang dipilih
        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) {
                 const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = "h-24 w-24 object-cover rounded border";
                previewContainer.appendChild(img);
            };

            reader.readAsDataURL(file);
        }
    });
});
        // Event untuk "Posting" (contoh fungsi)
        document.getElementById('post-button').addEventListener('click', function() {
            const caption = document.getElementById('caption').value;

            if (caption.trim() === "" || previewContainer.innerHTML === "") {
                alert("Silakan tambahkan caption dan foto terlebih dahulu!");
            } else {
                alert("Posting berhasil!\nCaption: " + caption);
            }
        });
    </script>
</body>
</html>