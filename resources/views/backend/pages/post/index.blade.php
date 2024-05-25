<!DOCTYPE html>
<html>

<head>
    <title>Laravel API Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

</head>

<body>
    <div class="container">
        <h1>Posts</h1>
    <div id="posts"></div>
    <button id="loadPosts">Load Posts</button>

    <h2>Add a new Post</h2>
    <form id="postForm">
        <input type="text" id="title" placeholder="Title" required>
        <textarea id="content" placeholder="Content" required></textarea>
        <button type="submit">Submit</button>
    </form>

    <h2>Edit Post</h2>
    <form id="editForm" style="display:none;">
        <input type="hidden" id="editId">
        <input type="text" id="editTitle" placeholder="Title" required>
        <textarea id="editContent" placeholder="Content" required></textarea>
        <button type="submit">Update</button>
        <button type="button" id="cancelEdit">Cancel</button>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Load posts without refreshing the page
        document.getElementById('loadPosts').addEventListener('click', function() {
            axios.get('/api/posts')
                .then(response => {
                    const posts = response.data;
                    let postsHtml = '';
                    posts.forEach(post => {
                        postsHtml += `<h3>${post.title}</h3><p>${post.content}</p>`;
                    });
                    document.getElementById('posts').innerHTML = postsHtml;
                })
                .catch(error => {
                    console.error('Error fetching posts:', error);
                });
        });

        // Submit new post without refreshing the page
        document.getElementById('postForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const title = document.getElementById('title').value;
            const content = document.getElementById('content').value;

            axios.post('/api/posts', {
                    title: title,
                    content: content
                })
                .then(response => {
                    console.log('Post created:', response.data);
                    document.getElementById('postForm').reset();
                    // Optionally reload posts to see the new post
                    document.getElementById('loadPosts').click();
                })
                .catch(error => {
                    console.error('Error creating post:', error);
                });
        });

        // edit
        function editPost(id, title, content) {
            document.getElementById('editId').value = id;
            document.getElementById('editTitle').value = title;
            document.getElementById('editContent').value = content;
            document.getElementById('editForm').style.display = 'block';
        }

        document.getElementById('editForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const id = document.getElementById('editId').value;
            const title = document.getElementById('editTitle').value;
            const content = document.getElementById('editContent').value;

            axios.put(`/api/posts/${id}`, {
                title: title,
                content: content
            })
            .then(response => {
                console.log('Post updated:', response.data);
                document.getElementById('editForm').reset();
                document.getElementById('editForm').style.display = 'none';
                document.getElementById('loadPosts').click();
            })
            .catch(error => {
                console.error('Error updating post:', error);
            });
        });

        // delete
        function deletePost(id) {
            axios.delete(`/api/posts/${id}`)
                .then(response => {
                    console.log('Post deleted');
                    document.getElementById('loadPosts').click();
                })
                .catch(error => {
                    console.error('Error deleting post:', error);
                });
        }

        document.getElementById('cancelEdit').addEventListener('click', function() {
            document.getElementById('editForm').reset();
            document.getElementById('editForm').style.display = 'none';
        });
    </script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
