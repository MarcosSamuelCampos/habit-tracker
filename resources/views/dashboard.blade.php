<x-layout>

<main class="py-10">
     
       @auth
          <h1>LOGADO - DASHBOARD</h1>
        @endauth


        @guest
          <h1>VISITANTE</h1>
        @endguest
</main>

   
</x-layout>