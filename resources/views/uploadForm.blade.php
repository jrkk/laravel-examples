<html>
   <body>
    <form action="http://127.0.0.1:8000/uploadF" enctype="multipart/form-data" method="POST" >
        <input type="file" name="image" accept="image/*">
        <input type="submit">
        {{ csrf_field() }}
    </form>
   </body>
</html>