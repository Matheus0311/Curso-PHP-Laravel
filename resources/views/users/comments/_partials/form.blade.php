@csrf
<textarea name="body" id="" cols="30" rows="10" placeholder="Comentário" class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent mb-4">{{ $comment->body ?? old('body') }}</textarea>
<label for="visible" class="flex items-center mb-4">
    <input type="checkbox" name="visible" @if (isset($comment) && $comment->visible) checked="checked" @endif class="form-checkbox h-4 w-4 text-blue-500">
    <span class="ml-2">Visível?</span>
</label>
<button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Enviar</button>
