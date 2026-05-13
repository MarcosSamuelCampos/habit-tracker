<x-layout>

<main class="py-10">
     
     <section class="bg-white mt-4 max-w-[600px] mx-auto p-10 pb-6 border-2">
          <h1 class="font-bold text-3x1">Faça o Login</h1>  
           <p class="">Insire seus Dados</p>

          <form action="{{route('site.login')}}" method="POST" class="flex flex-col ">
            @csrf  
            
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

          <input type="submit"
                 class="bg-white border-2 p-2">
          </form>

          <p class="text-center mt-5"> ainda não tem conta? <a href="{{route('site.registro')}}" class="underline hover:text-blue-500 hover:opacity-50 transition">registre-se aqui!</a></p>
     </section>
</main>

   
</x-layout>