@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2 px-2">
<input type="email" name="email" placeholder="E-mail:" value="{{ $user->email  ?? old('email') }}" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2 px-2">
<input type="password" name="password" placeholder="Senha:" class="md:w-1/4 bg-gray-200 appearance-none text-sm rounded h-8 pl-2 px-2">
<button type="submit" class="shadow bg-green-400 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white text-sm rounded w-40 h-8 font-semibold">
    Enviar
</button>