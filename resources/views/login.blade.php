<x-layout>

<main class="py-10">
     <h1 class="font-bold text-3x1">Faça o Login</h1>

     <p class="">Insire seus Dados</p>
     <section class="bg-white mt-4 max-w-[600px] mx-auto p-10 border-2">
          <form action="/login" method="POST" class="flex flex-col ">
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

          <div>
             
          </div>
     </section>
</main>

   
</x-layout>