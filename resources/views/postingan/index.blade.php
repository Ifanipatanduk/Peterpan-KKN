<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan KKN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Rectangle Box (Area Caption) -->
    <div class="flex justify-center items-center h-40 mt-5">
        <div 
            class="w-2/3 h-16 bg-white rounded-lg shadow-lg flex items-center px-4 cursor-pointer hover:shadow-md"
            <button onclick="window.location.href='{{ route('DokumenController.createpostingan')}}'"></button>
            <span class="text-gray-500">Mulai bagikan kegiatan anda...</span>
        </div>
    </div>

    <!-- Postingan Section -->
    <div class="flex justify-center">
        <div class="w-2/3 mt-8 space-y-8">
            <!-- Contoh Postingan 1 -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <!-- Header Postingan -->
                <div class="flex items-center space-x-4 mb-2">
                    <div class="bg-gray-300 rounded-full w-10 h-10"></div>
                    <div>
                        <h4 class="font-bold">Kelompok_1_KKN Parangtritis</h4>
                    </div>
                </div>

                <!-- Caption -->
                <p class="mb-4">Keseruan kegiatan hari ini bersama masyarakat desa</p>

                <!-- Foto Postingan -->
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <img src="https://via.placeholder.com/300x200" alt="Foto 1" class="w-full h-auto rounded-md">
                    <img src="https://via.placeholder.com/300x200" alt="Foto 2" class="w-full h-auto rounded-md">
                </div>

                <!-- Icon Like, Comment, Share -->
                <div class="flex space-x-8">
                    <button class="flex items-center space-x-1 text-gray-600 hover:text-blue-600">
                        👍 <span>Suka</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 hover:text-blue-600">
                        💬 <span>Komentar</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 hover:text-blue-600">
                        🔗 <span>Bagikan</span>
                    </button>
                </div>
            </div>

            <!-- Contoh Postingan 2 -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <!-- Header Postingan -->
                <div class="flex items-center space-x-4 mb-2">
                    <div class="bg-gray-300 rounded-full w-10 h-10"></div>
                    <div>
                        <h4 class="font-bold">Robin_klpparangtritis1</h4>
                    </div>
                </div>

                <!-- Caption -->
                <p class="mb-4">Gotong royong membersihkan balai desa</p>

                <!-- Foto Postingan -->
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <img src="https://via.placeholder.com/300x200" alt="Foto 1" class="w-full h-auto rounded-md">
                    <img src="https://via.placeholder.com/300x200" alt="Foto 2" class="w-full h-auto rounded-md">
                </div>

                <!-- Icon Like, Comment, Share -->
                <div class="flex space-x-8">
                    <button class="flex items-center space-x-1 text-gray-600 hover:text-blue-600">
                        👍 <span>Suka</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 hover:text-blue-600">
                        💬 <span>Komentar</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 hover:text-blue-600">
                        🔗 <span>Bagikan</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>