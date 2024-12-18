<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Komentar dengan Balasan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .comment-section {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .comment {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .comment p {
            margin: 0;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .reply-form {
            margin-top: 10px;
        }

        .replies {
            margin-top: 10px;
            padding-left: 20px;
        }

        .reply {
            padding: 5px;
            margin-top: 5px;
            background-color: #f9f9f9;
            border-radius: 5px;
            border-left: 3px solid #007BFF;
        }

        strong {
            color: #007BFF;
        }

        .comment-input {
            margin-top: 20px;
            text-align: center;
        }

        .comment-input input {
            width: 80%;
            margin-bottom: 10px;
        }

        .comment-input button {
            width: 80%;
        }
    </style>
</head>
<body>

    <div class="comment-section">
        <!-- Komentar 1 -->
        <div class="comment" id="comment-1">
            <p><strong id="comment-name-1">Nama Pengguna 1</strong>: Ini adalah komentar pertama.</p>
            <button onclick="showReplyForm('comment-1')">Balas</button>
            <div class="replies" id="replies-comment-1"></div>
            <div class="reply-form" id="reply-form-comment-1" style="display:none;">
                <input type="text" id="reply-text-comment-1" placeholder="Tulis balasan..." />
                <button onclick="submitReply('comment-1')">Kirim Balasan</button>
            </div>
        </div>

        <!-- Komentar 2 -->
        <div class="comment" id="comment-2">
            <p><strong id="comment-name-2">Nama Pengguna 2</strong>: Ini adalah komentar kedua.</p>
            <button onclick="showReplyForm('comment-2')">Balas</button>
            <div class="replies" id="replies-comment-2"></div>
            <div class="reply-form" id="reply-form-comment-2" style="display:none;">
                <input type="text" id="reply-text-comment-2" placeholder="Tulis balasan..." />
                <button onclick="submitReply('comment-2')">Kirim Balasan</button>
            </div>
        </div>
    </div>

    <!-- Input untuk komentar utama -->
    <div class="comment-input">
        <input type="text" id="main-comment-text" placeholder="Tulis komentar Anda..." />
        <button onclick="submitMainComment()">Kirim Komentar</button>
    </div>

    <script>
        function showReplyForm(commentId) {
            const form = document.getElementById(`reply-form-${commentId}`);
            form.style.display = 'block'; // Menampilkan form balasan
        }

        function submitReply(commentId) {
            const replyText = document.getElementById(`reply-text-${commentId}`).value;
            const userName = prompt("Masukkan nama Anda:");

            if (replyText.trim() !== "" && userName) {
                const repliesContainer = document.getElementById(`replies-${commentId}`);
                const newReply = document.createElement('div');
                newReply.classList.add('reply');
                newReply.innerHTML = `<strong>${userName}</strong>: <p>${replyText}</p>`;
                repliesContainer.appendChild(newReply); // Menambah balasan ke daftar balasan
                document.getElementById(`reply-text-${commentId}`).value = ""; // Reset input
                document.getElementById(`reply-form-${commentId}`).style.display = 'none'; // Sembunyikan form balasan
            } else {
                alert("Teks balasan tidak boleh kosong atau nama tidak boleh kosong.");
            }
        }

        function submitMainComment() {
            const mainCommentText = document.getElementById('main-comment-text').value;
            const userName = prompt("Masukkan nama Anda:");

            if (mainCommentText.trim() !== "" && userName) {
                const commentSection = document.querySelector('.comment-section');
                const newComment = document.createElement('div');
                newComment.classList.add('comment');
                newComment.innerHTML = `
                    <p><strong>${userName}</strong>: ${mainCommentText}</p>
                    <button onclick="showReplyForm('comment-${Date.now()}')">Balas</button>
                    <div class="replies" id="replies-comment-${Date.now()}"></div>
                    <div class="reply-form" id="reply-form-comment-${Date.now()}" style="display:none;">
                        <input type="text" id="reply-text-comment-${Date.now()}" placeholder="Tulis balasan..." />
                        <button onclick="submitReply('comment-${Date.now()}')">Kirim Balasan</button>
                    </div>
                `;
                commentSection.appendChild(newComment);
                document.getElementById('main-comment-text').value = ""; // Reset input
            } else {
                alert("Teks komentar tidak boleh kosong atau nama tidak boleh kosong.");
            }
        }
    </script>
</body>
</html>
