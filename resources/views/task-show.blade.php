<x-app-layout>
  <div class="container-sm mt-4">
    <div class="card p-3 " style="width: 50rem;">
      <h1>Task {{$task->title}}</h1>
      <div class="input-group flex-nowrap mb-2">
        <span class="input-group-text" id="addon-wrapping">ID</span>
        <input type="text" class="form-control"
          aria-describedby="addon-wrapping" value="{{$task->id}}" readonly>
      </div>
      <div class="input-group flex-nowrap mb-2">
        <span class="input-group-text" id="addon-wrapping">Titulo</span>
        <input type="text" class="form-control"
          aria-describedby="addon-wrapping" value="{{$task->title}}" readonly>
      </div>
      <div class="input-group flex-nowrap mb-2">
        <span class="input-group-text" id="addon-wrapping">Descrição</span>
        <input type="text" class="form-control"
          aria-describedby="addon-wrapping" value="{{$task->description}}" readonly>
      </div>
      <div class="input-group flex-nowrap mb-2">
        <span class="input-group-text" id="addon-wrapping">Categoria</span>
        <input type="text" class="form-control"
          aria-describedby="addon-wrapping" value="{{$task->name_category ?? 'Sem categoria'}}" readonly>
      </div>
      <div class="input-group flex-nowrap mb-2">
        <span class="input-group-text" id="addon-wrapping">Status</span>
        <input type="text" class="form-control"
          aria-describedby="addon-wrapping" value="{{$task->completed == 1 ? 'Completo' : 'Pendente'}}" readonly>
      </div>
    </div>
    <a href="{{route('dashboard')}}" type="button" class="btn btn-secondary mt-2">Voltar</a>
  </div>
</x-app-layout>
