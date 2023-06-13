
@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}" class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent mb-4">
<input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}" class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent mb-4">
<input type="password" name="password" placeholder="Senha:" class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent mb-4">
<br>
<label class="block text-gray-700 text-sm font-bold mb-2">Foto de Perfil</label>
<input type="file" name="image"
class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
<br>

