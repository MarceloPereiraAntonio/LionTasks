<x-app-layout>
  <div class="container mt-4">
    <h1>Task {{$task->title}}</h1>
    <div class="card" style="width: 30rem;">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$task->id}}</li>
        <li class="list-group-item">{{$task->title}}</li>
        <li class="list-group-item">{{$task->description}}</li>
        <li class="list-group-item">{{$task->name_category}}</li>
        <li class="list-group-item">{{$task->completed == 1 ? 'Completo' : 'Pendente'}}</li>
      </ul>
    </div>
    <a href="{{route('dashboard')}}" type="button" class="btn btn-secondary mt-2">Voltar</a>
  </div>
</x-app-layout>
