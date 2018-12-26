<?php require_once "menu.php"; ?>
        
        <div class="sendpost-title">
            <p>Manage Posts:</p>
            <hr>
        </div>
        <form class="sendpost-form">
            <label for="title">Title:</label>
            <input type="text" name="post-title" id="title" placeholder="title">  
            <label for="addr">Address of image:</label>
            <input type="text" name="image-addr" id="addr" placeholder="address of image">
            <label for="content">Content:</label>
            <textarea name="content" id="content"></textarea>
            <input type="submit" value="send post">
            <a href="#">Upload image</a>
            
            <br><br>
           
            
        </form>
    </body>
</html>
