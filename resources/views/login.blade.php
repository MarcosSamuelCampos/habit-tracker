<x-layout>

<main class="py-10">
     <h1>Faça o Login</h1>

     <section class="mt-4">
          <form action="/login" method="POST">
            @csrf  
              @error('email')
               <p class="text-red-500 text-x1 mt-1">{{$message}}</p>
               @enderror
          <input type="email"
                     name="email" 
                     placeholder="your@email.com"
                     class="bg-white p-2  border-2">

               <input type="password" 
                     name="password"
                     placeholder="************"
                     class="bg-white p-2 border-2">

               <input type="submit"
                class="bg-white border-2 p-2">
          </form>

          <div>
             
          </div>
     </section>
</main>

   
</x-layout>