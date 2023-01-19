<a href="../../controller/post/post.create.controller.php" class="btn btn-primary mt-2">Add Post</a>
  <main>
    <div class="p-3">
    <?php foreach($posts as $post): ?>
      <li>
        <?= $post['title'] ?> |  
        <span><?= $post['description'] ?></span> | 
        <a href="/delete?id=<?= $post['id'] ?>" >Delete</a> |
        <a href="/edit?id=<?= $post['id'] ?>">Edit</a>
      </li>

    <?php endforeach; ?>
    </div>
  </main>
