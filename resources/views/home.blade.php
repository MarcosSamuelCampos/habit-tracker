<x-layout>

<main class="py-10">
     @auth
     <p>
          Bem vindo(a), {{auth()->user()->name}}!
     </p>
     @endauth
     <h1>Veja seus hábitos ganharem vida</h1>
</main>

   
</x-layout>