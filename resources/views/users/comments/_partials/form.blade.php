@csrf
<textarea name="body" id="" cols="70" rows="10" placeholder="Comentários">{{ $comment->body ?? old('body') }}</textarea>
<label for="visible"  class="font-bold py-2">
    <input type="checkbox" name="visible"
        @if (isset($comment) && $comment->visible)
            checked="checked"            
        @endif    
    >
    Visível?
</label>
<button type="submit" class="shadow bg-green-400 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white text-sm rounded w-40 h-8 font-semibold py-2">
    Enviar
</button>