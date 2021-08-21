<form action="{{ route('post.store') }}" method="POST">

    @csrf

    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title">
    </div>

    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input type="text" name="url_clean">
    </div>

    <div class="form-group">
        <label for="content">Url limpia</label>
        <textarea name="content" id="content" cols="20" rows="3"></textarea>
    </div>

    <input type="submit" value="Enviar">

    
</form>