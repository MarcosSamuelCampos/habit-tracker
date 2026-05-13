<x-layout>

<main class="py-10">
     
       @auth
          <h1>LOGADO - DASHBOARD</h1>
          <P>Bem vindo(a) {{ auth()->user()->name}}!</P>
        @endauth


        @guest
          <h1>VISITANTE</h1>
          <P>Bem vindo Visitante !</P>
        @endguest
</main>

   
</x-layout>