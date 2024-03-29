@csrf

<div class="form-group">
    <label class="form-label" for="title">Titulo</label>
    <input class="form-control" type="text" name="title" id="title" value="{{ old('title',$post->title) }}">

    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="url_clean">Url limpia</label>
    <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{ old('url_cleanl',$post->url_clean) }}">
</div>

<div class="form-group">
    <label class="form-label" for="category_id">Seleccionar Categoría</label>
    <select id="category_id" class="form-select" name="category_id">
        @foreach ($categories as $title => $id)
            <option {{ $post->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}"> 
                {{ $title }} 
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label class="form-label" for="posted">Posted</label>
    <select id="posted" class="form-select" name="posted">
        @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
    </select>
</div>

<div class="form-group">
    <label class="form-label" for="content">Contenido</label>
    <textarea class="form-control" name="content" id="content" cols="20" rows="3">{{ old('content', $post->content) }}</textarea>
</div>

<input type="hidden" id="token" value="{{ csrf_token() }}">

<input class="btn btn-outline-success btn-lg mt-3" type="submit" value="Enviar">


