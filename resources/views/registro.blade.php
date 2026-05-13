<x-layout>

<main class="py-10">
     
     <section class="bg-white mt-4 max-w-[600px] mx-auto p-10 pb-6 border-2">
          <h1 class="font-bold text-3x1">Registre-se</h1>  
           <p class="">Insire seus Dados</p>

          <form action="{{route('auth.registro')}}" method="POST" class="flex flex-col ">
            @csrf  
            

           <div class="flex flex-col gap-2 mb-4" >

          <label for="nome">
            Nome          
          </label>
          <input type="text"
                name="name" 
                placeholder="seu nome"
                class="bg-white p-2  border-2 @error('name') border-red-500 @enderror">
               
                @error('name')
                <p class="text-red-500 text-sm">
                    {{$message}}
                </p>
                @enderror
          </div>

          <div class="flex flex-col gap-2 mb-4" >

          <label for="email">
               E-mail          
          </label>
          <input type="email"
                name="email" 
                placeholder="your@email.com"
                class="bg-white p-2  border-2 @error('email') border-red-500 @enderror">
               
                @error('email')
                <p class="text-red-500 text-sm">
                    {{$message}}
                </p>
                @enderror
          </div>

          

          <div class="flex flex-col gap-2 mb-4">

          <label for="password">
               Senha
          </label>
          <input type="password" 
               name="password"
               placeholder="************"
               class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">

               @error('password')
          <p class="text-red-500 text-sm">
             {{$message}}
          </p>
          @enderror
          </div>

            <div class="flex flex-col gap-2 mb-4">

          <label for="password_confirmation">
               Confirmar Senha
          </label>
          <input type="password" 
               name="password_confirmation"
               placeholder="************"
               class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">

               @error('password')
          <p class="text-red-500 text-sm">
             {{$message}}
          </p>
          @enderror
          </div>

         <button type="submit" class="bg-white border-2 p-2">Cadastrar</button>
          </form>

          <p class="text-center mt-5"> já tem conta? <a href="{{route('site.login')}}" class="underline hover:text-blue-500 hover:opacity-50 transition">entre aqui!</a></p>
     </section>
</main>

   
</x-layout>