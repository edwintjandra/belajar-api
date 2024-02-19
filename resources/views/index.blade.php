<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of Posts</h1>
<ul id="post-list">
</ul>

<script>
    fetch('/api/posts')
        .then(response => response.json())  
        .then(posts => {
            const postList = document.getElementById('post-list');
            posts.forEach(post => {
                const listItem = document.createElement('li');
                listItem.textContent = `${post.judul} - ${post.created_at}`; 
                postList.appendChild(listItem);
            });
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
</script>
    
</body>
</html>
