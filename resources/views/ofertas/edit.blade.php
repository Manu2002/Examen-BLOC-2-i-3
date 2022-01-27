@include('partials.header')
@include('partials.menu')

<div class="d-flex d-flex justify-content-center vh-100">
<form action="{{route('ofertas.update', $ganga->id)}}" method='POST' enctype="multipart/form-data">
    <h1>Editar Oferta</h1>
    <br>
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Escribe el título aquí" value="{{$errors->any() ?  old('title') : $ganga->title}}">
        @if ($errors->has('title'))
            <div class="text-danger">
                {{ $errors->first('title') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" id="description" class="form-control" placeholder="Escribe la description aquí" rows="4" cols="50">{{$errors->any() ?  old('description') : $ganga->description}}</textarea>
        @if ($errors->has('description'))
            <div class="text-danger">
                {{ $errors->first('description') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="url">URL</label>
        <textarea type="text" name="url" id="url" class="form-control" placeholder="Escribe la url aquí" rows="4" cols="50">{{$errors->any() ?  old('url') : $ganga->URL}}</textarea>
        @if ($errors->has('url'))
            <div class="text-danger">
                {{ $errors->first('url') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="points">Points</label>
        <input type="number" name="points" id="points" class="form-control" placeholder="Points" value="{{$errors->any() ?  old('points') : $ganga->points}}">
        @if ($errors->has('points'))
            <div class="text-danger">
                {{ $errors->first('points') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="file">Imagen</label>
        <input type="file" name="img" value="{{$errors->any() ?  old('img') : $ganga->img }}">
        @if ($errors->has('img'))
            <div class="text-danger">
                {{ $errors->first('img') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="price">Precio Original</label>
        <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Escribe el price aquí" value="{{$errors->any() ?  old('price') : $ganga->price }}">
        @if ($errors->has('price'))
            <div class="text-danger">
                {{ $errors->first('price') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="discount_price">Precio Original</label>
        <input type="number" step="0.01" name="discount_price" id="discount_price" class="form-control" placeholder="Escribe el discount price aquí" value="{{$errors->any() ?  old('discount_price') : $ganga->discount_price }}">
        @if ($errors->has('discount_price'))
            <div class="text-danger">
                {{ $errors->first('discount_price') }}
            </div>
        @endif
    </div>
    <label for="available">Disponible: </label>
    <div class="form-group">
        <select id="available" name="available">
{{--            <label for="available">Yes: <input type="radio" value="1" @if($ganga->available) checked @endif ></label>--}}
{{--            <label for="available">No: <input type="radio" value="0" @if(!$ganga->available) checked @endif></label>--}}
            @if($ganga->available == 1)
                <option value="1">si</option>
                <option value="0">no</option>
            @else
                <option value="0">no</option>
                <option value="1">si</option>
            @endif
        </select>
        <br>
    </div>
    <br>
    <label for="category_id">Categoria: </label>
    <div class="form-group">
        <select id="category_id" name="category_id">
            <option value="{{$ganga->category_id}}">{{$categories[$ganga->category_id-1]->title}}</option>
            @foreach($categories as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->title}}</option>
            @endforeach
        </select>
        @if ($errors->has('available'))
            <div class="text-danger">
                {{ $errors->first('available') }}
            </div>
        @endif
    </div>
    <br>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Editar oferta</button>
    </div>
</form>
    </div>
@include('partials.footer')
