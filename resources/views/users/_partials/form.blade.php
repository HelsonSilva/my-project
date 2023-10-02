@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2 px-2">
<input type="email" name="email" placeholder="E-mail:" value="{{ $user->email  ?? old('email') }}" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2 px-2">
<input type="password" name="password" placeholder="Senha:" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2 px-2">
<div class="py-1.5">
    <input type="file" name="image" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-3 px-1 py-1">
</div>
<div class="py-1.5">
    <button type="submit" class="bg-green-400 rounded h-8 pl-3 text-white px-5">
        Enviar
    </button>
</div>
